$(document).ready(function() {
    $('#cep').on('blur', function() {
        var cep = $(this).val().replace(/\D/g, ''); 

        if (cep.length === 8) { 
            $.getJSON('https://viacep.com.br/ws/' + cep + '/json/', function(data) {
                if (!data.erro) {
                    $('#endereco').val(data.logradouro);
                    $('#bairro').val(data.bairro);
                    $('#cidade').val(data.localidade);
                    $('#estado').val(data.uf);
                    $('#alert').hide(); 
                } else {
                    $('#alert').text('CEP não encontrado').show();
                    limpaForm(); 
                }
            }).fail(function() {
                $('#alert').text('Erro ao buscar o CEP').show();
                limpaForm(); 
            });
        } else {
            $('#alert').text('Formato de CEP inválido').show();
            limpaForm(); 
        }
    });

    function limpaForm() {
        $('#endereco').val('');
        $('#bairro').val('');
        $('#cidade').val('');
        $('#estado').val('');
    }
});
