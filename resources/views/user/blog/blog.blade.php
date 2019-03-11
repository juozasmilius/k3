@extends('layouts.app')

@section('content')
<div><a href="/blog" class="btn btn-outline-info float-right btn-sm">{{__('Sugrįžti')}}</a></div><br><br>
<div class="card">
  <div class="card-header text-center text-uppercase h2 text-danger">{{$blog->pavadinimas}} </div>
  <div class="card-body">
    <div class="card-text">{{$blog->aprasymas}}</div>
  </div>
</div>
<!-- CARUSEL START -->
@if(!empty($blog->paveikslelis))
<div id="carouselPlace" class="carousel slide carousel-fade align-self-center"  data-ride="carousel">
  <div class="carousel-inner ">
   <!-- if($pavs->count() > 0)-->
   <div></div>
   <div class="carousel-item active">
      <a href="../storage/vietos/picture/{{$blog->paveikslelis}}" target="_blank"><img class="d-block" style="width: 600px; height: 50%;" src="../storage/vietos/picture/{{$blog->paveikslelis}}?auto=yes" alt="First slide"></a>
    </div>
    <div></div>
    <!-- elseif($pavs->count() > 1)
        foreach ($pavs as $pav)
        <div class="carousel-item">
        <img class="d-block w-100" src="../storage/vietos/picture/{{$blog->name}}?auto=yes&bg=666&fg=444&text=antra$i" alt="Second slide">
        </div>
        endforeach
    endif-->
  </div>
  <a class="carousel-control-prev" href="#carouselPlace" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselPlace" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 @endif
 <br>
 <hr>
 <!-- CARUSEL END -->
<!-- COMENTS START -->

<h1 class="font-weight-bold text-dark text-center text-uppercase ">Komentarai</h1>




<!-- COMENTS END -->

@endsection