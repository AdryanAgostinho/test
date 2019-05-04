


 <!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Tutorial</title>
</head>
<body>
  <table border="1">
    <tr>
      <td>Nome</td>
      <td>Número da Conta</td>
      <td>Saldo</td>
      <td>E-mail</td>
      <td>Telefone</td>
      
    </tr>
    <?php  
    include_once 'conexao.php';
    $query = "SELECT * FROM cliente ";
    if ($result = $conn->query($query)) {

    while ($row = $result->fetch_assoc()) { ?>
    <tr>
      <td><?php echo $row['nomeCliente']; ?></td>
      <td><?php echo  $row['numeroConta'];?></td>
      <td><?php echo $row['saldoConta'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['telefone'];?></td>

     
    <?php } } ?>
  </table>
</body>
</html>