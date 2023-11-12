
$(function(){
    
    $('.form-button').on('click', function(){
        alert('Yes');
        let data = {
            'name' : $('[name = "name"]').val(),
            'phone' : $('[name = "phone"]').val(),
            'email' : $('[name = "email"]').val()
        };

        console.log(data);
        return false;
    });
});
