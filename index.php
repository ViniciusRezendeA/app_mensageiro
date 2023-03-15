<?php
    require __DIR__.'/vendor/autoload.php';
    use src\component\Mensageiro;
    use src\component\Email;
    use src\component\Sms;
    $msgSMS = new Mensageiro(new Sms());
    $msgSMS->sendToken();
    echo("<br>");
    $msgEmail = new Mensageiro(new Email());
    $msgEmail->sendToken();
?>