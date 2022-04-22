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
 

<div class="container pt-5 px-3" style="background-color: transparent !important;">
    @foreach($lookbook as $key => $book)
        @if ($loop->first)
            @if ($book->project_id == 1)
                <h4 class=" MAK text-center py-2">JANE THO' COLLECTION</h4>

            @elseif($book->project_id == 2)
                <h4 class=" MAK text-center py-2">GENESIS COLLECTION</h4>

            @elseif($book->project_id == 3)
                <h4 class=" MAK text-center py-2">DD X NE COLLECTION</h4>
             
            @endif   
        @endif
    @endforeach
    <div class="row">
        <div class="col-lg-12 py-5 ">
            @foreach ($lookbook as $key => $book)
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 px-3 lookbookImg py-2">
                     <img src="uploads/lookbook/{{$book->book_image}}" class="img-fluid">
            </div>
            @endforeach
        </div>
        
    </div>
</div>


@endsection
