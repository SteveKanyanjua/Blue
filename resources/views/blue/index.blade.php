@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            BlueSpace
        </div>

        @foreach($phonez as $phone)
    <div>
        {{$phone->name}}-{{$phone->type}}-{{$phone->base}}-{{$phone->price}}
    </div>
@endforeach

        
    </div>
</div>
@endsection
