<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ver Relatório</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <section id="topo" class="container">
        <div class="row">
            <div class="col-12" style="background-color:#6a842c; height: 100px; padding-top: 40px; color:#ffffff">
                <h3> Cursos - 32218 </h3>
            </div>
        </div>
    </section>
    <section id="menu" class="container">
        <div class="row">

            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page"
                                    href="{{ route('cadastrarAluno') }}">Aluno</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('cadastrarCurso') }}">Curso</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('cadastrarMatricula') }}">Matricula</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('verRelatorio') }}">Relatório</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>

        </div>
    </section>

    <section id="conteudo" class="container">
        <div class="row">
            <div class="offset-2 col-8">
                <div class="card">
                    <div class="card-header" style="background-color:#6a842c;color:#ffffff">
                        Listar Matrículas
                    </div>
                    <div class="card-body d-flex justify-content-center">
                        <div class="col-10">
                            <table class="table table-striped text-center">
                                <tr>
                                    <th>Nome</th>
                                    <th>Curso</th>
                                    <th>Data de Matrícula</th>
                                    <th>Ações</th>

                                </tr>
                                @foreach ($consulta as $key)
                                    <tr class="text-center">
                                        <td>{{ $key->aluno->nome}} </td>
                                        <td>{{ $key->curso->nome}} </td>
                                        <td>{{ \Carbon\Carbon::parse($key->dataDaMatricula)->format('d/m/Y') }}</td>
                                        <td>
                                            <a href="{{ route('editarMatricula', $key->id) }}"
                                                class="btn btn-warning btn-sm">Editar</a>
                                            <a href="{{ route('excluirMatricula', $key->id) }}"
                                                class="btn btn-danger btn-sm">Excluir</a>
                                        </td>
                                    </tr>

                                @endforeach
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    </section>
    <section id="rodape" class="container">
        <div class="row">
            <div class="col-12 mt-4" style="background-color:#6a842c; height: 70px;">
            </div>
        </div>
    </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

</body>

</html>