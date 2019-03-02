@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header h3"><strong>{{__('Redaguoti įrašą')}}</strong> <a href="/admin/blog" class="btn btn-secondary float-right btn-sm">{{__('Sugrįžti')}}</a></div>

            <div class="card-body">
                {!! Form::open(['action' => ['BlogsController@update', $blog->id], 'method' => 'POST']) !!}
                    {{ Form::bsText('pavadinimas', $blog->pavadinimas, ['placeholder' => 'Pavadinimas']) }}
                    {{ Form::bsText('SEO', $blog->seo, ['placeholder' => 'Žymos pagal kurias randamas įrašas']) }}
                    {{ Form::bsTextarea('Trumpas_aprašymas', $blog->tr_aprasymas, ['placeholder' => 'Trumas aprašymas']) }}
                    {{ Form::bsTextarea('Aprašymas', $blog->aprasymas, ['placeholder' => 'Aprašymas']) }}
                    {{ Form::bsSelect('Patalpinti_kategorijoje', [$blog->kategory_id => $blog->kategory_id, '1' => 'Lankytinos vietos', '2' => 'Maršrutai'], '', []) }}
                    {{ Form::hidden('_method', 'PUT')}}
                    {{ Form::bsSubmit('Įvesti', ['class'=>'btn btn-success float-right']) }}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection