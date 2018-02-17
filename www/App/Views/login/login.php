<?php $this->view->titlePage = "Entrar - Project0"; ?>

<?php $this->view->links[] = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"; ?>
<?php $this->view->links[] = "App/assets/login.css" ?>

<!-- header instance -->
<?php include_once "App/Views/layouts/main-header.php"; ?>

    
    <div class="container-screem-login">
        <div class="container-login">
            <form id="form-login" action="/authLogin" method="POST">
                <h5>ENTRAR</h5>
                <div class="form-group">
                    <label for="user">Nome de Usuário</label>
                    <input class="form-control input-login" type="text" name="user" placeholder="Username" required >
                </div>
                <div class="form-group">
                    <label for="pass">Senha</label>
                    <input class="form-control input-login" type="password" name="pass" placeholder="Senha" required >
                </div>
                
                <button class="btn btn-login" type="submit">ENTRAR</button>
                
                <a class="link-signup" href="/criar-conta">Cadastrar</a>

                <div class="notify-error">
                    <span>
                        <?= $_SESSION['errorLogin']; ?>
                    </span>
                </div>
            </form>
        </div>
    </div>
    
    
    
    
    
    <?php // $this->addons('./script.js') ?>
    <?php // $this->view->scripts[] = "./script" ?>

<!-- footer instance -->
<?php include_once "App/Views/layouts/main-footer.php" ?>




            <!-- <form action="/authLogin " method="POST">
                <h5>ENTRAR</h5>
                
                <input pattern="([0-9]{11})$" type="text">


                <button type="submit" >Acessar</button>
                <a href="/criar-conta">Cadastrar-se</a>
            </form> -->