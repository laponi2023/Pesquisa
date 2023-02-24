<?php
  include_once("geral/header.php");
  include_once("geral/conn.php");



?>
  <div id="main-banner">
    <h1>Faça sua pesquisa</h1>
  </div>
  <div id="main-container">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Banco de dados: CRBM3</h2>
            <form action="busca.php" method="GET">
            <label>NOME/INSCRICAO: </label> 
            <input type="text" name="pesquisar" size="100" placeholder="Insira o nome para pesquisa">
            <button>buscar</button>      
            <input type="reset" name="reset" value="apagar"> <br><br>      
          </form>
        </div>
      </div>
    </div>
  </div>
<?php
  include_once("geral/footer.php");
?>