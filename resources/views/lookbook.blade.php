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

{{-- <form action="{{ route('lookbookstore') }}" method="POST" enctype="multipart/form-data" name="slider" id="slider">
    @csrf
    @method('POST')
    <label for="name">Project</label>   
    <input type="text" class="form-control" name="project" id="project">

    <label for="name">Project ID</label>
    <input type="text" class="form-control" name="project_id" id="project_id"> 

    <label for="name">File</label>
    <input type="file"  class="form-control" name="book_image" id="book_image" accept="image/*">

    <button type="submit">submit</button>
</form> --}}

<div class="container pt-5 px-3" style="background-color: transparent !important;">
    <div class="row">
        <div class="col-lg-12 py-5 ">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 px-3 lookbookImg">
                <form action="{{ route('book1') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="id" id="id" value="3">
                    <button style="outline: none !important; width:100%;" type="submit" class="btn " href="">
                        <a style="outline:none; color:#000 !important;" class="text-black">
                            <img src="{{asset('files/img/slide3.jpeg')}}" class="img-fluid ">
                            <h4 class=" MAK text-center py-2">DD X NE</h4>
                        </a>
                    </button>
                </form>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 px-3 lookbookImg">
                <form action="{{ route('book1') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="id" id="id" value="2">
                    <button style="outline: none !important; width:100%;" type="submit" class="btn " href="">
                        <a style="outline:none; color:#000 !important;">
                            <img src="{{asset('files/img/gen/gen1.jpg')}}" class="img-fluid ">
                            <h4 class=" MAK text-center py-2">GENESIS</h4>
                        </a>
                    </button>
                </form>
              
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 px-3 lookbookImg">
                <form action="{{ route('book1') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="id" id="id" value="1">
                    <button style="outline: none !important; width:100%;" type="submit" class="btn " href="">
                        <a style="outline:none; color:#000 !important;">
                            <img src="{{asset('files/img/slide1.jpg')}}" class="img-fluid ">
                            <h4 class=" MAK text-center py-2">JANE THO'</h4>
                        </a>
                    </button>
                </form>
                
            </div>
        </div>
        
    </div>
</div>


@endsection
