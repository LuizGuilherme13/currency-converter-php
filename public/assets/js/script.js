$('button').on('click', function () {
    const selectFrom = $('#select-from').val()
    const selectTo = $('#select-to').val()

    $('#select-from').val(selectTo)
    $('#select-to').val(selectFrom)
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