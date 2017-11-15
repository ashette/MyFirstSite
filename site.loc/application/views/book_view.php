<div id="content">   
    <div id="pagehead" >

        <a>ОФОРМИТЬ ЗАПИСЬ</a>   

    </div>                

    <form id = "form" method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        <h4>Ваше имя</h4>

        <input type = "text"  name = "sender" id = "fio" onclick = "this.value;"  value=''  onfocus = "this.select()" onblur = "this.value = !;"  class = "your-name"/>
        <br><h4>Ваш Email</h4>

        <input type = "text" name = "email" id = "mail" onclick = "this.value;" onfocus = "this.select()" onblur = "this.value = !;" value='' class = "email-address"/>
        <br> 
        <h4 id="valid"><h4>
                <h4 style="font-size: 12px" >В графе ниже обязательно укажите услугу, желаемую дату и время. После получения вашей заявки, мы рассмотрим ее и пришлем ответ на Ваш e-mail. </h4>

                <br><textarea class = "your-message" name ="message" ></textarea>
                <br>
                <br><input type = "submit" name = "send" id = "send"  value = "Отправить" disabled="true" class = "send-message">


                <?php
                if (isset($_POST['send'])) {
                    $fio = $_POST['sender'];
                    $email = $_POST['email'];
                    $message = $_POST['message'];
                    

// Открыть текстовый файл
                                     
                    $f = fopen('../orders/order_'.$fio.'.txt', 'w');
                    fwrite($f, "Имя: $fio ; Email: $email Сообщение: $message ");
                    fclose($f);
                    echo "<script> alert('Заявка успешно отправлена. Спасибо!')</script>";
                }
                ?>

                </form>

                </div>