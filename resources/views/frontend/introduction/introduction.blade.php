@extends('frontend.homemaster')

@section('css')
<link rel="stylesheet" href="{{'css/introduction.css'}}">
@endsection('css')



@section('content')
<section>
    <div class="container-fluid bannerimage d-flex align-items-center justify-content-around" style="background-image:url({{asset('images/rhedonbannerintro.jpg')}})">
        <div class="dark-overlay">
        </div>
        <div class="d-flex justify-content-between">
            <p class=" banner-title"> School admission</p>
            <p>breadcrumbs</p>
        </div>


        
     
    </div>
</section>

<div class="container-fluid intro-building py-5">
   
        <div class="row">
            <div class="col-md-6">
                <div class=" intro-about py-5">
                    <p>
                        About us
                    </p>
                    <p>
                    Education has a vital role to play in moulding, shaping, sharpening and directing an individual, the society and the nation towards the attainment of the described goals. Tomorrow’s society will be guided by the kind of education we provide to the students today. The educational institutions must act upon the challenges of the time and prepare the citizens for a satisfying future. Bearing this philosophy in mind, REHDON was incepted in 2000 to provide quality education. 
                    </p>

                </div>

            </div>
            <div class="col-md-6 p-0 ">
                <img src="{{'images/rhedonbuilding.jpg'}}" class="img-fluid w-100    " alt="">
            </div>

        </div>

</div> 
@endsection('content')
@section('js')
@endsection('js')