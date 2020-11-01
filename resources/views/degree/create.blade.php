@extends('layouts.basic')

@section('main')
@parent
<div class="row">
  <div class="col-sm-6">

    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    </ul>
  </div>
</div>
<form action="{{url('/degree')}}" method="POST">

  @csrf
  <div class="form-group">
    <label for="degreeName">Nome do curso</label>
    <input type="text" name="name" class="form-control" id="degreeName">
  </div>
  <div class="form-group">
    <label for="degreeDepartment">Departamento</label>
    <input type="text" name="department" class="form-control" id="degreeDepartment">
  </div>
  <div class="form-group">
    <label for="degreeDepartment">Descrição</label>
    <input type="text" name="description" class="form-control" id="description">
  </div>

  <button type="submit" class="btn btn-primary">Criar</button>
</form>
@endsection