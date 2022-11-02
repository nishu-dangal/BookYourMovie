<x-guest-layout>
    <!DOCTYPE html>
    <head>
        <title>Book Your Movie</title>
         <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
         <link rel="stylesheet" href="/app.css"/>
         <link rel="stylesheet" href="{{ asset('/js/bootstrap.js') }}"/>
       
    </head>
    <body>
       
        <script src="js/bootstrap.js"></script>



<script src="js/bootstrap.js"></script>
    <nav class="navbar navbar-dark bg-dark">
        
        <div class="container-fluid">
          <a class="navbar-brand" style="padding-left: 60px">Home</a>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          </form>
         

          @if (Route::has('login'))
 
          @auth
          
              <a class="btn btn-primary"  href="{{ url('/dashboard') }}" style="color: white" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
          @else
              <a class="btn btn-primary"  href="{{ route('login') }}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Log in</a>
          
              @if (Route::has('register'))
                  <a class="btn btn-primary"  href="{{ route('register') }}" style="color: white" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
              @endif
          @endauth
          
          @endif

    
          
          @if (Route::has('login'))
          @auth
          <div class="hidden sm:flex sm:items-center sm:ml-6">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                        <div style="color: white">{{ Auth::user()->name }}</div>
    
                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>
    
                <x-slot name="content">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
    
                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    
          @endauth
    
          @endif
        
        </div>
      </nav>
    
    
    </body>
    </x-guest-layout>