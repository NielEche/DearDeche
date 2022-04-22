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

<div class="container pb-5">
    <div>
        <h1 style="margin-top: 0px;" class="text-center MAK pt-0 ">Contact DearDeche</h1>
    </div>
    <div class="py-5" style="display:flex; justify-content:center;">
        <div style="display:flex;" class="px-4">
            <a class="px-4" href="https://www.instagram.com/deardeche/" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fab"
                    data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" viewBox="0 0 448 512"
                    height="16">
                    <path fill="#000"
                        d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                    </path>
                </svg>
            </a>
            <a class="px-4" href="https://twitter.com/deardeche" target="_blank" style="display: block !important;">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false" data-prefix="fab"
                    data-icon="twitter" class="svg-inline--fa fa-twitter fa-w-16" role="img" viewBox="0 0 512 512"
                    height="16">
                    <path fill="#000"
                        d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                    </path>
                </svg>

            </a>
            <a class="px-4" href="https://www.pinterest.com/deboraheche1/_created/" target="_blank" style="display: block !important;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.372-12 12 0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738.098.119.112.224.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.631-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146 1.124.347 2.317.535 3.554.535 6.627 0 12-5.373 12-12 0-6.628-5.373-12-12-12z" fill-rule="evenodd" clip-rule="evenodd"/></svg>
            </a>
        </div>
    </div>
</div>
<div class="container pt-5" style="background-color: transparent !important;">
    @if(session()->has('message'))
    <div style="background-color:rgb(235, 186, 186) !important; " class="alert alert-success   w-50  MAK" role="alert">
        <button class="close" data-dismiss="alert"></button>
        <strong class="MAK">submitted successfully{{--  {{ session()->get('message') }} --}}</strong>
    </div>

    @endif
    <div class="">
        <form action="{{ route('contactstore') }}" method="POST" enctype="multipart/form-data" name="slider"
            id="slider">
            @csrf
            @method('POST')
            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 py-2">
                <input placeholder="What's your name ?"
                    style=" background-color:#f5f5f5; box-shadow: none; border-color:#f5f5f5; border-bottom: 1px solid black;"
                    type="text" name="name" id="name" class="form-control MAK " required>
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 py-2">
                <input placeholder="What's your email ?"
                    style="background-color:#f5f5f5; box-shadow: none; border-color:#f5f5f5; border-bottom: 1px solid black;"
                    type="text" name="email" id="email" class="form-control MAK" required>
            </div>
            <div class="form-group  col-lg-12 col-md-12 col-sm-12 col-xs-12 py-2">
                <input placeholder="What's your Phone number ?"
                    style="background-color:#f5f5f5; box-shadow: none; border-color:#f5f5f5; border-bottom: 1px solid black;"
                    type="text" name="phone" id="phone" class="form-control MAK" required>
            </div>
            <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 py-2">
                <textarea placeholder="What's your message ?"
                    style="background-color:#f5f5f5; box-shadow: none; border-color:#f5f5f5; border-bottom: 1px solid black;"
                    name="message" id="message" cols="30" class="form-control MAK" rows="7" required></textarea>
            </div>
            <div class="form-group text-center col-lg-12 col-md-12 col-sm-12 col-xs-12 py-2">
                <button type="submit" style="background-color:rgb(235, 186, 186) !important; outline:none !important;"
                    class="btn text-white text-decoration-none">Send</button>
            </div>
        </form>
    </div>

    <div class="row ">
        <div style="display: flex; justify-content:center;" class=" pb-2">

            <div style="width: 20% " class="px-1">
                <a href="{{route('about')}}">
                    <img src="{{asset('files/img/didi.gif')}}" class="img-fluid">
                </a>
            </div>
        </div>

    </div>
</div>



@endsection
