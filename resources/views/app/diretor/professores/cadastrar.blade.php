@extends('app.diretor.layouts.basico')

@section('conteudo')
<div class="container">
    <form action="{{ route('app.diretor.professores.create') }}" method="post">
        @csrf
        @include('app.diretor.professores.layouts._partials.form')
    </form>
</div>
@endsection