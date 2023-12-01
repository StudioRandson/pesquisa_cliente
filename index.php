<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Pesquisas</title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.1/dist/sweetalert2.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link rel="stylesheet" href="estilo.css">
	</head>
	<style>
		.bi-fan{
			width: 40px;
			height: 40px;
			color: green;
		}

		.bi-fan:hover{
			width: 40px;
			height: 40px;
			color: white;
		}

		footer{
			margin-top: 620px;
			
		}
	</style>
	<body>
		<div class='container text-center' ><br><br><br>
			<h1>Quão Satisfeito está com o nosso atendimento</h1>
						
			<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg']."<br><br>";
				unset($_SESSION['msg']);
			}
			?>
			<form method="POST" action="processa.php" enctype="multipart/form-data">
				<div class="estrelas">
					<input type="radio" id="vazio" name="estrela" value="" checked>
					
					<label for="estrela_um"><i class="fa"></i></label>
					<input type="radio" id="estrela_um" name="estrela" value="1">
					
					<label for="estrela_dois"><i class="fa"></i></label>
					<input type="radio" id="estrela_dois" name="estrela" value="2">
					
					<label for="estrela_tres"><i class="fa"></i></label>
					<input type="radio" id="estrela_tres" name="estrela" value="3">
					
					<label for="estrela_quatro"><i class="fa"></i></label>
					<input type="radio" id="estrela_quatro" name="estrela" value="4">
					
					<label for="estrela_cinco"><i class="fa"></i></label>
					<input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>
					
					<input  type="submit" class='btn btn-success' value="Cadastrar">
					
					
				</div>
			</div>
		</form>
		<footer class="bg-dark text-light">
    <div class="container-fluid py-3">
    <div class="row">
      <div class="col-4">
        <ul class="nav flex-column">
		<a href="index1.php">
		  <i class="bi bi-fan"></i>
		  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fan" viewBox="0 0 16 16">
			<path d="M10 3c0 1.313-.304 2.508-.8 3.4a1.991 1.991 0 0 0-1.484-.38c-.28-.982-.91-2.04-1.838-2.969a8.368 8.368 0 0 0-.491-.454A5.976 5.976 0 0 1 8 2c.691 0 1.355.117 1.973.332.018.219.027.442.027.668m0 5c0 .073-.004.146-.012.217 1.018-.019 2.2-.353 3.331-1.006a8.39 8.39 0 0 0 .57-.361 6.004 6.004 0 0 0-2.53-3.823 9.02 9.02 0 0 1-.145.64c-.34 1.269-.944 2.346-1.656 3.079.277.343.442.78.442 1.254m-.137.728a2.007 2.007 0 0 1-1.07 1.109c.525.87 1.405 1.725 2.535 2.377.2.116.402.222.605.317a5.986 5.986 0 0 0 2.053-4.111c-.208.073-.421.14-.641.199-1.264.339-2.493.356-3.482.11ZM8 10c-.45 0-.866-.149-1.2-.4-.494.89-.796 2.082-.796 3.391 0 .23.01.457.027.678A5.99 5.99 0 0 0 8 14c.94 0 1.83-.216 2.623-.602a8.359 8.359 0 0 1-.497-.458c-.925-.926-1.555-1.981-1.836-2.96-.094.013-.191.02-.29.02ZM6 8c0-.08.005-.16.014-.239-1.02.017-2.205.351-3.34 1.007a8.366 8.366 0 0 0-.568.359 6.003 6.003 0 0 0 2.525 3.839 8.37 8.37 0 0 1 .148-.653c.34-1.267.94-2.342 1.65-3.075A1.988 1.988 0 0 1 6 8m-3.347-.632c1.267-.34 2.498-.355 3.488-.107.196-.494.583-.89 1.07-1.1-.524-.874-1.406-1.733-2.541-2.388a8.363 8.363 0 0 0-.594-.312 5.987 5.987 0 0 0-2.06 4.106c.206-.074.418-.14.637-.199ZM8 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
			<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
		</svg>
          </a>
          
        </ul>
      </div>
      <div class="col-8">       
       
      </div>
    </div>
    </div>
    <div class="text-center" style="background-color: #333; padding: 20px;" >
      &copy 2023  Pesquisa de Satisfação
    </div>
  </footer>	
  		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.1/dist/sweetalert2.all.min.js"></script>
		<script>
			function alert(){
				Swal.fire({
				title: "Good job!",
				text: "You clicked the button!",
				icon: "success"
				});
			}
		</script>
	</body>
</html>