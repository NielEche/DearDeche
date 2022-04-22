@extends('layouts.app')

@section('title')
Home
@endsection
@section('custom-style')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
@endsection

@section('content')

{{-- <div class="container" style="background-color: transparent !important;">
    <div class="row visible-lg visible-md">
        <div style="display: flex; justify-content:center;"  class=" pb-2">
            <div style="width: 25%; margin-top:15px ;"  class="">
                <a href="{{route('shop')}}">
                    <img src="{{asset('files/img/devilheart.gif')}}" class="img-fluid ">
                    <h4 class="text-center m-0 MAK text-black text-decoration-none">Shop</h4>
                </a>
            </div>
            <div style="width: 40% " class="">
                <a href="{{route('about')}}">
                    <img src="{{asset('files/img/didigifi.gif')}}" class="img-fluid">
                    <h4 class="text-center m-0 MAK text-black text-decoration-none">About Me</h4>
                </a>
            </div>
        </div>

        <div  style="display: flex; justify-content:center;" class=" pb-2">
            <div style="width: 20%;  margin-top:10px; margin-right:100px;" class="">
                <a href="{{route('lookbook')}}">
                    <img src="{{asset('files/img/lookbook.gif')}}" class="img-fluid ">
                    <h4 class="text-center m-0 pt-3 MAK text-black text-decoration-none">Lookbook</h4>
                </a>
            </div>
            <div style="width: 30%; margin-top:40px;"  class="px-3">
                <a href="{{route('collab')}}">
                    <img src="{{asset('files/img/collab.png')}}" class="img-fluid">
                    <h4 class="text-center m-0 pt-3 MAK text-black text-decoration-none">Collab</h4>
                </a>
            </div>
        </div>
    </div>

    <div class="row visible-sm visible-xs">
        <div style="display: flex; justify-content:center;"  class=" pb-2">
            <div style="width: 40%; margin-top:45px ;"  class="">
                <a href="{{route('shop')}}">
                    <img src="{{asset('files/img/devilheart.gif')}}" style="padding-left:10px !important;" class="img-fluid ">
                    <h4 class="text-center m-0 MAK text-black text-decoration-none">Shop</h4>
                </a>
            </div>
            <div style="width: 60% " class="px-1">
                <a href="{{route('about')}}">
                    <img src="{{asset('files/img/didigifi.gif')}}" class="img-fluid px-2">
                    <h4 class="text-center m-0 MAK text-black text-decoration-none">About Me</h4>
                </a>
            </div>
        </div>

        <div  style="display: flex; justify-content:center;  padding-top: 50px !important;" class=" pb-2">
            <div style="width: 35%;  margin-top:10px; margin-right:30px;" class="">
                <a href="{{route('lookbook')}}">
                    <img src="{{asset('files/img/lookbook.gif')}}" class="img-fluid ">
                    <h4 class="text-center m-0 pt-3 MAK text-black text-decoration-none">Lookbook</h4>
                </a>
            </div>
            <div style="width: 30%; margin-top:25px;"  class="px-2">
                <a href="{{route('collab')}}">
                    <img src="{{asset('files/img/collab.png')}}" class="img-fluid">
                    <h4 class="text-center m-0 pt-3 MAK text-black text-decoration-none">Collab</h4>
                </a>
           </div>
        </div>
    </div>
</div> --}}

<div class="container">
    <div style="display: flex; justify-content: center;" >
        <img style="width:100% !important; height:100% !important; object-fit: cover !important;" src="{{asset('files/img/newmain.gif')}}">
    </div>
    <div class="px-2 py-2" style="display: flex; justify-content: space-around;">
        <a href="{{route('terms')}}">
            <p class="MAK f-12 text-black text-decoration-none">terms & condition</p>
        </a>
        <a href="{{route('sustain')}}">
            <p class="MAK f-12 text-black text-decoration-none">sustainability</p>
        </a>
        <a href="{{route('contact')}}">
            <p class="MAK f-12 text-black text-decoration-none">contact us</p>
        </a>
    </div>
</div>


@endsection
