<!doctype html>
<style>
    body {
  background-color: #212121 !important;
  text-align: center !important;
}
</style>




<html lang = 'en'>
    <div style = background-color:#38c79f;>
        <ul class="nav" style="color:Orange;">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('users.index')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">{{Auth::user()->name ?? "not logged in"}}</a>
            </li>
        </ul>
    </div>
   
    <head>
        {{-- Import CSS bootstrap into the layout --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title class="font-weight-bold"> Users - @yield('title')</title>
        <link rel="stylesheet" href="resources/css/app.css">

    </head>


    <body>
        <h3 style = 'color:Tomato' >@yield('title')</h3>
        @if($errors->any())
            Errors:
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    
                @endforeach
        @endif
        
        <div  style = 'color:#26b58d;'>
            @yield('content')
        </div>
        
        {{-- Import JS into the template --}}
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
