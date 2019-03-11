@extends('layouts.app')

@section('content')

@if(count($blogs))

<?php
//Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 3;
$rowCount = 0;
?>

    <div class="card-deck">
        @foreach ($blogs as $blog)
           
            <div class="card w-33"> 
            @if($blog->paveikslelis != null)
                <a href="/blog/{{$blog->id}}"><img class="card-img-top" style="height:232px" src="storage/vietos/picture/{{$blog->paveikslelis}}" alt="{{$blog->pavadinimas}}"></a>
            @else
                <a href="/blog/{{$blog->id}}"><img class="card-img-top" style="height:232px" src="storage/vietos/picture/nera.jpg" alt="{{$blog->pavadinimas}}"></a>
            @endif
                @if(!empty($blog->paveikslelis))
                    
                @endif
                <div class="card-body">
                    <a href="/blog/{{$blog->id}}"><h5 class="card-title font-weight-bold text-center text-uppercase text-danger">{{$blog->pavadinimas}}</h5></a>
                    <p class="card-text">{{$blog->tr_aprasymas}}</p>
                </div>
                <div class="card-footer text-right">
                    <div class="row">
                        <div class="col justify-center">
                        <i class="fa fa-heart"> </i>
                        <i class="fa fa-eye"> </i> 
                        </div>
                        <div class="col">
                            <a href="/blog/{{$blog->id}}" class="btn btn-outline-primary ">{{__("Plačiau")}}</a>
                        </div>
                    </div>  
                </div>
            </div>
        <?php
            $rowCount++;
            if($rowCount % $numOfCols == 0) echo '</div><br><div class="card-deck">';
        ?>
        @endforeach
    </div>

@elseif($blog->count() < 2)
    @foreach ($blog as $blog)
        <div class="card" style="width: 30%;">
            @if(!empty($blog->paveikslelis))
                <a href="/blog/{{$blog->id}}"><img class="card-img-top" style="height:232px" src="storage/vietos/picture/{{$blog->paveikslelis}}" alt="{{$blog->pavadinimas}}"></a>
            @endif
            <div class="card-body">
                <a href="/blog/{{$blog->id}}"><h5 class="card-title font-weight-bold text-dark text-center">{{$blog->pavadinimas}}</h5></a>
                <p class="card-text">{{$blog->trumpas_aprasymas}}</p>
            </div>
            <div class="card-footer text-right">
                <a href="/blog/{{$blog->id}}" class="btn btn-outline-primary">{{__("Plačiau")}}</a>
            </div>
        </div>
    @endforeach
@endif
@endsection