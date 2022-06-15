@extends('frontend.homemaster')

@section('css')
<link rel="stylesheet" href="{{'css/montessori.css'}}">
@endsection('css')


@section('content')

@include('frontend.commonbanner.commonbanner')
<div class="container py-5">
    <div class="row">
        <div class="col-md-8 pe-4">
            <div class="row school-intro py-3">
                <p class="school-title">RHEDON Montessori Pre School</p>
                <p>
                REHDON Montessori is a Play and Learn and learn while you play conceptual course specially designed for kids between 2.5 years to 5 years old.
                </p>
                <p>
                REHDON Montessori Pre-School Photos
                </p>
            </div>
            <div class="row">
                <div class="col-md-6 mb-5  ">
                    <img src="{{'images/montessori1.jpg'}}" class="img-fluid rounded" alt="">

                </div>
                <div class="col-md-6 mb-5 ">
                <img src="{{'images/montessori2.jpg'}}" class="img-fluid rounded" alt="">


                </div>

            </div>
            <div class="row">
                <div class="col-md-6 ">
                    <img src="{{'images/montessori3.jpg'}}" class="img-fluid rounded" alt="">

                </div>
                <div class="col-md-6 mb-5">
                <img src="{{'images/montessori4.jpg'}}" class="img-fluid rounded" alt="">


                </div>

            </div>



        </div>
        <div class="col-md-4 ps-3">
            @include('frontend.commonblogs.commonblogs')


        </div>

    </div>
    <div class="row">
        <div class="col-xs-12 col-md-8 mt-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.647287978598!2d85.31202636509477!3d27.728174482783288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb191ff9204bab%3A0xa7c9222d07adf512!2sRehdon%20College%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1654148822907!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
        </div>

    </div>

</div>


@endsection('content')