<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/uva.ico" type="image/x-icon">
    
    <title>Doce Sabor</title>

    <style>
        body{
            
    background-image: linear-gradient(to bottom, #171738, #2e1760) ;
    background-attachment: fixed;
    margin: 0;
    padding: 0px;
    
    color:white;
 }

    img{
    
    margin-top: 15px;  
    margin-left: 570px;
    
    width: 200px;
    box-shadow: 1px 1px 10px black;
}
p{
    margin-left: auto;
}



/*Parágrafo 02*/


.box2{
    margin: 0;
}
.boxprincipal2{
    text-align: center;
}
.box3{
    margin: 5px;
    text-align: center;
    color: #fab2ea;
    text-shadow: 1px 1px 5px black;
}

    </style>
</head>
<body>
    <?php
        include "menus.php";
    ?>

        <main class="pao">
            

    
       

        <section>

            <article>

                <div class="boxprincipal2">
                    <br>
                    <h1>Pãozinho de chocolate</h1>
                    <p class="box2">O preferido da galera</p>
                </div>

                <div >
                    <a href="produtos.php" title="Clique Aqui!!!"><img src="images/tumb-images/01.jpg" alt="pão_chocolate"></a>


                    <div class="boxprincipal2">
                    <br>
                    <h1>Cookie de chocolate</h1>
                    <p class="box2">O chodozinho</p>
                </div>

                <div >
                    <a href="produtos.php" title="Clique Aqui!!!"><img src="images/tumb-images/04.jpg" alt="cookie_chocolate"></a>    
            
                </div>
            

                


            </article>

        </section>
        <section>
            <div>
                <h2 class="box3">Clique nas imagens para mais opções...</h2>
            </div>
        </section>

        

    <?php
        include "rodape.php";
    ?>
</body>
</html>