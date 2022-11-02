@include('layouts.header')

<div class="container-sm">

  <div class="wrapper">
    @foreach ($movie as $m)
        
    
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <a href="">
          
        <div class="card">
          <img src="{{asset('uploads/'.$m->Image)}}" class="card-img-top" alt="...">
          <div class="overlay">    
          </div>
        </div>
        </a>
        
      </div>
      <h3 style="margin-left:70px; margin-top:60px; color:white">{{$m->Title}}
      <br> <br> <br>{{$m->Genre}}
      

      <br> <br> <br>Give Your Feedback  <button type="button" class="btn btn-secondary"> Comment</button>

      <br> <br> <br>
      <button type="button" class="btn btn-danger" style="border-radius: 8px;"><a href="book" style="text-decoration: none; color:white">Book Tickets</a></button>
    </h3>

</div>
</div>
<h2 style="margin-top:20px;">ABOUT MOVIE</h2>
<p>{{$m->Description}}</p>
@endforeach
</div>