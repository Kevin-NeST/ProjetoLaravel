@extends('app.diretor.layouts.basico')

@section('conteudo')
    <div class="container">
        <h4>Cadastrar novo Aluno</h4>
        <form action="{{ route('app.diretor.alunos.create') }}" method="POST">
            @csrf
            @include('app.diretor.alunos.layouts._partials.form')
        </form>
    </div>
@endsection
