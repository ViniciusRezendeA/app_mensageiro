<?php
namespace src\component;

use src\interfaces\ISend;

class Mensageiro
{
    private $canal;
    public function __construct(ISend $canal)
    {
        $this->setCanal($canal);
    }
    public function setCanal(ISend $canal): void
    {
        $this->canal = $canal;
    }
    public function getCanal(): ISend
    {
        return $this->canal;
    }
    public function sendToken(): void
    {
        $this->getCanal()->enviar();
    }
}