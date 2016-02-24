<?php include_once "cabecalhoSelantel.php";?>
<form action="#add-cadastro-selantel.php" method="post">
    <h1>Preencha os campos abaixo para cadastramento</h1>
        <h3>Nome: </h3>
            <input type="text" class="form-control" placeholder="Digite seu nome">
        <h3>Telefone: </h3>
            <input type="text" class="form-control" placeholder="Digite seu telefone">
        <h3>E-mail: </h3>
            <input type="text" class="form-control" placeholder="Digite seu e-mail">
        <h3>Senha: </h3>
            <input type="text" class="form-control" placeholder="Digite a senha desejada">
            <br>
    <p><a class="btn btn-primary btn-lg" type="submit" href="#enviar-chamado.php" role="button">Cadastrar</a></p>
</form>    
<?php include_once "rodapeSelantel.php";?>
