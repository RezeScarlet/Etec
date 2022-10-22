<?php
  include_once 'conexao.php';

  function getImg($img){

    $img_tmp = $_FILES[$img]["tmp_name"];
    $img_original = $_FILES[$img]["name"];

    $path = "img/";

    $fileExtension = strtolower(pathinfo($img_original, PATHINFO_EXTENSION));
        
        if (($fileExtension != "jpg") && ($fileExtension != "jpeg") && ($fileExtension != "png")) {
          echo "Imagem invalida";
        } else {
          

          date_default_timezone_set("America/Sao_Paulo");
          $time = date("Ymd")."_".date("His");

          $imgName = $time. "." .$fileExtension;
          $img_final = $path . $imgName;
          
          
          move_uploaded_file($img_tmp, $img_final);        
          
          return $imgName;
          
        }
      }

  if (isset($_POST['login'])) {

    $nome = $_POST['nome'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $foto = getImg('foto');


    $result = $conexao-> prepare("INSERT INTO alunos (nome, cidade, estado, foto) VALUES (:nome, :cidade, :estado, :foto)");
    $result->bindValue(':nome', $nome);
    $result->bindValue(':cidade', $cidade);
    $result->bindValue(':estado', $estado);
    $result->bindValue(':foto', $foto);
    $result->execute();
  }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>Lojaaaaaaa</title>
</head>

<body style="background-color: rgb(29,29,29);">
  <div class="container-fluid p-5 mb-1" style="background-color: darkred;">
   <h1 class="text-center text-light">Exercicio de PAW</h1>
   <p class="text-center text-light fs-4">Aluno: Guilherme de Souza Dionisio Rosseti</p>
  </div>

  <div class="col align-self-center">
  <div class="container bg-light text-dark p-5">
        <h1 class="text-center border rounded border-danger p-4">Cadastro de Aluno</h1>
        <div class=" mt-5">
          <form action="#" method="post" enctype="multipart/form-data">
            <div class="my-3 fs-4">
              Digite o nome:
              <input type="text" name="nome" class="form-control">
            </div>
            <div class="my-3 fs-4">
              Digite a cidade:
              <input type="text" name="cidade" class="form-control">
            </div>
            <div class="my-3 fs-4">
              Digite o estado:
              <input type="text" name="estado" class="form-control">
            </div>
            <div class="mb-3 fs-4">
              <label for="arquivo">Imagem do produto:</label>
              <input type="file" name="foto" id="foto" class="form-control">
            </div>
            <div class="mt-3">
              <input type="submit" value="Cadastrar" name="login" class="btn btn-danger">
              <input type="reset" value="Limpar" class="btn btn-outline-danger">
            </div>
            <div class="my-3">
            </div>
          </form>
          <?php
          if (isset($_POST['login'])) {
          if ($result) {
            ?>
            <p class="text-success">Aluno cadastrado com sucesso</p>
            <?php
          } else {
            ?>
            <p class="text-danger">Ocorree um erro</p>
            <?php
          }}
          ?>
      </div>
  </div>
  </div>
  </body