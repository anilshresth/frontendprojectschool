@extends('frontend.homemaster')

@section('css')
<link rel="stylesheet" href="{{'css/schooladmission.css'}}">
@endsection('css')

@section('content')
@include('frontend.commonbanner.commonbanner')
<div class="container py-5">
    <div class="row">
    <div class="col-md-8">
        @include('frontend.commonadmission.commonadmission')
        

    </div>
     
    <div class="col-md-4 ps-3">
            @include('frontend.commonblogs.commonblogs')


        </div> 
   
        </div>
</div>
@endsection('content')

