<div id="envelope" class="envelope">
    <a class="close-btn" href="javascript:void(0)" onclick = "document.getElementById('envelope').style.display = 'none';document.getElementById('fade').style.display = 'none'">X</a>
    <h1 class="title">ОФОРМИТЬ ЗАПИСЬ</h1>
    <form id="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="sender" onclick="this.value = '';" onfocus="this.select()" onblur="this.value = !this.value ? '* Ваше Имя' : this.value;" value="* Ваше Имя" class="your-name"/>
        <br><input type="text" name="email" onclick="this.value = '';" onfocus="this.select()" onblur="this.value = !this.value ? '* Ваш Email' : this.value;" value="* Ваш Email" class="email-address"/>
        <br><input type="text" name="phone" onclick="this.value = '';" onfocus="this.select()" onblur="this.value = !this.value ? '* Ваш номер телефона' : this.value;" value="* Ваш номер телефона" class="phone"/>
        <br><textarea class="your-message">Ваш комментарий ..</textarea>
        <br><input type="submit" name="send" value="Отправить" class="send-message">
    </form>
    <script>
        function AjaxFormRequest(result_id, formMain, url) {
            jQuery.ajax({
                url: url,
                type: "POST",
                dataType: "html",
                data: jQuery("#" + formMain).serialize(),
                success: function (response) {
                    document.getElementById(result_id).innerHTML = response;
                },
                error: function (response) {
                    document.getElementById(result_id).innerHTML = "Возникла ошибка при отправке формы. Попробуйте еще раз";
                }
            });
        }
    </script>
    <?php
    
        if (!filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL) === false) {
            echo("Email is valid");
        } else {
            echo("Email is not valid");
        }
    
    ?>
</div>
<div id="fade" class="black-overlay"> </div>