@extends('frontend.homemaster')

@section('css')
<link rel="stylesheet" href="{{'css/mission.css'}}">
@endsection('css')


@section('content')
@include('frontend.commonbanner.commonbanner')
<div class="container py-5">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="mission-box rounded-2 ps-5 py-4 mb-5">
                <div class="mission-img">
                    <img src="{{'images/mission.jpg'}}" class="img-fluid" alt="">

                </div>
                <p class="mission-title">Mission</p>
                <p class="mission-text text-muted">The mission of REHDON is to provide innovative educational environments and hand on experiences that enable individuals to meet the challenges of this century and prosper in our increasingly diverse and ever-changing global complex society. </p>
            </div>

        </div>


        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="mission-box rounded-2 ps-5 py-4 mb-5">
                <div class="mission-img">
                    <img src="{{'images/salient.png'}}" class="img-fluid" alt="">

                </div>
                <p class="mission-title">Mission</p>
                <p class="mission-text text-muted">The mission of REHDON is to provide innovative educational environments and hand on experiences that enable individuals to meet the challenges of this century and prosper in our increasingly diverse and ever-changing global complex society. </p>
            </div>

        </div>
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="mission-box rounded-2 ps-5 py-4 mb-5">
                <div class="mission-img">
                    <img src="{{'images/vision.jpg'}}" class="img-fluid" alt="">

                </div>
                <p class="mission-title">Mission</p>
                <ul class=" list-group mission-group-custom">
                    <li class="list-group-item text-muted">The mission of REHDON is to provide</li> 
                    <li class="list-group-item text-muted">Individual Students Care Progra</li>
                    <li class="list-group-item text-muted">Individual Students Care Program</li>
                    <li class="list-group-item text-muted">Individual Students Care Program</li>
                    <li class="list-group-item text-muted">Individual Students Care Program</li>
                    <li class="list-group-item text-muted">Individual Students Care Program</li>
                    
                </ul>
            </div>

        </div>


    </div>


</div>

@endsection('content')


