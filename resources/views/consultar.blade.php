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
							<a class="nav-link" href="{{url('/')}}">Cadastrar<span class="sr-only"></span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="">Consultar</a>
						</li>
					</ul>
				</div>
			</nav><div class="table-responsive">
			<div class="container">
  <table class="table">
  <tr>
      <th > ID</th>
      <th> Nome</th>
      <th> Telefone</th>
      <th > Origem</th>
	  <th > Data Contato</th>
      <th> Observação</th>
      <th> Ações</th>
      

    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach($listar as $itens)
	<tr>
		<th scope="row">{{$itens->id}}</th>
		<td> {{$itens->nome}}</td>
		<td> {{$itens->telefone}}</td>
		<td> {{$itens->origem}}</td>
		<td> {{$itens->data_do_contato}}</td>
		<td> {{$itens->observacao}}</td>
		<td>
		<div class="btn-group">
            <a href="excluir/{{$itens->id}}" type="button" class="btn btn-danger btn-xs">Deletar</a>
             <a href="editar/{{$itens->id}}" type="button" class="btn btn-warning btn-xs">Editar</a>
         </div>
		</td>
		@endforeach

  </tbody>
		</div>
	</div>
  </table>
</div>

	</body>
	</html>