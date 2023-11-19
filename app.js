
$(function(){
    
    $('.form-button').on('click', function(){
        let data = {
            'name' : $('[name = "name"]').val(),
            'phone' : $('[name = "phone"]').val(),
            'email' : $('[name = "email"]').val()
        };

        $.post('api.php', data, function(){
            alert('Данные отправлены');
        })

        console.log(data);
        return false;
    });
});
