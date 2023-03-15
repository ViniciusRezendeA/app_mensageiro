<?php
namespace src\component;
use src\interfaces\ISend;
class Email implements ISend{
    public function enviar():void{
        echo("Seu codigo é 9000-0000");
    }
}