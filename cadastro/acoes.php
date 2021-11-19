<?php

require("../database/conexao.php");

switch ($_POST["acao"]) {
    case 'inserir':

        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $celular = $_POST["celular"];

        $sql = "INSERT INTO tbl_pessoa (nome, sobrenome, email, celular) 
            VALUES ('$nome', '$sobrenome', '$email', '$celular')";

        $resultado = mysqli_query($conexao, $sql);

        header('location: index.php');

        break;

    case 'deletar':

        $idPessoa = $_POST["cod_pessoa"];

        $sql = "DELETE FROM tbl_pessoa WHERE cod_pessoa = $idPessoa";
        $resultado = mysqli_query($conexao, $sql);

        header("location: ../listagem/index.php");

        break;

    case 'editar':

        $idPessoa = $_POST["idPessoa"];

        $nome = $_POST["nome"];
        $sobrenome = $_POST["sobrenome"];
        $email = $_POST["email"];
        $celular = $_POST["celular"];

        $sql = "UPDATE tbl_pessoa SET nome = '$nome', 
            sobrenome = '$sobrenome', email = '$email', celular = '$celular'
            WHERE cod_pessoa = $idPessoa";

        $resultado = mysqli_query($conexao, $sql);

        header("location: ../listagem");

        break;

    default:
        # code...
        break;
}
