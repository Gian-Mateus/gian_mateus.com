$(function(){
    $(document).on('submit', '#enviaEmail', function(){
        $.ajax({
            url: URL+'api/envia.php',
            type: 'POST',
            dataType: 'JSON',
            data: $(this).serialize(),
            success: function(retorno){
                if(retorno.status == 'success'){

                }else{
                    $('.resultado').html(`<div class="alert alert-warning" role="alert">
                    ${retorno.message}
                </div>`)
                }
            }
        })
        return false
    })
})