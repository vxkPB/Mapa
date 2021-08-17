<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/localizacao.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/local.css">
    <title>Localização - google maps</title>
    <style>
h1{
    text-align: center;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    padding: 20px;
    
}
#BoxLocal{
    margin-left: 300px;
    
}
    </style>
</head>

<body>

<?php
    include "menus.php";
?>

<h1>Localização - Doce Sabor</h1>  

<main id = "BoxLocal">    

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15836.333800456465!2d-34.87310487704281!3d-7.116327872705041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd6c91bc9fb06dd2d!2sLuciana%20Cavalcanti%20de%20Carvalho%20(Del%C3%ADcias%20da%20L%C3%BA)!5e0!3m2!1spt-BR!2sbr!4v1628313101653!5m2!1spt-BR!2sbr" width="700" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

</main> 
<?php
    include "rodape.php";
?>   
</body>
</html>