@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header h3"><strong>{{__('Sukurti įrašą')}}</strong><a href="/admin/blog" class="btn btn-secondary float-right btn-sm">{{__('Sugrįžti')}}</a></div>

            <div class="card-body">
                {!! Form::open(['action' => 'BlogsController@store', 'method' => 'POST']) !!}
                    {{ Form::bsText('pavadinimas', '', ['placeholder' => 'Pavadinimas']) }}
                    {{ Form::bsText('SEO', '', ['placeholder' => 'Žymos pagal kurias randamas įrašas']) }}
                    {{ Form::bsTextarea('Trumpas_aprašymas', '', ['placeholder' => 'Trumas aprašymas']) }}
                    {{ Form::bsTextarea('Aprašymas', '', ['placeholder' => 'Aprašymas']) }}
                    {{ Form::bsSelect('Patalpinti_kategorijoje', ['1' => 'Lankytinos vietos', '2' => 'Maršrutai',], '1', ['placeholder' => 'Pasirinkite kategoriją...']) }}
                    {{ Form::bsSubmit('Įvesti', ['class'=>'btn btn-success float-right']) }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection