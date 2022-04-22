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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 px-3">
                    <h1 class="pt-1 MAK">RETURN POLICY </h1>
                    <p style="font-weight:lighter !important;" class="f-12 MAK">Since we operate independently and on a made to order basis, we are unfortunately unable to offer refunds. We’ll always ensure that your piece is made as close to the picture displayed as possible but please, note that all pieces are made by hand and slight imperfections are to be expected due to the nature of hand made works. Please give room for these imperfections should there be any. Any huge production flaw that will cause a defect or alter the lifespan of your piece is out of tolerance and will not be shipped. With this in mind, should there be other reasons you’re not happy with your purchase, we’re happy to offer an exchange provided the item is unworn, undamaged and in it’s original tags and package it was sent. Kindly initiate an exchange request within 5 days after receiving the item by sending an email to deardechee@gmail.com and a return authorisation will be sent to you within 72 hours. Once your item has been received by us, you’ll be notified subsequently by email when the exchange item has been processed. Please note that the customer is responsible for the return shipping cost.</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
