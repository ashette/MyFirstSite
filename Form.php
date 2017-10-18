<div id="envelope" class="envelope">
    <a class="close-btn"  href="javascript:void(0)" onclick = "document.getElementById('envelope').style.display = 'none';document.getElementById('fade').style.display = 'none'"></a>
    <h1 class="title">ОФОРМИТЬ ЗАПИСЬ</h1>
    <script>
        $(document).ready(function () {
            var pattern = /^[a-z0-9_-]+@[a-z0-9-]+\.([a-z]{1,6}\.)?[a-z]{2,6}$/i;
            var mail = $('#mail');

            mail.blur(function () {
                if (mail.val() != '') {
                    if (mail.val().search(pattern) == 0) {
                        $('#valid').text('Подходит');
                        $('#send').attr('disabled', false);
                        mail.removeClass('error').addClass('ok');
                    } else {
                        $('#valid').text('Не подходит');
                        $('#send').attr('disabled', true);
                        mail.addClass('error');
                    }
                } else {
                    $('#valid').text('Поле e-mail не должно быть пустым!');
                    mail.addClass('error');
                    $('#send').attr('disabled', true);
                }
            });
        });</script>
    <form id="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <h4>Ваше имя</h4>
        
        <input type="text" name="sender" onclick="this.value = '';" onfocus="this.select()" onblur="this.value = !this.value ? '* Ваше Имя' : this.value;" value="* Ваше Имя" class="your-name"/>
        <br><h4>Ваше Email</h4>
       
        <input type="text" name="email" id="mail" onclick="this.value;" onfocus="this.select()" onblur="this.value = !this.value ? '*Ваш Email' : this.value;" value="* Ваш Email" class="email-address"/> 
        <br><h4>Ваш телефон</h4>
       
        <br>
        
        <input type="text" name="phone" onclick="this.value = '';" onfocus="this.select()" onblur="this.value = !this.value ? '* Ваш номер телефона' : this.value;" value="* Ваш номер телефона" class="phone"/>
         <h1 id="valid"></h1>
         <br><textarea class="your-message">Ваш комментарий ..</textarea>
        <br><input type="submit" name="send" id = "send"value="Отправить" class="send-message">
    </form>


</div>
<div id="fade" class="black-overlay"> </div>