$(document).ready(function(){
 var pattern = /^[a-z0-9_-]+@[a-z0-9-]+\.[a-z]{2,6}$/i;
 var mail = $('#email');
 
 mail.blur(function(){
  if(mail.val() != ''){
 if(mail.val().search(pattern) == 0){
 $('#valid').text('Подходит');
 $('#send').attr('disabled', false);
 mail.removeClass('error').addClass('ok');
 }else{
 $('#valid').text('Не подходит');
 $('#send').attr('disabled', true);
 mail.addClass('ok');
 }
 }else{
 $('#valid').text('Поле e-mail не должно быть пустым!');
 mail.addClass('error');
 $('#send').attr('disabled', true);
 }
 });
});