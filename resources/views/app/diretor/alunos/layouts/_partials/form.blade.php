<div class="mb-3">
    <label class="form-label">Nome</label>
    <input name="nome" type="text" class="form-control" value="{{ $aluno->nome ?? old('nome') }}">
    <div style="color: red">
        {{ $errors->has('nome') ? $errors->first('nome') : '' }}
    </div>
</div>
<div class="mb-3">
    <label class="form-label">Email</label>
    <input name="email" type="email" class="form-control" value="{{ $aluno->email ?? old('email') }}">
    <div style="color: red">
        {{ $errors->has('email') ? $errors->first('email') : '' }}
    </div>
</div>
<div class="mb-3">
    <label class="form-label">Matrícula</label>
    <input name="matricula" type="text" class="form-control" value="{{ $aluno->matricula ?? old('matricula') }}">
    <div style="color: red">
        {{ $errors->has('matricula') ? $errors->first('matricula') : '' }}
    </div>
</div>
<div class="mb-3">
    <label class="form-label">Senha</label>
    <input name="senha" type="password" class="form-control" value="{{ $aluno->senha ?? old('senha') }}">
    <div style="color: red">
        {{ $errors->has('senha') ? $errors->first('senha') : '' }}
    </div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
