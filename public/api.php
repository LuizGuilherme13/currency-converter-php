<?php
function get_usd_rate()
{
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoMoedaPeriodo(moeda=@moeda,dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@moeda=\'USD\'&@dataInicial=\'04-03-2024\'&@dataFinalCotacao=\'04-05-2024\'&$top=3&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $data = json_decode(file_get_contents($url), true);
    $cotacao = (float) $data['value'][0]['cotacaoCompra'];


    return round($cotacao, 2, PHP_ROUND_HALF_UP);
}

function get_eur_rate()
{
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoMoedaPeriodo(moeda=@moeda,dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@moeda=\'EUR\'&@dataInicial=\'04-03-2024\'&@dataFinalCotacao=\'04-05-2024\'&$top=3&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $data = json_decode(file_get_contents($url), true);
    $cotacao = (float) $data['value'][0]['cotacaoCompra'];

    return round($cotacao, 2, PHP_ROUND_HALF_UP);
}

function get_gbp_rate()
{
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoMoedaPeriodo(moeda=@moeda,dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@moeda=\'GBP\'&@dataInicial=\'04-03-2024\'&@dataFinalCotacao=\'04-05-2024\'&$top=3&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $data = json_decode(file_get_contents($url), true);
    $cotacao = (float) $data['value'][0]['cotacaoCompra'];

    return round($cotacao, 2, PHP_ROUND_HALF_UP);
}