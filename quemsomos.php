<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/about.ico" type="image/x-icon">
    <title>Quem Somos</title>

    <style>
@import url('https://fonts.googleapis.com/css2?family=Hahmlet&display=swap');

        *{
    margin: 0 auto;
    padding: 0;
    box-sizing: border-box;
    
}

body{
    
    background-image: linear-gradient(to bottom, #171738, #2e1760) ;
    background-attachment: fixed;
    margin: 0px;
    padding: 0px;
    color:white;
}

.logo{
    margin-left: 425px;
    margin-top: 40px;
    
}
.bloco{
    margin: 15px;
}
.h1doce{
    text-align: center;
    color: blueviolet;
    margin-top: 2px;
    font-family: 'Hahmlet', serif;
    
}
p{
    
    text-align: center;
    font-family: 'Hahmlet', serif;
    
}
ul{
    margin: 0;
    padding: 0;
}
li{
    list-style: none;
    margin: 10px;
    display: inline;
}
a:hover{
    background-color: #8a2be2;
    padding: 4px;
    border-radius: 2px;
}
    </style>
</head>
<body>

<?php
    include "menus.php";
?>


<div class="logo"><img src="images/Logodoces.png" alt="Logo Doces" width="500px" ></div>



<div class="bloco">
    <h1 class="h1doce">Doce Sabor</h1>
    <p>A Doce Sabor nasceu com a alegria de propor os melhores doces para as pessoas que gostam de novas sensações.</p>
    <p>Gostamos de ver o brilho nos olhos de nossos clientes ao provar a grande variedade de bolos, cupcakes e chocolates.</p>
</div>
<?php
    include "rodape.php";
?>
</body>
</html>