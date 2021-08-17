<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/produtos.ico" type="image/x-icon">
    <title>Produtos</title>

    <style>
        *{
    margin: 0 auto;
    padding: 0;
}

body{
    
    background-image: linear-gradient(to bottom, #171738, #2e1760) ;
    background-attachment: fixed;
    margin: 0px;
    padding: 0px;
    font-family: Arial;
    color:white;
}


img{
    margin: 45px;
    width: 200px;
    box-shadow: 1px 1px 10px black;
}
.flexbox{
    display: flex;
    max-width: 500px;
}



    </style>


</head>
<body>
    <?php
        include "menus.php";
    ?>
        <section class="flebox">

            
            <img src="images/tumb-images/01.jpg" alt="pão_chocolate" title="Pão de Chocolate R$ 1,50">
             
            <img src="images/tumb-images/03.png" alt="docinho_cereja" title=" Docinho de Cereja R$ 3,00">
            
            <img src="images/tumb-images/07.jpg" alt="cookies_chocolate" title=" Cookies de Chocolate R$ 2,50">
            
            <img src="images/tumb-images/05.jpg" alt="bolo_chocolate" title=" Bolo de Chocolate R$ 4,70">
            
            <img src="images/tumb-images/06.jpg" alt="pãozinho" title=" Pãozinho R$ 3,00">
            
            <img src="images/tumb-images/08.jpg" alt="haloween" title=" Docinho Haloween R$ 5,50">
        </section>
    
    <?php
        include "rodape.php";
    ?>
</body>
</html>