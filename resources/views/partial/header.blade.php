{{-- <header>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                    <div style="display: flex; justify-content:center;" class="py-5 mb-5">
                        <h4 style="padding-top: 25px;" class="px-3 text-black MAK">DEAR</h4>
                        <a class="px-3" href="/"><img style="width:100px !important; " src="{{asset('files/img/ddlogo.png')}}"
alt=""></a>
<h4 style="padding-top: 25px;" class="px-3 py-5 text-black MAK">DECHE</h4>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">

</div>
</div>
</div>

</div>
</header> --}}

<header>
    <nav class="navbar navbar-default bg-transparent py-2">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header bg-transparent">
                <button style="margin-top: 27px;" type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div style="display: flex;" class="py-2 px-2">
                    <a class="px-3" href="/"><img style="width:90px !important; "
                            src="{{asset('files/img/ddlogo.gif')}}" alt=""></a>
                </div>
            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div style="background:#f5f5f5; color:#000 !important;" class="collapse navbar-collapse"
                id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a style=" color:#000 !important;" class="MAK f-12 text-black" href="/">Home</a></li>
                    <li><a style=" color:#000 !important;" class="MAK f-12 text-black"
                            href="{{route('about')}}">About</a></li>
                    <li><a style=" color:#000 !important;" class="MAK f-12 text-black" href="{{route('shop')}}">Shop</a>
                    </li>
                    <li><a style=" color:#000 !important;" class="MAK f-12 text-black"
                            href="{{route('lookbook')}}">Lookbook</a>
                    </li>
                    <li><a style=" color:#000 !important;" class="MAK f-12 text-black"
                            href="{{route('collab')}}">Collab</a>
                    </li>
                    <li>
                        <div class="px-3">
                            <div id="my-search-59961235"></div>
                            <div>
                                <script data-cfasync="false" type="text/javascript"
                                    src="https://app.ecwid.com/script.js?59961235&data_platform=code&data_date=2021-09-01"
                                    charset="utf-8"></script>
                                <script type="text/javascript">
                                    xSearch("id=my-search-59961235");

                                </script>
                            </div>
                        </div>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
