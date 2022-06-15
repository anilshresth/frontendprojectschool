@extends('frontend.homemaster')

@section('css')
<link rel="stylesheet" href="{{'css/rhedonsecondary.css'}}">
@endsection('css')

@section('content')

@include('frontend.commonbanner.commonbanner')
<div class="container py-5">
    <div class="row">
        <div class="col-md-8">
    
            <div class="row school-intro py-3">
                <p class="school-title">RHEDON Secondary School</p>
                <p>
                REHDON Secondary School was established in 2000 by a team of academicians with about 80 students and 15 staff members to cater to quality education among the new generation. Today, REHDON has become a full-fledged secondary school running classes from PG to Grade 10 and on the higher levels too. REHDON has been in its own state of the art infrastructure with a very professional and qualified teaching team. REHDON School now has more than 150 teaching and non-teaching staff committed to delivering the best education to make our students ready for the worldwide challenges in today’s competitive scenario. It has modern academic buildings with spacious classrooms, laboratories, e-library, hostel, administrative offices, AV rooms, and a cafeteria and spacious playing grounds for games and sports.
                </p>
                <p>
                REHDON Secondary Photos
                </p>
            </div>
            <div class="row">
                <div class="col-md-6 mb-5  ">
                    <img src="{{'images/rhedon-secondary.jpg'}}" class="img-fluid rounded" alt="">

                </div>
                <div class="col-md-6 mb-5 ">
                <img src="{{'images/rhedon-secondary2.jpg'}}" class="img-fluid rounded" alt="">


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

@endsection