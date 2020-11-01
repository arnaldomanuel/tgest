@extends('layouts.basic')

@section('main')
<style>
 
 @media only screen and (min-width: 1000px) {
    .min-width-main-card{
    min-width: 50%;
}}
@media only screen and (max-width: 999px) {
    .min-width-main-card{
    min-width: 70%;
}
}
@media only screen and (max-width: 599px) {
    .min-width-main-card{
    max-width: 80%;
}
}
@media only screen and (max-width: 199px) {
    .min-width-main-card{
    min-width: 100%;
}
} 
</style>

<div class="card min-width-main-card">
    <div class="card-body">
        <ul>
        <li>
                Nome: {{$degree->name}}
               
            </li>
            <li>
                Departamento: {{$degree->department}}
               
            </li>
            <li>
            Descrição: {{$degree->description}}
            </li>
        </ul>

        <form action="{{route('degree.destroy', $degree->id)}}" method="post">
            @csrf
            @method('DELETE')

            <button class="btn btn-primary" type="submit">Apagar Curso</button>
        </form>
    </div>
</div>
@endsection