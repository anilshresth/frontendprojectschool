@extends('frontend.homemaster')

@section('css')
<link rel="stylesheet" href="{{'css/rhedonianvoice.css'}}">
@endsection('css')

@section('content')
<div class="container-fluid py-5 blue-100 submit-voice-section">
    <p>Rhedonian Voices</p>


</div>
<div class="container py-5 student-form ps-5 pe-5">
    <p>rhedonian voice</p>
    <p class="fs-5 border-warning border-bottom pb-3 ">Tell us more about your experience</p>

    <form action="" method="post">
        <div class="row row-cols-1 row-cols-sm-2 g-3">
            <div class="col">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" class="form-control" name="" id="fullname" required>
                <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Enter the full name">
            </div>
            <div class="col">
                <label for="emailaddress" class="form-label">Email address</label>
                <input type="text" class="form-control" name="" id="" required>

            </div>
            <div class="col">
                <label for="fullname" class="form-label">Contact Number</label>
                <input type="text" class="form-control" name="" id="fullname" required>
            </div>
            <div class="col">
                <label for="emailaddress" class="form-label">Years of class</label>
                <input type="text" class="form-control" name="" id="" required>

            </div>
            <div class="col">
                <label for="fullname" class="form-label">Courses</label>
                <input type="text" class="form-control" name="" id="fullname" required>
            </div>
            <div class="col">
                <label for="emailaddress" class="form-label">Current Address</label>
                <input type="text" class="form-control" name="" id="" required>

            </div>
            <div class="col">
                <label for="fullname" class="form-label">Current workplace</label>
                <input type="text" class="form-control" name="" id="fullname" required>
            </div>
            <div class="col">
                <label for="emailaddress" class="form-label">Workplac Address</label>
                <input type="text" class="form-control" name="" id="" required>

            </div>
            <div class="col">
                <label for="fullname" class="form-label">Designation</label>
                <input type="text" class="form-control" name="" id="fullname" required>
            </div>

            

        </div>
        <div class="row">

        <div class=" col-sm-12 col-md-6 mb-3">
            <label for="formFile" class="form-label">upload your photo</label>
            <input class="form-control" type="file" id="formFile">
            </div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <label for="textmessage" class="form-label">Text Messages</label>
                <textarea id="textmessage " class="form-control"  placeholder="place your message here" rows="10"></textarea>

            </div>

        </div>
        <button type="submit" class="btn  btn-lg bg-info mt-3" > Submit now</button>

    </form>




</div>

@endsection('contact')