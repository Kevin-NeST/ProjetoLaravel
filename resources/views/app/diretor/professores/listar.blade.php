@extends('app.diretor.layouts.basico')

@section('conteudo')
<div class="container">
    <a class="btn btn-primary" href="{{ route('app.diretor.professores.cadastrar') }}" role="button">Cadastrar novo Professor</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Deletar</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($professores as $professor)
                <tr>
                    <th scope="row">{{ $professor->id }}</th>
                    <td>{{ $professor->nome }}</td>
                    <td>{{ $professor->email }}</td>

                    <td>
                        <form action="{{ route('app.diretor.professores.delete', $professor->id) }}" method="post">
                            @method("DELETE")
                            @csrf
                            <button type="submit" style="border: none; background-color:transparent; color:red"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                    <td><a href="{{ route('app.diretor.professores.edit', $professor->id) }}"><i class="fa-solid fa-pen-to-square"></i></a></td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>
    
@endsection
