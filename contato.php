<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/contact.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/contato.css">
   
    <title>Contato</title>
</head>
<style>
    
</style>
<body>

<?php
    include "menus.php";
    
?>

<main id="contato">
    <h2 class="nomeh2">Contato</h2>
    <form action="" method="post">

        Nome: <input type="text" name="nome">
        Email: <input type="email" name="emai">
        <input type="submit" value="Enviar" name="enviar">

    </form>

    <?php
    
    if (isset($_POST['enviar'])){
        $nome = $_POST["nome"];
        $email = $_POST["emai"];
        echo "</br>";
        echo "Seja Bem-Vindo <strong>$nome</strong> </br><p>Email : $email</p>";
    }
    
    
    
    ?>
</main> 
<?php
    include "rodape.php";
?>   
</body>
</html>