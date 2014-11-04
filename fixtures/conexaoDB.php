<?php

function conexaoDB()
{
    try{
        $config = include 'config.php';

        if (! isset($config['db'])){
            throw new \InvalidArgumentException('A configuração do banco de dados não existe!');
        }

        $dbname = (isset($config['db']['dbname'])) ? $config['db']['dbname'] : null;

        return new \PDO("sqlite:{$dbname}");
    } catch (\PDOException $e)
    {
        echo $e->getMessage();
        return false;
    }
}