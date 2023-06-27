@extends('layouts.layout')

@section('content')
 <div class="wrapper create-pizza">
    <h1> Create a new Phone</h1>
    <form action="/blues" method="POST">
        @csrf
        <label form="name ">Your name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose Phone Type:</label>
        <select name="type" id="type">
            <option value="android">Android</option>
            <option value="ios">IOS</option>
            <option value="huawei">Huawei</option>
        </select>
        <label for="base">Choose base model Type:</label>
        <select name="base" id="base">
            <option value="tecno">Tecno</option>
            <option value="iphone">Iphone</option>
            <option value="infinix">Infinix</option>
        </select>
        <input type="submit" value="order your Phone" >
    </form>
 </div>
@endsection
