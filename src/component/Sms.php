<?php
namespace src\component;
use src\interfaces\ISend;
class Sms implements ISend{
    public function enviar():void{
        echo("Seu codigo é 9010-0000");
    }
}