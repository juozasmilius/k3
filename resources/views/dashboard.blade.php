@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <h3>Your Listings</h3>
                    @if(count($blogs))
                    <table class="table table-striped">
                        <tr>
                            <th>{{__('Pavadinimas')}}</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach($blogs as $blog)
                            <tr>
                            <td>{{$blog->pavadinimas}}</td>
                            <td></td>
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
