@extends('app.layouts.basico')
@section('titulo', 'Home')
@section('conteudo')
    <div class="center">
        <div class="home">
            <h1>Sistema de gestão escolar</h1>
            <h5>Gerênciamento escolar completo para Diretor, Professores e Alunos</h5>
            <div class="portais">
                <a class="btn btn-primary" href="{{ route('app.diretor.index') }}" role="button">Portal Diretor</a>
                <a class="btn btn-primary" href="{{ route('app.professor.index') }}" role="button">Portal Professor</a>
                <a class="btn btn-primary" href="{{ route('app.aluno.index') }}" role="button">Portal Aluno</a>
            </div>
        </div>
    </div>
    
@endsection
