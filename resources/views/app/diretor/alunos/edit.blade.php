@extends('app.diretor.layouts.basico')

@section('conteudo')
    <div class="container">
        <h4>Editar aluno {{ $aluno->nome }}</h4>
        <form action="{{ route('app.diretor.alunos.update', $aluno->id) }}" method="POST">
            @method('PUT')
            @csrf
            @include('app.diretor.alunos.layouts._partials.form')</form>
    </div>
@endsection
