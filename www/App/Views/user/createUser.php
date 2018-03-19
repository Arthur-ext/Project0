<?php $this->view->titlePage = 'Criar Conta' ?>

<?php
    $this->view->links[] = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css";
    $this->view->links[] = "App/assets/css/main-create-user.css";
?>

<?php include_once "App/Views/layouts/main-header.php"; ?>

<div class="container-form">
    <form action="/criando-usuario" method="POST" id="form-signup">
        <h4 id="title-signup">Cadastro</h4>

        <div class="create-fields">

            <div class="form-group">
                <label for="">Nome:</label>
                <input class="form-control" type="text" placeholder="Nome..." name="user" required>
            </div>

            <div class="form-group">
                <label for="">Nome de Usuário:</label>
                <input class="form-control" type="text" placeholder="Nome de Usuario..." name="username" required>
            </div>
            <div class="form-group">
                <label for="">Email:</label>
                <input class="form-control" type="text" placeholder="Seu email..." name="email" required>
            </div>
            
            <div class="form-group">
                <label for="">Senha:</label>
                <input class="form-control" type="password" placeholder="Sua senha..." name="pass" required>
            </div>

            <button type="submit" class="btn btn-signup">Cadastrar</button>
        </div>
        <?php echo $_SESSION['signupStatus']; ?>


    </form>
</div>

<?php include_once "App/Views/layouts/main-footer.php"; ?>