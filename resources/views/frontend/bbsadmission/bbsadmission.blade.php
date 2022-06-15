@extends('frontend.homemaster')
@section('css')
<link rel="stylesheet" href="{{'css/bbsadmission.css'}}">
@endsection

@section('content')
@include('frontend.commonbanner.commonbanner')
<div class="container py-5">
    <div class="row">
    <div class="col-md-8">
    <p class="admission-title">BBS Admission</p>
        <div class="admission-box">
            <p class="admission-subtitle">+2 NEB Grade XI (Science, Management & Humanities) Admission Procedure</p>
            <p class="admission-text"> Admission in Grade XI (+2 NEB) in all faculty will be based on the criteria which are set by the school.</p>
        </div>
        <div class="admission-box">
            <p class="admission-subtitle">Admission form fil up:</p>
            <p class="admission-text"> The first step of getting enrolled in REHDON after the inquiry is to fill up the admission from. Student should fill up an admission form which will be available at our official webpage and also at the office of admissions after the result of grade 10(SEE).

 </p>
        </div>
        <div class="admission-box">
            <p class="admission-subtitle">Admission Requirement/Eligibility:</p>
            <p class="admission-subtitle">Faculty of science:</p>
            <ol type="a" >
                <li class="admission-text" > Admission in Grade XI (+2 NEB) in all faculty will be based on the criteria which are set by the scho</li>
                <li class="admission-text" > Admission in Grade XI (+2 NEB) in all faculty will be based on the criteria which are set by the scho</li>
                <li class="admission-text" > Admission in Grade XI (+2 NEB) in all faculty will be based on the criteria which are set by the scho</li>

            </ol>
        </div>
        <div class="admission-box">
            <p class="admission-subtitle">+2NEB Grade XI (Science, Management & Humanities) Admission Procedure</p>
            <p class="admission-text"> Admission in Grade XI (+2 NEB) in all faculty will be based on the criteria which are set by the scho</p>
        </div>
        <div class="admission-box">
            
            <p class="admission-subtitle">Faculty of humanities:</p>
            <ol type="a" >
                <li class="admission-text" >  Student securing at least 85 CGPA and B plus grade each in Science, Mathematics, Optional Mathematics and English will be eligible to fill up the form.</li>
                <li class="admission-text" > Form can be submitted at the office of admissions during office time (7:00 AM -5:00PM</li>
                <li class="admission-text" > Students should attach 2 passport size photos, photocopy of mark sheet and certificate along with the admission form</li>

            </ol>
        </div>
        

    </div>
     
    <div class="col-md-4 ps-3">
            @include('frontend.commonblogs.commonblogs')


        </div> 
   
        </div>
</div>
@endsection