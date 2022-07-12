@extends('app.diretor.layouts.basico')

@section('conteudo')
    <div class="container">
        <h4>Editar disciplina {{ $disciplina->nome }}</h4>
        <form action="{{ route('app.diretor.disciplinas.update', $disciplina->id) }}" method="POST">
            @method('PUT')
            @csrf
            @include('app.diretor.disciplinas.layouts._partials.form')</form>
    </div>
@endsection
