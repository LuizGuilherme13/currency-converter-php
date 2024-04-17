$('form').submit(function (e) {
    e.preventDefault()

    const formData = new FormData(this)

    $.ajax({
        url: '../../api.php',
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function (res) {
            $('#value-to').val(res)
        },
        error: function () {
            console.error('Erro ao chamar API');
        }
    })
})

$('#value-from').on('keyup', function () {
    const formData = new FormData($('form').get(0))

    $.ajax({
        url: '../../api.php',
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function (res) {
            $('#value-to').val(res)
        },
        error: function () {
            console.error('Erro ao chamar API');
        }
    })
})