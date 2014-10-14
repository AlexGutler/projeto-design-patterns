<?php

namespace AG\Cliente\Types;
use AG\Cliente\ClienteAbstract as ClientAbstract;
use AG\Cliente\Types\ClienteDadosInterface as ClienteDadosInterface;

class ClienteJuridica extends ClientAbstract implements ClienteDadosInterface
{
    private $cnpj;
    private $ie;
    private $data_abertura;

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setDataAbertura($data_abertura)
    {
        $this->data_abertura = $data_abertura;
        return $this;
    }

    public function getDataAbertura()
    {
        return $this->data_abertura;
    }

    public function setIe($ie)
    {
        $this->ie = $ie;
        return $this;
    }

    public function getIe()
    {
        return $this->ie;
    }

    public function toString(){
        parent::toString();
        echo "CNPJ: ".$this->getCnpj()."<br>";
        echo "INSC. ESTADUAL: ".$this->getIe()."<br>";
        echo "DT. ABERTURA: ".$this->getDataAbertura()."<br>";
    }

    public function defineImportancia($importancia){
        $this->setImportancia($importancia);
        return $this;
    }

    public function defineEnderecoCobranca($endereco){
        $this->setEnderecoCobranca($endereco);
        return $this;
    }
} 