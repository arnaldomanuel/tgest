@extends('layouts.basic')


@section('page-title', 'Criar Cadeira')
@section("main")

<style>
    @media only screen and (min-width: 1000px) {
        .min-width-main-card {
            min-width: 50%;
        }
    }

    @media only screen and (max-width: 999px) {
        .min-width-main-card {
            min-width: 70%;
        }
    }

    @media only screen and (max-width: 599px) {
        .min-width-main-card {
            max-width: 80%;
        }
    }

    @media only screen and (max-width: 199px) {
        .min-width-main-card {
            min-width: 100%;
        }
    }
</style>

@if (session('activity'))
   <div class="row">
       <div class="col-sm-6">
       <div class="alert alert-success">
           <div class="alert alert-success">
               {{session('activity')}}
           </div>
       </div>
   </div>
</div>
@endif

<div class="container">
    <div class="row">
        @foreach($degrees as $degree)
        <div class="col-sm-4">
            <div class="card min-width-main-card">
                <div class="card-body">
                    <ul>
                        <li>
                            Nome: {{$degree->name}}
                        </li>
                        <li>
                            Descrição: {{$degree->description}}
                        </li>
                        <li>
                            Departamentto: {{$degree->department}}
                        </li>
                    </ul>
                    <a class="btn btn-primary" href="{{url('/degree/'.$degree->id)}}">Ver Curso</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>

@endsection