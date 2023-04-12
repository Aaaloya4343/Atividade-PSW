<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main{
            background-color:	#C8A2C8;
            height: 415px;
            padding-top: 50px;
        }
    </style>
</head>
<body style="margin: 0;">
    
<?php
        include_once('header.html');
    ?>

    <div class="main" style="text-align: center;">
    <form action="cadaluno.php" method="post">
    <button type="submit" value="sim" style="margin-left: 20px; height: 75px; width:200px; background-color:white;">
        <p>Realizar Cadastro</p>
        </button> 
    </form>



    </div>

    <?php
        include_once('footer.html')
    ?>

</body>
</html>