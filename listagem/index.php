<?php

include('../componentes/header.php');
require("../login/processa_login.php");
verificaLogin();


$sql = "SELECT * FROM tbl_pessoa";
$resultado = mysqli_query($conexao, $sql);

?>

<div class="container">

    <br />

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>E-mail</th>
                <th>Celular</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>

            <?php
            //listagem
            while ($pessoa = mysqli_fetch_array($resultado)) {
            ?>
                <tr>
                    <th><?= $pessoa["cod_pessoa"] ?></th>
                    <th><?= $pessoa["nome"] ?></th>
                    <th><?= $pessoa["sobrenome"] ?></th>
                    <th><?= $pessoa["email"] ?></th>
                    <th><?= $pessoa["celular"] ?></th>
                    <th>
                        <button>
                            <a href="../cadastro/editar.php?cod_pessoa=<?php echo $pessoa["cod_pessoa"] ?>&acao=editar">EDITAR</a>
                        </button>
                        <button class="btn">
                            <a href="../cadastro/acoes.php?cod_pessoa=<?php echo $pessoa["cod_pessoa"] ?>&acao=deletar">EXCLUIR</a>
                        </button>
                    </th>
                </tr>

            <?php
            }
            ?>

    </table>

</div>

<?php
include('../componentes/footer.php');
?>