<?php
namespace AG\Cliente\Types;

interface ClienteDadosInterface
{
    public function defineImportancia($importancia);
    public function defineEnderecoCobranca($endereco);
} 