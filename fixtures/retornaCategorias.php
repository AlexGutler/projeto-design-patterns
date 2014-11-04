<?php
require_once 'conexaoDB.php';

function retornaCategorias()
{
    try {
        $conn = conexaoDB();

        $sql = "select * from `categorias`;";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $categorias = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        $i = 0;
        $options = array();
        foreach($categorias as $categoria)
        {
            $options[$i] = array($categoria['id'],$categoria['categoria']);
            $i ++;
        }

        return $options;

    } catch(PDOException $e)
    {
        echo $e->getMessage();
    }
}