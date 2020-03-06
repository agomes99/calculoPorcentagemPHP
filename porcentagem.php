<!DOCTYPE html>
    <head>
        <meta charset="utf-8">	
        <title>Porcentagem </title> 
        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">      
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>       
	</head>

 <body>

	<div class="row">
		<div class=" col s12 m6 push-m3">
			<h3 class="light"><center>Porcentagem</h3>
            <h5 class = "light">Informe os campos abaixo para descobrir a porcentagem</h5> </center>

				<form method="GET">					

                        <div class="input-field col s6">
							<input type="number" name="valorCompra" tabindex>
							<label for="valorCompra">Digite o valor total da compra</label>                            
						</div>

						<div class="input-field col s6">
							<input type="number" name="valorPorcentagem">
							<label for="valorPorcentagem">Digite o valor da %</label>                            
						</div>

                        <input type="submit" class="waves-light btn" value="Calcular"> 
                        <input type="submit" class="red btn" value="Limpar">

                    <?php                   
                        $valorCompra = $_GET['valorCompra'];
                        $valorPorcentagem = $_GET['valorPorcentagem'];

                            if ($valorCompra <= 0 && $valorPorcentagem <= 0){
                                echo"";
                            }
                            else{  
                                $valorTotal = ($valorCompra * $valorPorcentagem / 100);
                                echo "<br><center><h5 class='light'> $valorPorcentagem% de R$ $valorCompra,00 é igual a: <b> R$ $valorTotal </b></h5></center>";
                            };
                    ?>			

                </form>		
						
			</div>
	</div>	
</body>
</html>