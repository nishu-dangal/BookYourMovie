<link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}"/>
<link rel="stylesheet" href="{{ asset('/js/bootstrap.js') }}"/>
<link rel="stylesheet" href="./app.css">

    <x-app-layout>
        <nav class="navbar navbar-dark bg-light">
        <x-slot name="header">
          <form action="addmovie" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-dark bg-dark" style="color:white">ADD NEW MOVIE</button>
          </form>
         
        </x-slot>
       
        </nav>  
        
       
        <h1 style="margin-left:30px; font-size:30; font-weight:bold; margin-top:20px; margin-bottom:20px;">BOOKS</h1>
        <table class="table paleBlueRows equal-width">
            <thead class="table-dark">
                <tr>
                    <th>TITLE</th>
                    <th>Genre</th>
                    <th>Description</th>
                    <th>IMAGE</th>
                
                </tr>
                </thead>
                <?php
                $movie = DB::table('movies')->get(); 

                ?>
                @foreach ($movie as $p)
                <tbody>
                    <tr>
                    
                        <td>{{$p->Title}}</td>
                        <td>{{$p->Genre}}</td>
                        <td>{{$p->Description}}</td>
                        <td><img src="{{asset('uploads/'.$p->Image)}}" width="70px"></td></td>
                        
                        @endforeach
                    </tr>
            </tbody>
        </table>

                  
    </x-app-layout>