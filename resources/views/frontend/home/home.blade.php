@extends('frontend.homemaster')

@section('css')
<link rel="stylesheet" href="{{'css/home.css'}}">
@endsection('css')


@section('content')
<section>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{'images/carouselbanner.jpg'}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item ">
        <img src="{{'images/carousel1.jpg'}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="{{'images/carousel2.jpg'}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="{{'images/carousel3.jpg'}}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="{{'images/carousel4.jpg'}}" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>


</section>

<section>
    <div class="container academic-slider-wrapper">

        <div class="text-center academic-header m-3">Academic Programme</div>
        <div class="academic-slider owl-carousel">
            <div class="academic-programme-box">
                <div class="academic-programme-image">
                    <img src="{{'images/rhedon-logo.png'}}"  class="img-fluid" alt="">


                </div>
                <div class="academic-programme-content">
                    <p class="text-center academic-title">
                        RHEDON Montesssori pre-school
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe facilis totam incidunt quia molestiae error! 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, soluta.
                    </p>
                    
                </div>
                
            </div>
            <div class="academic-programme-box">
                <div class="academic-programme-image">
                    <img src="{{'images/rhedon-logo.png'}}"  class="img-fluid" alt="">


                </div>
                <div class="academic-programme-content">
                    <p class="text-center academic-title">
                        RHEDON Montesssori pre-school
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe facilis totam incidunt quia molestiae error! 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, soluta.
                    </p>
                    
                </div>
                
            </div>
            <div class="academic-programme-box">
                <div class="academic-programme-image">
                    <img src="{{'images/rhedon-logo.png'}}"  class="img-fluid" alt="">


                </div>
                <div class="academic-programme-content">
                    <p class="text-center academic-title">
                        RHEDON Montesssori pre-school
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe facilis totam incidunt quia molestiae error! 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, soluta.
                    </p>
                    
                </div>
                
            </div>
            <div class="academic-programme-box">
                <div class="academic-programme-image">
                    <img src="{{'images/rhedon-logo.png'}}"  class="img-fluid" alt="">


                </div>
                <div class="academic-programme-content">
                    <p class="text-center academic-title">
                        RHEDON Montesssori pre-school
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe facilis totam incidunt quia molestiae error! 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, soluta.
                    </p>
                    
                </div>
                
            </div>
            <div class="academic-programme-box">
                <div class="academic-programme-image">
                    <img src="{{'images/rhedon-logo.png'}}"  class="img-fluid" alt="">


                </div>
                <div class="academic-programme-content">
                    <p class="text-center academic-title">
                        RHEDON secondary school
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe facilis totam incidunt quia molestiae error! 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, soluta.
                    </p>
                    
                </div>
                
            </div>
            <div class="academic-programme-box">
                <div class="academic-programme-image">
                    <img src="{{'images/rhedon-logo.png'}}"  class="img-fluid" alt="">


                </div>
                <div class="academic-programme-content">
                    <p class="text-center academic-title">
                        RHEDON +2 NEB
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe facilis totam incidunt quia molestiae error! 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, soluta.
                    </p>
                    
                </div>
                
            </div>
            <div class="academic-programme-box">
                <div class="academic-programme-image">
                    <img src="{{'images/rhedon-logo.png'}}"  class="img-fluid" alt="">


                </div>
                <div class="academic-programme-content">
                    <p class="text-center academic-title">
                        RHEDON montessori pre school
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe facilis totam incidunt quia molestiae error! 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, soluta.
                    </p>
                    
                </div>
                
            </div>
            <div class="academic-programme-box">
                <div class="academic-programme-image">
                    <img src="{{'images/rhedon-logo.png'}}"  class="img-fluid" alt="">


                </div>
                <div class="academic-programme-content">
                    <p class="text-center academic-title">
                        RHEDON collage BBS
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe facilis totam incidunt quia molestiae error! 
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, soluta.
                    </p>
                    
                </div>
                
            </div>


        </div>
    </div>

</section>

<div class="container-fluid bg-info text-center">
    <p class="mt-4 why-rhedon">why rhedon ?</p>
    <img src="{{'images/whyrehdon.png'}}" class="my-5 img-fluid"  alt="">

</div>

<section class="my-4">
    <div class="container ">
        <div class="row">
            <div class="col-md-6">
                <p class="event-col-title">  Events and activities</p>  
            </div>
            <div class="col-md-6">
               <p class="event-col-title">Notices</p>
            </div>

        </div>
        <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="event-box-wrapper my-2">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{'images/rhedon-default.jpg'}}" class="img-fluid p-3" alt="">

                    </div>
                    <div class="col-md-6 p-3">
                        <p class="event-name-bold">Art competiton (vII-IX)</p>
                        <p class="event-name-muted">Art competiton (vII-IX)</p>
                        <div class="event-date ">
                            <p class="float-end mt-3"><i class="fa-solid fa-calendar px-2"></i>july 26</p>


                        </div>

                    </div>

                </div>

            </div>

        </div>
        <div class=" col-sm-12 col-md-6">
            <div class="event-box-wrapper my-2">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{'images/rhedon-default.jpg'}}" class="img-fluid p-3" alt="">

                    </div>
                    <div class="col-md-6 p-3">
                        <p class="event-name-bold">Notice !! Notice !!</p>
                        <p class="event-name-muted">Art competiton (vII-IX)</p>
                        <div class="event-date ">
                            <p class="float-end mt-3"><i class="fa-solid fa-calendar px-2"></i>july 26</p>


                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="event-box-wrapper my-2">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{'images/rhedon-default.jpg'}}" class="img-fluid p-3" alt="">

                    </div>
                    <div class="col-md-6 p-3">
                        <p class="event-name-bold">Art competiton (IV-VI)</p>
                        <p class="event-name-muted">Art competiton (IV-VI)</p>
                        <div class="event-date ">
                            <p class="float-end mt-3"><i class="fa-solid fa-calendar px-2"></i>july 26</p>


                        </div>

                    </div>

                </div>

            </div>

        </div>
        <div class=" col-sm-12 col-md-6">
            <div class="event-box-wrapper my-2">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{'images/rhedon-default.jpg'}}" class="img-fluid p-3" alt="">

                    </div>
                    <div class="col-md-6 p-3">
                        <p class="event-name-bold">Notice </p>
                        <p class="event-name-muted">Notice !!</p>
                        <div class="event-date ">
                            <p class="float-end mt-3"><i class="fa-solid fa-calendar px-2"></i>july 26</p>


                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="event-box-wrapper my-2">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{'images/rhedon-default.jpg'}}" class="img-fluid p-3" alt="">

                    </div>
                    <div class="col-md-6 p-3">
                        <p class="event-name-bold">Art competiton (vII-IX)</p>
                        <p class="event-name-muted">Art competiton (vII-IX)</p>
                        <div class="event-date ">
                            <p class="float-end mt-3"><i class="fa-solid fa-calendar px-2"></i>july 26</p>


                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>


    </div>
