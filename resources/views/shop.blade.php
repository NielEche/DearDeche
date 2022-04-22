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

<div class="container" style="background-color: transparent !important;">
    <div class="row">
        <style>
         
            .ec-footer__cell {
                display: none !important;    
            }

            html#ecwid_html body#ecwid_body .ec-size .ec-store *{
                font-size: 12px !important;
                font-weight: bold !important;
                font-family: MAK !important;
            }

            .grid-product__title-inner {
                color: #000 !important;
                font-family: MAK !important;
            }

            html#ecwid_html body#ecwid_body .ec-size .ec-store .ec-likely svg{
                fill: #000 !important;
            }

            html#ecwid_html body#ecwid_body .ec-size .ec-store .ec-likely__widget{
                background-color: transparent !important;
            }

            html#ecwid_html body#ecwid_body .ec-size .ec-store .ec-link, html#ecwid_html body#ecwid_body .ec-size .ec-store .ec-link:visited{
                color:rgb(0, 0, 0) !important;
                font-weight: lighter !important;
                font-size: 12px !important;
            }

            html#ecwid_html body#ecwid_body .ec-size.ec-size--s .ec-store .ec-cart-step--simple .ec-cart-step__title {/*  */
                color: #000 !important;
            }

            html#ecwid_html body#ecwid_body [class^='ec-minicart'] {
                float: right !important;
            }
        </style>
        
        <div class="ec-cart-widget"></div>
        <div>
        <script data-cfasync="false" type="text/javascript" src="https://app.ecwid.com/script.js?59961235&data_platform=code&data_date=2021-08-05" charset="utf-8"></script>
        <script type="text/javascript">Ecwid.init();</script>
        </div>
        <div id="my-store-59961235"></div>
        <div>
        <script data-cfasync="false" type="text/javascript" src="https://app.ecwid.com/script.js?59961235&data_platform=code&data_date=2021-08-05" charset="utf-8"></script><script type="text/javascript"> xProductBrowser("categoriesPerRow=3","views=grid(20,3) list(60) table(60)","categoryView=grid","searchView=list","id=my-store-59961235");</script>
        </div>
    </div>
    <div class="px-2 py-2" style="display: flex;  align-items: center;
    justify-content: center; ">
        <a href="{{route('privacy')}}">
            <p class="MAK f-12 px-4  mb-0  text-black text-decoration-none">privacy policy</p>
        </a>
        <a href="{{route('shipping')}}">
            <p class="MAK f-12 px-4 mb-0 text-black text-decoration-none">shipping</p>
        </a>
        <a href="{{route('returnpolicy')}}">
            <p class="MAK f-12 px-4  mb-0  text-black text-decoration-none">return policy</p>
        </a>
    </div>

</div>



@endsection
