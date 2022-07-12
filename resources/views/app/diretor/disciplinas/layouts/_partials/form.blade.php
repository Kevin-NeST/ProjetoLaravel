<div class="mb-3">
    <label class="form-label">Nome</label>
    <input name="nome" type="text" class="form-control" value="{{ $disciplina->nome ?? old('nome') }}">
    <div style="color: red">
        {{ $errors->has('nome') ? $errors->first('nome') : '' }}
    </div>
</div>
<div class="mb-3">
    <label class="form-label">Descrição</label>
    <input name="descricao" type="text" class="form-control"
        value="{{ $disciplina->descricao ?? old('descricao') }}">
    <div style="color: red">
        {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}
    </div>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
