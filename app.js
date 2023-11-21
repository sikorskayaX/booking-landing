
$(function(){
    
    $('.form-button').on('click', function(){
        let data = {
            'name' : $('[name = "name"]').val(),
            'phone' : $('[name = "phone"]').val(),
            'email' : $('[name = "email"]').val()
        };

        // clear forms
        $.post('api.php', data, function(response){
            if (response == 1){
                $('[name = "name"]').val('');
                $('[name = "phone"]').val('');
                $('[name = "email"]').val('');
                alert('Your application has been accepted! ');
            }
            else {
                alert('Error!');
            }
        })

        console.log(data);
        return false;
    });
});
