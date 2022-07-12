@extends('app.diretor.layouts.basico')

@section('conteudo')

<div class="container">
    <a class="btn btn-primary" href="{{ route('app.diretor.alunos.create') }}" role="button">Cadastrar novo Aluno</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Matricula</th>
                <th scope="col">Deletar</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alunos as $aluno)
                <tr>
                    <th scope="row">{{ $aluno->id }}</th>
                    <td>{{ $aluno->nome }}</td>
                    <td>{{ $aluno->matricula }}</td>

                    <td>
                        <form action="{{ route('app.diretor.alunos.delete', $aluno->id) }}" method="post">
                            @method("DELETE")
                            @csrf
                            <button type="submit" style="border: none; background-color:transparent; color:red"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                    <td><a href="{{ route('app.diretor.alunos.edit', $aluno->id) }}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
    
@endsection
