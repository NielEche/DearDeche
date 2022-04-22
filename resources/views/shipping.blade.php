@extends('layouts.app')

@section('title')
Shipping
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
                    <h1 class="pt-1 MAK">SHIPPING</h1>
                    <p style="font-weight:lighter !important;" class="f-12 MAK">All items in our store ship directly from Abuja, Nigeria. We ship to all destinations within Nigeria and worldwide. Domestic orders are shipped via local dispatch companies while international orders are shipped via DHL. Shipping period is within 2-5 business days (after the production period has elapsed)We offer a flat rate of $40 for all international shipments. Extra cost applies for heavy duty shipping and bulk purchases. Once your item has been shipped, a confirmation email and a tracking number will be sent to you and you’ll be able to track your shipment on DHL’s official website. DearDeche is not responsible for any custom, taxes, import duties, brokerage fees or any other additional charges incurred by your local government. Dear Deche is not responsible for lost or stolen packages. Kindly ensure your shipping address is correct before placing an order. Please note that the customer is in charge of ensuring that the shipping laws permits the shipment of your order to the destination country. Dear Deche is not responsible for any damages or seizement of items that might arise from the aforementioned.</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
