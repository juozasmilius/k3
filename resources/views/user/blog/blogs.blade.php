@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header h3"><strong>{{__('Blogas')}}</strong></div>

                <div class="card-body">
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
                            <td></td>
                            <td></td>
                            </tr>
                        @endforeach
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection