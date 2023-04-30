<?php
if(isset($_POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['msg'])){ 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['msg'];
    $header ="from: deicycmh@gmail.com" . "\r\n";
    $header.= "Reply-to: deicycmh@gmail.com" . "\r\n";
    $header.= "X-Mailer: PHP/". phpversion();
    $mail = @mail($name,$email,$phone,$msg,$header);
    if($mail){
        echo " <h4> ¡Mail enviado exitosamente!<h4> ";
    }
}
}