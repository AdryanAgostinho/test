 <?php  
   include_once 'conexao.php';
    $nom = isset($_POST['nome']) == true?$_POST['nome']:"";
  
    $query = "SELECT * FROM cliente where numeroConta='$nom' ";
    if ($result = $conn->query($query)) {

    while ($row = $result->fetch_assoc()) { ?>
    <tr>
      <td><?php echo $row['nomeCliente']; ?></td>
      <td><?php echo  $row['numeroConta'];?></td>
      <td><?php echo $row['saldoConta'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['telefone'];?></td>

     
     } } ?>