<?php include_once "App/Views/layouts/main-header.php"; ?>

<div>
    <p>Ola mundo, esta é a página de perfil do usuario</p>
    <p> <b> <?= $_SESSION['username'];  ?> </b> </p>
    <p> <b> <?= $_SESSION['signupStatus'];  ?> </b> </p>
    <a href="/logout">Deslogar</a>
</div>

<?php include_once "App/Views/layouts/main-header.php"; ?>