</section>

<section class="rhedon-voices">
    <div class="container py-4">
        <p class="text-center fw-bold rhedon-voice">
            Rehdonians voice
        </p>
        <p class="text-muted text-center">
        Let's hear from our students about what they feel about REHDON and its' environment. REHDONIANS Voice !!
        </p>
        <div class="row">
            <div class="offset-md-1 col-md-5">
                <div class="student-voice my-sm-3">
                    <div class="student-voice-img d-inline">
                        <img src="{{'images/shanti-tamang.jpg'}}" class="img-fluid  ps-3" alt="shanti tamang image">
                        
                    </div>
                    <p class="  pt-4 fw-bold text-capitalize student-name">shanti tamang</p>
                    <p class=" student-grade">Management (Grade XI)</p>
                    <div class="student-voice-content">

                            <p class="p-5">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo sint laborum quae quas eos ex voluptates odit animi deleniti aut. Asperiores, mollitia, fugiat autem error natus recusandae assumenda numquam, pariatur ut cupiditate praesentium quas.
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti nam, ex iste repellendus accusamus minus veniam molestias. Praesentium, beatae quo!
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit maxime minima sequi ea. Autem perspiciatis molestiae, enim voluptatibus nulla repellat magnam eius possimus, commodi alias accusantium provident ipsa ipsam blanditiis!
                                lorem23
                            </p>

                    </div>
                </div>

            </div>
            <div class="offset-md-1 col-md-5">
                <div class="student-voice my-sm-3">
                        <div class="student-voice-img d-inline">
                            <img src="{{'images/shanti-tamang.jpg'}}" class="img-fluid  ps-3" alt="shanti tamang image">

                        </div>
                        <p class="  pt-4 fw-bold text-capitalize student-name">shanti tamang</p>
                        <p class=" student-grade">Management (Grade XI)</p>
                        <div class="student-voice-content">

                                <p class="p-5">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo sint laborum quae quas eos ex voluptates odit animi deleniti aut. Asperiores, mollitia, fugiat autem error natus recusandae assumenda numquam, pariatur ut cupiditate praesentium quas.
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti nam, ex iste repellendus accusamus minus veniam molestias. Praesentium, beatae quo!
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit maxime minima sequi ea. Autem perspiciatis molestiae, enim voluptatibus nulla repellat magnam eius possimus, commodi alias accusantium provident ipsa ipsam blanditiis!
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate corporis voluptates omnis iste quos dicta perspiciatis eveniet maiores autem laborum quaerat enim corrupti inventore cum, ea harum! Magnam, quia eum.
                                </p>

                        </div>
                    

                </div>

            </div>
            

        </div>

    </div>
