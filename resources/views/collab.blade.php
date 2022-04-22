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
<div class="container collabimg pb-5">
    <img src="https://media.giphy.com/media/VJl8jGmklq0XDMKEIO/giphy.gif" class="img-fluid">
</div>

<div class="container pt-5 px-3" style="background-color: transparent !important;">
    <div class="row">
        <div class="col-lg-12 py-5 ">
            <div class="">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 px-3">
                    <img src="{{asset('files/img/newmain.gif')}}" class="img-fluid ">
                </div>
                <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12 px-3">
                    <h2 class="pt-1 MAK">DD X NE</h2>
                    <p style="font-weight:lighter !important;" class="f-14 MAK"> This exhibition is an eye opener to the
                        home and the objects in them, with particular attention to one sculptural object that performs
                        more than one function as a matter of fact- The Ashtray. With smoking being back en-vogue and
                        legalized in more countries than ever, Dear Deche and Niel Eche have come together to create art
                        and celebrate a seemingly obsolete object </p>
                    <p style="font-weight:lighter !important;" class="f-14 MAK">The collection features a number of shapes, techniques, colors and styles with inspiration drawn from various sources. It has been designed and made with love. We hope you love it. </p>

                </div>
            </div>
        </div>

    </div>
</div>


@endsection
