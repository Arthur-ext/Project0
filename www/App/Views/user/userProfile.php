<?php
    $this->view->links[] = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css";
?>

<?php include_once "App/Views/layouts/main-header.php"; ?>

<div>
    <p>Ola mundo, esta é a página de perfil do usuario</p>
    <p> <b> <?= $_SESSION['username'];  ?> </b> </p>
    <p> <b> <?= $_SESSION['signupStatus'];  ?> </b> </p>
    <a href="/logout">Deslogar</a>
</div>

<div>
    <h5><a href="delete-user">Excluir contra</a></h5>
</div>

<div>
    <table class="table">
        <thead>
            <tr>
                <th>
                    Nome
                </th>
                <th>
                    Nome de usuário
                </th>
                <th>
                    email
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($this->view->allUsers as $user): ?>
            <tr>
                <td>
                    <?= isset($user['usr_name']) ? $user['usr_name'] : "N/I" ?>
                </td>
                <td>
                    <?= $user['usr_username'] ?>
                </td>                <td>
                    <?= $user['usr_email'] ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include_once "App/Views/layouts/main-header.php"; ?>