</section>


<!-- blog section starts -->
<section >
    <div class="container blog-section">
        <p class="blog-title">Blogs</p>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3 ">
                    <img src="{{'images/principal.jpg'}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title  fw-bold">Evolution of darvin vs avatars of hindu god</h5>
                        <h6 class="card-subtitle text-muted">Principal</h6>
                        <p class="card-text text-muted pt-3 fs-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                             Fugit aperiam mollitia voluptate dolor id enim quaerat atque velit ex? Id.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro atque provident doloribus explicabo, reiciendis aliquid iusto? Nisi doloribus aut ab!
                        </p>
                        <a href="#" class="card-link fs-4">Read more</a>
                        <hr class="blog-divider" >
                        <div class="card-footer">
                            <i class="fa-solid fa-calendar px-2"></i>
                            <span>
                                October 1st, 2019
                                
                            </span>
                            <i class="fa-solid fa-comments ps-3"></i>
                            <span >0 Comments</span>

                        </div>
                             


                    </div>

                </div>

            </div>
            <div class="col-md-4">
                <div class="card mb-3 ">
                    <img src="{{'images/archana.jpg'}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title  fw-bold">REHDON -where teachers can be friendly for your good.</h5>
                        <h6 class="card-subtitle text-muted">Principal</h6>
                        <p class="card-text text-muted pt-3 fs-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                             Fugit aperiam mollitia voluptate dolor id enim quaerat atque velit ex? Id.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro atque provident doloribus explicabo, reiciendis aliquid iusto? Nisi doloribus aut ab!
                            </p>
                            <a href="#" class="card-link fs-4">Read more</a>
                            <hr class="blog-divider" >
                        <div class="card-footer">
                            <i class="fa-solid fa-calendar px-2"></i>
                            <span>
                                October 1st, 2019
                                
                            </span>
                            <i class="fa-solid fa-comments ps-3"></i>
                            <span >0 Comments</span>

                        </div>
                             


                    </div>

                </div>

            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <img src="{{'images/blogimage3.jpg'}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title  fw-bold">Motivating and professional</h5>
                        <h6 class="card-subtitle text-muted">Principal</h6>
                        <p class="card-text text-muted pt-3 fs-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                             Fugit aperiam mollitia voluptate dolor id enim quaerat atque velit ex? Id.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro atque provident doloribus explicabo, reiciendis aliquid iusto? Nisi doloribus aut ab!
                            </p>
                            <a href="#" class="card-link fs-4">Read more</a>
                            <hr class="blog-divider" >
                        <div class="card-footer">
                            <i class="fa-solid fa-calendar px-2"></i>
                            <span>
                                October 1st, 2019
                                
                            </span>
                            <i class="fa-solid fa-comments ps-3"></i>
                            <span >0 Comments</span>

                        </div>


                    </div>

                </div>

            </div>

        </div>
        <div class="text-center blog-links">
            <a href="#" class="btn btn-warning">View Blogs <i class="fa-solid fa-circle-arrow-right"></i></a>

        </div>

    </div>

</section>
<!-- blog section ends -->


@endsection('content')

@section('js')
    <script src="{{'js/academicslider.js'}}"></script>
@endsection('js')