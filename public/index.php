<?php
require_once 'api.php';

$valueUSD = get_usd_rate();
$valueEUR = get_eur_rate();
$valueGBP = get_gbp_rate();

$exchangeRates = [
    'usd' => $valueUSD,
    'eur' => $valueEUR,
    'gbp' => $valueGBP,
];
$valueFrom = (float) str_replace(',', '.', $_POST['value-from']);
$CurrencyFrom = $_POST['select-from'];
$CurrencyTo = $_POST['select-to'];

$result = 0;
if (isset($valueFrom) && isset($CurrencyFrom) && isset($CurrencyTo)) {
    $result = round($valueFrom / $exchangeRates[$CurrencyTo], 2, PHP_ROUND_HALF_UP);
    $result = number_format($result, 2, ',', '');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Currency Converter</title>
</head>

<body>
    <img src="assets/img/logo.gif" alt="">

    <div id="container">
        <form action="" method="post">
            <div id="convert-area">
                <div style="display: flex;">
                    <select name="select-from" id="select-from">
                        <option value="brl" selected="selected">🇧🇷 Real brasileiro</option>
                    </select>
                    <input type="text" name="value-from" id="value-from" placeholder="$0" value="1">
                </div>

                <p>X</p>

                <div style="display: flex;">
                    <select name="select-to" id="select-to">
                        <option value="usd" selected="selected">🇺🇸 Dólar americano</option>
                        <option value="eur">🇪🇺 Euro</option>
                        <option value="gbp">🇬🇧 Libra esterlina</option>
                    </select>
                    <input type="text" name="value-to" id="value-to" placeholder="$0" value="<?php echo $result; ?>"
                        readonly>
                </div>
            </div>

            <div style="display: flex; justify-content: center; margin-top: 20px;">
                <button type="submit">Converter</button>
            </div>
        </form>
    </div>
</body>

</html>