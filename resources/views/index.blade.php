<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento de Serviços</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
        'node_modules/bootstrap/dist/css/bootstrap.min.css',
        'node_modules/bootstrap/dist/js/bootstrap.bundle.js'    
    ])

</head>
<body> 
	<div class="container">
		<div class="row">
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary col-12">
				<a class="navbar-brand" href="">SISTEMA WEB</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="">Cadastrar<span class="sr-only"></span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{url('consultar')}}">Consultar</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
		
		<div class="row">
			<div class="card mb-3 col-12">
				<div class="card-body">
					<h5 class="card-title">Cadastrar - Agendamento de Potenciais Clientes</h5>
					<p class="card-text">Sistema utilizado para agendamento de serviços.</p>
					<p>
						<form method="POST" action="{{url('adicionar-agendamento')}}">
					@csrf		
					<div class="form-group">
								<label for="exampleFormControlInput1">Nome:</label>
								<input type="text" class="form-control" name="nome" required id="txtNome">
							</div>
                            <br>
							<div class="form-group">
								<label for="exampleFormControlInput1">Telefone:</label>
								<input type="tel" class="form-control" required name="telefone" id="txtTelefone" placeholder="(xx)xxxxx-xxxx">
							</div>
                            <br>
							<div class="form-group">
								<label for="exampleFormControlSelect1">Origem:</label>
								<select class="form-control" required name="origem" id="txtOrigem">
								    <option>Selecione...</option>
									<option>Celular</option>
									<option>Fixo</option>
									<option>Whatsapp</option>
									<option>Facebook</option>
									<option>Instagram</option>
									<option>Google Meu Negocio</option>
								</select>
							</div>
                            <br>
							<div class="form-group">
								<label for="exampleFormControlInput1">Data do Contato:</label>
								<input type="date" class="form-control" required name="data_do_Contato" id="txtDataContato">
							</div>
                            <br>
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Observação</label>
								<textarea class="form-control" name="observacao" id="observacao" rows="3"></textarea>
							</div>
                            <br>
							<button type="submit"  class="btn btn-primary">Cadastrar</button>
						</form>
					</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>