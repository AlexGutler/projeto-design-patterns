<?php
define('CLASS_DIR','src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

function preencheArray()
{
    $clientes = array();

    $objeto = new AG\Cliente\Types\ClienteFisica();
    $objeto
        ->setNome("Alex Gutler")
        ->setCpf("158.788.965-01")
        ->setRg("9856124")
        ->setDataNascimento("15/03/1992")
        ->setTelefone("(27)3259-2200")
        ->setEmail("alex@email.com.br")
        ->setEndereco("Rua Jose, 252, Alvorada, Santa Teresa, ES");
    $objeto->defineEnderecoCobranca($objeto->getEndereco());
    $objeto->defineImportancia(3);

    $clientes[] = $objeto;

    $objeto = new AG\Cliente\Types\ClienteFisica();
    $objeto
        ->setNome("Renan Gutler")
        ->setCpf("135.566.874-09")
        ->setRg("3074131")
        ->setDataNascimento("12/09/1993")
        ->setTelefone("(27)998954389")
        ->setEmail("renan@email.com.br")
        ->setEndereco("Rua Anchieta, 202, Centro, Santa Teresa, ES");
    $objeto->defineEnderecoCobranca($objeto->getEndereco());
    $objeto->defineImportancia(5);

    $clientes[] = $objeto;

    $objeto = new AG\Cliente\Types\ClienteJuridica();
    $objeto
        ->setNome("Henrique Gutler")
        ->setCnpj("80.686.455/0001-41")
        ->setIe("59343304-1")
        ->setDataAbertura("14/01/2004")
        ->setTelefone("(27)2235-2025")
        ->setEmail("rick@email.com.br")
        ->setEndereco("Rua Primeiro de Abril, 66, Centro, Santa Maria de Jetibá, ES");
    $objeto->defineEnderecoCobranca($objeto->getEndereco());
    $objeto->defineImportancia(4);

    $clientes[] = $objeto;

    $objeto = new AG\Cliente\Types\ClienteJuridica();
    $objeto
        ->setNome("Adeumar Gutler")
        ->setCnpj("88.492.528/0001-76")
        ->setIe("60946146-0")
        ->setDataAbertura("14/03/1964")
        ->setTelefone("(28)3326-1525")
        ->setEmail("adeumar@email.com.br")
        ->setEndereco("Rua Antonio, 266, Centro, Venda Nova, ES");
    $objeto->defineEnderecoCobranca("Rua Tucuruvi, 18, Centro, Venda Nova, ES ");
    $objeto->defineImportancia(5);

    $clientes[] = $objeto;

    $objeto = new AG\Cliente\Types\ClienteFisica();
    $objeto
        ->setNome("Neuza Hoffmann")
        ->setCpf("132.456.789-09")
        ->setRg("3694561")
        ->setDataNascimento("26/10/1968")
        ->setTelefone("(27)99925468")
        ->setEmail("neuza@email.com.br")
        ->setEndereco("Rua Geronimo, 166, Vila Nova, Domingos Martins, ES");
    $objeto->defineEnderecoCobranca("Rua Venda Nova, 16, Centro, Domingos Martins, ES");
    $objeto->defineImportancia(4);
    $clientes[] = $objeto;

    $objeto = new AG\Cliente\Types\ClienteJuridica();
    $objeto
        ->setNome("Antonio Carlos")
        ->setCnpj("49.970.361/0001-50")
        ->setIe("02768113-0")
        ->setDataAbertura("14/03/1964")
        ->setTelefone("(28)3259-1415")
        ->setEmail("ac@email.com.br")
        ->setEndereco("Rua Bernardino Monteiro, 266, São Lourenço, Santa Leopoldina, ES");
    $objeto->defineEnderecoCobranca("Rua Pedro Paulo, 28, Centro, Santa Leopoldina, ES");
    $objeto->defineImportancia(2);

    $clientes[] = $objeto;

    $objeto = new AG\Cliente\Types\ClienteJuridica();
    $objeto
        ->setNome("Tiago Oliveira")
        ->setCnpj("22.112.289/0001-73")
        ->setIe("87513070-4")
        ->setDataAbertura("11/10/1989")
        ->setTelefone("(27)3259-2201")
        ->setEmail("tiago@email.com.br")
        ->setEndereco("Rua Bellumat, 147, Vila Madalena, Santa Teresa, ES");
    $objeto->defineEnderecoCobranca($objeto->getEndereco());
    $objeto->defineImportancia(3);

    $clientes[] = $objeto;

    $objeto = new AG\Cliente\Types\ClienteFisica();
    $objeto
        ->setNome("Maria José")
        ->setCpf("13545526708")
        ->setRg("3785014")
        ->setDataNascimento("11/09/1974")
        ->setTelefone("(27)989898989")
        ->setEmail("maria@email.com.br")
        ->setEndereco("Rua Cavalcante, 888");
    $objeto->defineEnderecoCobranca($objeto->getEndereco());
    $objeto->defineImportancia(3);

    $clientes[] = $objeto;

    $objeto = new AG\Cliente\Types\ClienteFisica();
    $objeto
        ->setNome("Simone Sousa")
        ->setCpf("14535528907")
        ->setRg("3321125")
        ->setDataNascimento("27/06/1996")
        ->setTelefone("(27)996562512")
        ->setEmail("simone@email.com.br")
        ->setEndereco("Rua Elite, 17, Centro, Santa Teresa, ES");
    $objeto->defineEnderecoCobranca("Praça Augusto Ruschi, 2, Centro, Santa Teresa, ES");
    $objeto->defineImportancia(5);

    $clientes[] = $objeto;

    $objeto = new AG\Cliente\Types\ClienteJuridica();
    $objeto
        ->setNome("Marina Mara")
        ->setCnpj("32.169.581/0001-86")
        ->setIe("60588516-8")
        ->setDataAbertura("11/10/1989")
        ->setTelefone("(27)3259-2225")
        ->setEmail("mm@email.com.br")
        ->setEndereco("Rua Pedro Gasparini, 147, Alvorada, Santa Teresa, ES");
    $objeto->defineEnderecoCobranca($objeto->getEndereco());
    $objeto->defineImportancia(1);

    $clientes[] = $objeto;

    return $clientes;
}
?>
