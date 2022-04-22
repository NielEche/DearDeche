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
                    <h1 class="pt-1 MAK">PRIVACY POLICY</h1>
                    <p style="font-weight:lighter !important;" class="f-12 MAK">Any information you provide is confidential and will only be used for order processing, marketing and the like. We will not disclose details to any third-parties without your consent. We implement a variety of security measures to maintain the safety of your personal information when you place an order or enter, submit, or access your personal information.</p>

                    <p style="font-weight:lighter !important;" class="f-12 MAK">We offer the use of a secure server. All supplied sensitive/credit information is transmitted via Secure Socket Layer (SSL) technology and then encrypted into our Payment gateway providers database only to be accessible by those authorized with special access rights to such systems, and are required to keep the information confidential.</p>

                    <p style="font-weight:lighter !important;" class="f-12 MAK">After a transaction, your private information (credit cards, financials, etc.) will not be stored on our servers.</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
