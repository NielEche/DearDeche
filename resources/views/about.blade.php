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

<div class="container px-3" style="background-color: transparent !important;">
    <div class="row">
        <div class="col-lg-12 py-5 ">
            <div class="">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 px-3">
                    <img src="{{asset('files/img/aboutimg.jpg')}}" class="img-fluid">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 px-3">
                    <h1 class="pt-1 MAK">Hi, I’m Deche,</h1>
                    <p style="font-weight:lighter !important;" class="f-14 MAK"> a Gen Z Creative from Port Harcourt,
                        Nigeria. I grew up in a rather strict religious African home and found a way to escape my not so
                        pleasant reality through my imagination. From thinking up stories every night before bed(lol) to
                        penning down these stories, and dipping my hands into a range of different mediums including
                        photography, fashion design and eventually crafts, I’ve managed to create a safe bubble for
                        myself doing the things I love.</p>
                    <p style="font-weight:lighter !important;" class="f-14 MAK"> Dear Deche enunciated as /deeuh- day-che/
                        is the all encompassing body for the creative things I love to do, which includes mostly fashion
                        and home decor.
                        I hand make each piece one at a time, with love and care and when necessary I work with other
                        wonderfully talented local artisans.</p>
                    <p style="font-weight:lighter !important;" class="f-14 MAK"> I draw inspiration from my surrounding and my femininity which are recurring themes in my work. I value slowness(pace), art, sustainability and sharing my story. 
                        My hope is that you can somehow relate to my work and it brings you a lot of happiness. 
                        Thank you for your support 🐝</p>

                </div>
            </div>

        </div>
    </div>
</div>


@endsection
