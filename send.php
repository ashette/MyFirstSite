
<?php

$fio = $_POST['sender'];
$email = $_POST['email'];
$message = $_POST['message'];

// Открыть текстовый файл
if (isset($_POST['send'])) {
    $f = fopen("orders/order $fio.txt", "w");
    fwrite($f, "Имя: $fio ; Email: $email Сообщение: $message ");
    fclose($f);
echo "<script> alert('Заявка успешно отправлена. Спасибо!')</script>";
}
?>