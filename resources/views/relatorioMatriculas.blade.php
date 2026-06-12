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
    <style>
        .produto-img {
            width: 300px;
            height: 400px;
            object-fit: cover;
        }
    </style>
    <section id="topo" class="container">
        <div class="row">
            <div class="col-12 d-flex align-items-center"
                style="background-color:#6a842c; height: 100px; color:#ffffff">

                <img src="{{ asset('images/logo_curso.png') }}" alt="Logo"
                    style="width:150px; height:150px; object-fit:contain; margin-right:15px;">

                <h3 class="m-0">Cursos - 32218</h3>
            </div>
        </div>
    </section>
    <section id="menu" class="container">
        <div class="row">

            <nav class="navbar navbar-expand-lg bg-success-subtle">
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
                                    href="{{ route('principal') }}">Principal</a>
                            </li>
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
                        Selecione o Curso
                    </div>
                    <div class="card-body">
                        <div class="offset-2 col-8">
                            <form action="{{ route('relatorioMatriculasEscolhas') }}" method="GET">
                                @csrf

                                <div class="mb-3">
                                    <label for="curso" class="form-label">Curso</label>
                                    <select name="curso_id" id="curso_id" class="form-control" required>
                                        <option value="">Selecione um curso</option>

                                        @foreach($cursos as $curso)
                                            <option value="{{ $curso->id }}">
                                                {{ $curso->nome }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-success">Consultar</button>
                            </form>
                        </div>

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