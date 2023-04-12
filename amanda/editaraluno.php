<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Aluno</title>
  <style>
    .barra{
      width: 490px;
      height: 25px;
      border-radius: 5px;
    }
    .text{
      margin-top: 0px;
      margin-left: 25px;
    }
  </style>
</head>
<body>
  <?php include_once('header.html') ?>
  <div class="box" style="height: 570px; background-color: plum; margin: 0; justify-content: center; text-align: center;">
    <form action="mostraaluno.php" method="post">
      <p class="text" style="padding-top:10px;">
        Nome: <br>
        <input class="barra" type="text" name="Nome">
      </p>
      <p class="text">
        Identidade: <br>
        <input class="barra" type="text" name="identidade">
      </p>
      <p class="text">
        Email: <br>
        <input class="barra" type="text" name="email">
      </p>
      <p class="text">
        Matrícula: <br>
        <input class="barra" type="text" name="matricula">
      </p>
      <p class="text">
        Turma: <br>
        <input class="barra" type="text" name="turma">
      </p>
      <p class="text">
        Curso: <br>
        <input class="barra" type="text" name="curso">
      </p>
      <div class="botao">
        <button type="submit" class="btn">
          <b>Enviar</b>
        </button>
      </div>
    </form>
  </div>
  <?php include_once('footer.html'); ?>
</body>
</html>