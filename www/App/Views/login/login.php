<?php $this->view->titlePage = "Entrar - Project0"; ?>

<?php $this->view->links[] = "App/assets/login.css" ?>
<?php $this->view->links[] = "App/assets/reset.css" ?>
<?php $this->view->links[] = "App/assets/bootstrap/css/bootstrap.css" ?>

<!-- header instance -->
<?php include_once "App/Views/layouts/main-header.php"; ?>

    <div class="container">
        <div class="container-login">
            <form action="/authLogin " method="POST">
                <h5>ENTRAR</h5>
                <input type="text" name="user" placeholder="Username" required >
                <input type="password" name="pass" placeholder="Senha" required >
                <!-- <input pattern="([0-9]{11})$" type="text"> -->


                <button type="submit" >Acessar</button>
                <a href="/criar-conta">Cadastrar-se</a>
            </form>

            <?= $_SESSION['errorLogin']; ?>
        </div>
    </div>
    
    <?php // $this->addons('./script.js') ?>
    <?php $this->view->scripts[] = "./script" ?>
<!-- footer instance -->
<?php include_once "App/Views/layouts/main-footer.php" ?>