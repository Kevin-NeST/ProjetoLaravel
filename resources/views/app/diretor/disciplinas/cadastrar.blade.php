@extends('app.diretor.layouts.basico')

@section('conteudo')
<div class="container">
    <h4>Cadastrar nova Disciplina</h4>
    <form action="{{ route('app.diretor.disciplinas.create') }}" method="POST">
        @csrf
        @include('app.diretor.disciplinas.layouts._partials.form')</form>
</div>
@endsection