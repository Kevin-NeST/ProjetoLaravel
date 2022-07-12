@extends('app.diretor.layouts.basico')

@section('conteudo')
    <div class="container">
        <h4>Editar aluno {{ $professor->nome }}</h4>
        <form action="{{ route('app.diretor.professores.update', $professor->id) }}" method="POST">
            @method('PUT')
            @csrf
            @include('app.diretor.professores.layouts._partials.form')
        </form>
    </div>
@endsection
