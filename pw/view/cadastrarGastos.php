<?php 
include "menu.php";
include "../controller/listaCategoria.php";
?>

	<br><br>
	<div class="container">
	<?php 

	if(isset($_GET["resposta"])){
		$resposta=$_GET["resposta"];
		$situacao=$_GET["situacao"];
		echo "
		<div class='$situacao' role='alert'>
		$resposta
		</div>
		";
	}


	?>
	<div class="section-header">
		<h3><b>Cadastro de gastos</b></h3>
	</div>	
	<div class="panel-body">

		<form id="formExemplo" role="form" method="post" action="../controller/gastos.php">

			<div class="form-group">
				<h5><b>Valor</b></h5>
				<input name="valor" id="textNome" class="form-control"   type="text" required>	
			</div>
			<div class="form-group">
				<h5><b>data</b></h5>
				<input name="data"  class="form-control"   type="date" required>	
			</div>

 	
			<div class="form-group">	
					<h5><b>Escolha uma categoria</b></h5>
					<select name="categoria" class='form-control' required>
						<option ></option>
						<?php 
							while ($row = $result->fetch(PDO::FETCH_OBJ)) {
								echo "
									<option value='".$row->idCategoria."'>".$row->nome."</option>
								";
							}
						?>
					</select>	
			</div> 


	</fieldset>
		<center>
			<button type="submit" class="btn btn-primary mb-3">Cadastrar gastos</button>
		</center>
	</fieldset>


</form>
</div>
</div>

<?php 
include"rodape.php";
?>