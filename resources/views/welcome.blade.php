@include('layouts.header')

<div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./image/front.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./image/front2.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="./image/front3.jpg" class="d-block w-100" alt="...">
          </div>
         
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>



<h1 style="margin-left: 100px; margin-top: 20px; font-family: Courier New;"> RECENTLY SHOWING </h1>
<?php
$movie = DB::table('movies')->where('status','Showing')->get(); 

?> 
@foreach ($movie as $p)
<div class="container-sm">

      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <a href="eachmovie/{{$p->id}}">
          <div class="card">
            <img src="{{asset('uploads/'.$p->Image)}}" class="card-img-top" alt="...">
            <div class="overlay">
          
            </div>
           
          </div>
          </a>
        </div>
      
</div>
@endforeach


<br>
<br>
<h1 style="margin-left: 100px; margin-top: 20px; font-family: Courier New;"> COMING SOON </h1>

<?php
$movie = DB::table('movies')->where('status','Coming')->get(); 
?> 
@foreach ($movie as $p)
<div class="container-sm">

      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <a href="eachmovie/{{$p->id}}">
          <div class="card">
            <img src="{{asset('uploads/'.$p->Image)}}" class="card-img-top" alt="...">
            <div class="overlay">
          
            </div>
           
          </div>
          </a>
        </div>
        

</div>
@endforeach