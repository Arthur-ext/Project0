<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="App/assets/main.css"/>
    <title><?= (isset($this->view->titlePage)) ? $this->view->titlePage : "Sistema"; ?></title>
    <?php
        if(isset($this->view->links)) {
            foreach($this->view->links as $link) {
                echo "<link rel='stylesheet' href='$link'/>";
            }
        }

    ?>
    
</head>
<body>
    <!-- Content -->