@extends('app.diretor.layouts.basico')

@section('conteudo')
<div class="container">
    <a class="btn btn-primary" href="{{ route('app.diretor.disciplinas.cadastrar') }}" role="button">Cadastrar nova Disciplina</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Deletar</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($disciplinas as $disciplina)
                <tr>
                    <th scope="row">{{ $disciplina->id }}</th>
                    <td>{{ $disciplina->nome }}</td>
                    <td>{{ $disciplina->descricao }}</td>

                    <td>
                        <form action="{{ route('app.diretor.disciplinas.delete', $disciplina->id) }}" method="post">
                            @method("DELETE")
                            @csrf
                            <button type="submit" style="border: none; background-color:transparent; color:red"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                    <td><a href="{{ route('app.diretor.disciplinas.edit', $disciplina->id) }}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
    
@endsection
