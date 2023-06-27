@extends('layouts.layout')

@section('content')
<div class="wrapper phone-details">

<h1>Order for {{$phonez->name}}</h1>
<p class="type">Type -{{$phonez->type}}</p>
<p class="base">Base -{{$phonez->base}}</p>
<form action="/blues/{{$phonez->id}}"method="POST">
    @csrf
    @method('DELETE ')
    <button>Complete Order</button>
</form>
</div>
<a href="/blues" class="back">Back to all Phones</a>
@endsection
