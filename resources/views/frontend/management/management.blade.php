@extends('frontend.homemaster')

@section('css')
<link rel="stylesheet" href="{{'css/management.css'}}">
@endsection

@section('content')
<div class="container-fluid bannerimage d-flex align-items-center justify-content-around " style="background-image:url({{asset('images/rhedonbannerintro.jpg')}})">
    <div class="dark-overlay">

    </div>
    <div class="d-flex justify-content-between">
            <p class=" banner-title"> School admission</p>
            <p>breadcrumbs</p>
        </div>


</div>
<div class="container management-board py-5">
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{'images/managementboard/headteacher.png'}}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Mr Tejendara Nath Shrestha</h5>
                    <h5 class="card-subtitle text-muted">Founder and Executive</h5>
                    <div class="text-center"><i class="fa-solid fa-envelope pe-2"></i><span>tnshrestah@gmail.com</span></div>

                </div>

            </div>

        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{'images/managementboard/drhim.jpg'}}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Dr Him lal ghimire</h5>
                    <h5 class="card-subtitle text-muted">Founder and board of direcotr</h5>
                    <div class="text-center">  <i class="fa-solid fa-envelope pe-2"></i><span>himighimire@gmail.com</span></div>

                </div>

            </div>

        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{'images/managementboard/mahabir.png'}}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Mr Mahabir agrawal</h5>
                    <h5 class="card-subtitle text-muted">Board of directors</h5>
                    <div class="text-center"><i class="fa-solid fa-envelope pe-2"></i><span>mahabir@gmail.com</span></div>

                </div>

            </div>

        </div>




    </div>
    <div class="row">
    <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{'images/managementboard/professordevi.jpg'}}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Mr professor devi dutta</h5>
                    <h5 class="card-subtitle text-muted">principal</h5>
                    <div class="text-center"> <i class="fa-solid fa-envelope pe-2"></i><span>devidutta@gmail.com</span></div>

                </div>

            </div>

        </div>


    </div>

</div>
@endsection('content')