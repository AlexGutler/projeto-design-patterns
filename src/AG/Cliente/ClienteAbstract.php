<?php
namespace AG\Cliente;
abstract class ClienteAbstract
{
    private $nome;
    private $email;
    private $telefone;
    private $endereco;
    private $endereco_cobranca;
    private $importancia;

    public function setEnderecoCobranca($endereco_cobranca)
    {
        $this->endereco_cobranca = $endereco_cobranca;
        return $this;
    }

    public function getEnderecoCobranca()
    {
        return $this->endereco_cobranca;
    }

    public function setImportancia($importancia)
    {
        $this->importancia = $importancia;
        return $this;
    }

    public function getImportancia()
    {
        return $this->importancia;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function toString(){
        echo "NOME: ".$this->getNome()."<br>";
        echo "EMAIL: ".$this->getEmail()."<br>";
        echo "TELEFONE: ".$this->getTelefone()."<br>";
        echo "ENDEREÇO: ".$this->getEndereco()."<br>";
        if (strlen($this->getEnderecoCobranca()) > 10){
            echo "ENDEREÇO COBRANÇA: ".$this->getEnderecoCobranca()."<br>";
        }
        if (strlen($this->getImportancia()) > 0){
            echo "IMPORTANCIA: ".$this->getImportancia()."<br>";
        }
    }

} 