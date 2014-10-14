<?php

namespace AG\Cliente\Types;
use AG\Cliente\ClienteAbstract as ClienteAbstract;
use AG\Cliente\Types\ClienteDadosInterface as ClienteDadosInterface;

class ClienteFisica extends ClienteAbstract implements ClienteDadosInterface
{
    private $cpf;
    private $rg;
    private $data_nascimento;

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setDataNascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;
        return $this;
    }

    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }

    public function setRg($rg)
    {
        $this->rg = $rg;
        return $this;
    }

    public function getRg()
    {
        return $this->rg;
    }

    public function toString(){
        parent::toString();
        echo "CPF: ".$this->getCpf()."<br>";
        echo "RG: ".$this->getRg()."<br>";
        echo "DT. NASCIMENTO: ".$this->getDataNascimento()."<br>";
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