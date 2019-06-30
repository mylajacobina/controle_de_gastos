<?php 

include "menu.php";
include "../controller/listaGastos.php";
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
		<h3><b>Todos os gastos</b></h3>
	</div>	


   <?php
    echo "   
       	 <table class='table table-striped'>

            <thead>
              <tr>
                <th scope='col'>data</th>
                <th scope='col'>categoria</th>               
                <th scope='col'>valor</th>               
                <th scope='col'>opção</th>               
                            
              </tr>
            </thead>";
            $total=0;
           while($row = $result->fetch(PDO::FETCH_OBJ)){
            $total=$total+$row->valor;
            	echo "
            	<tr>
            		<td>
            			".
            			$row->data
            			.
            			"
            		</td>
            		<td>
            			".
            			$row->nome
            			.
            			"
            		</td>

            		 <td>
            			".
            			$row->valor
            			.
            			"
            		</td>
            		<td>
            			<a href='../controller/excluir.php?id=".$row->idGastos."'>Excluir</a>
            		</td>
            		
            	</tr>

            	";
            }
      echo "</table>
         <table class='table table-striped'>
           <thead>
             <tr>
               <th scope='col'></th>
               <th scope='col'>Total:</th>
               <th scope='col'>".$total."</th>
            </tr>
            </table>
      ";

 ?>


	</div>


<?php 
include"rodape.php";
?>