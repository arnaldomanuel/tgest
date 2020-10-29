@extends('layouts.basic')

@section('main')
    @parent
    <form>
    <div class="form-group">
        <label for="degreeName">Nome do curso</label>
        <input type="text" name="degreeName" class="form-control" id="degreeName" >
          </div>
    <div class="form-group">
        <label for="degreeDepartment">Departamento</label>
        <input type="text" class="form-control" name="degreeDepartment" id="degreeDepartment">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" name="degreeActive" id="degreeActive">
        <label class="form-check-label" for="degreeActive">Activo</label>
    </div>
  <button type="submit" class="btn btn-primary">Criar</button>
</form>
@endsection