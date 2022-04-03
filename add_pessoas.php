<?php 
    include("conexao.php");


    // Adicionar no Banco de dados

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $data_nasc = $_POST['data_nasc'];
    $salario = $_POST['salario'];

    $contato = $_POST['contato'];
        
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];

    $cidade = $_POST['cidade'];
        
    mysqli_query($conectar, "INSERT INTO pessoas(nome,cpf,rg,data_nascimento,salario) VALUES('$nome', '$cpf', '$rg', '$data_nasc', $salario)");

    mysqli_query($conectar, "INSERT INTO enderecos(endereco,numero,complemento) VALUES('$endereco',$numero,'$complemento')");

    mysqli_query($conectar, "INSERT INTO contatos(cidade) VALUES('$cidade')");

    mysqli_query($conectar, "INSERT INTO contato(contato) VALUES('$contato')");
?>