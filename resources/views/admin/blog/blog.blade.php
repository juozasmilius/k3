@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h3"><strong>{{__('Blogas')}}</strong>  <a href="/blog/create" class="btn btn-success float-right btn-sm">{{__('Pridėti įrašą')}}</a></div>

                <div class="card-body">
                    <h3>{{__('Jūsų sukurti įrašai')}}</h3>
                    @if(count($blogs))
                    <table class="table table-striped border">
                        <tr>
                            <th class="w-100">{{__('Pavadinimas')}}</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($blogs as $blog)
                            <tr>
                            <td>{{$blog->pavadinimas}}</td>
                            <td><a class="btn btn-secondary btn-sm float-right" href="/admin/blog/{{$blog->id}}/edit">{{__('Redaguoti')}}</a></td>
                            <td>
                            {!! Form::open(['action' => ['BlogsController@destroy', $blog->id], 'method' => 'POST', 'class' => 'float-right', 'onsubmit' => 'return confirm("Ar tikrai norite ištrinti?")']) !!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{ Form::bsSubmit('Ištrinti', ['class'=>'btn btn-danger btn-sm']) }}
                            {!! Form::close() !!}
                            </td>
                            </tr>
                        @endforeach
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
