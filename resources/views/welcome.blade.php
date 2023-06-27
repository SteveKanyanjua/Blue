@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
    <img src="/img/pexels-viktoria-emilia-10931478.jpg" alt="welcome to bluespace" style="width: 300px; height: 200px;">
        <div class="title m-b-md">
            BlueSpace <br />
            Home of all household items
        </div>
        <p class="mssg">{{session('mssg')}}</p>
        <a href="/blues/create">Order your phone</a>
        
    </div>
</div>
@endsection
