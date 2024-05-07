<?php include 'conexao.php'; ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Listar Usuários</title>
 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 
    <link rel="stylesheet" href="style.css">
 
</head>
<body>
    <div class="container">
   
    <h1>Lista de Usuários </h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Setor</th>
      <th scope="col">Login</th>
    </tr>
  </thead>

  <tbody>
   <?php 
     $select = "SELECT = FROM tb_user"; 
     $query = mysqli_query($conexao, $select);
    while ($result = mysqli_fetch_array($query)) { ?> 

<tr>
      <th scope="row"><?php echo $result['id_user']; ?></th>
      <td> <?php echo $result['nm_usuario']; ?> </td>
      <td> <?php echo $result['nm_setor']; ?> </td>
      <td> <?php echo $result['login']; ?> </td>
    </tr>

    <?php } ?>


    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>


    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html>
 
</table>