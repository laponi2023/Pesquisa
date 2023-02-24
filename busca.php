<?php
include ("geral/conn.php");

?>
    <h1><a href ="index.php">----VOLTAR---</a></h1>

    

    <div id="main-container">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Lista de arquivos do Banco de dados: CRBM3</h2>
        </div>
      </div>
      </div>
    <table width="800px" border="1">
    <tr>
        <th> Nome </th>
        <th> Inscricão </th>
        <th> Pasta </th>
        <th> Baixar </th>

    </tr>

<?php
$results = $mysqli-> real_escape_string ($_GET['pesquisar']);
$sql_code = "SELECT *
FROM arquivos
WHERE nome LIKE '%$results%'
OR inscricao LIKE '%$results%'
OR pasta LIKE '%$results%'";


$sql_query = $mysqli->query($sql_code) or die("ERRO ao Consultar! " . $mysqli->error);

if ($sql_query->num_rows ==0) {

    ?>
<tr> 
    <td colspan="3"> Nenhum Resultado encontrado...</td>
</tr>
<?php 
} else {
    while ($dados = $sql_query->fetch_assoc() ) {
        $filename = "DIGINOTAS/" . $dados['pasta']."/".$dados['caminho']; 
        

        
       ?>
       
        <tr>
        <td><?php echo $dados['nome']; ?></td>
        <td><?php echo $dados['inscricao']; ?></td>
        <td><?php echo $dados['pasta']; ?></td>

       

        
        <td> <a href = "<?php echo $filename; ?>"download >PDF</a> </td>
   
         
        
        
    


              
    </tr>
    
    <?php

    }
        
    echo "Software realizado por Rafael Martins Rezende &copy; 2023";   
    exit; 
       
    }


?>


<?php ?>
