$(document).ready(function () {
    var pattern = /^[a-z0-9_-]+@[a-z0-9-]+\.([a-z]{1,6}\.)?[a-z]{2,6}$/i;
    var mail = $('#mail');
    var name = $('#fio');
    
    mail.blur(function () {

        if (mail.val() !== '') {
            if (mail.val().search(pattern) == 0) {
                $('#valid').text('');
                $('#send').attr('disabled', false);
                mail.removeClass('error').addClass('ok');
            } else {
                $('#valid').text('Некорректный e-mail!');
                $('#send').attr('disabled', true);
                mail.addClass('error');
            }
        } else {
            $('#valid').text('Все поля должны быть заполнены!');
            mail.addClass('error');
       
            $('#send').attr('disabled', true);
        }
    });
    
    name.blur(function () {

        if (name.val() !== '') {            
               
                name.removeClass('error').addClass('ok');
            
        } else {
            $('#valid').text('Все поля должны быть заполнены!');           
            name.addClass('error');
            $('#send').attr('disabled', true);
        }
    });
});