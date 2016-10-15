<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Codecasts - Laravel - Básico</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Bem vindo ao mundo Laravel!</h1>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Cidade/Estado</th>
                    <th>Nascimento</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->city }} {{ $customer->state }}</td>
                    <td>{{ $customer->birthdate }}</td>
                    <td width="1%" nowrap>
                        <a href="#" class="btn btn-xs btn-default">editar</a>
                        <a href="#" class="btn btn-xs btn-default">excluir</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>