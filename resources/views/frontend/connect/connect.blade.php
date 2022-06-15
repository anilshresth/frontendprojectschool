@extends('frontend.homemaster')

@section('css')
<link rel="stylesheet" href="{{'css/contactsection.css'}}">
@endsection('css')

@section('content')
@include('frontend.commonbanner.commonbanner')
<div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <div class="contact-form p-3 shadow">
                <form action="">
                    <div class="row row-cols-1" >
                        <div class="col">
                            <div class="mb-3">
                                <label for="" class="form-label"></label>
                                <input type="text" class="form-control" placeholder="your-name" required>

                            </div>

                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="" class="form-label"></label>
                                <input type="text" class="form-control" placeholder="your-email" required>

                            </div>

                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="" class="form-label"></label>
                                <input type="text" class="form-control" placeholder="phone number" required>

                            </div>

                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="" class="form-label"></label>
                                <input type="text" class="form-control" placeholder="subject" required>

                            </div>

                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <textarea name="" id="" cols="30" rows="10" class="form-control" required></textarea>

                            </div>

                        </div>
                        <div class="col">
                            <button type="submit" type="btn btn-lg">Submit</button>

                        </div>

                    </div>
                </form>

            </div>

        </div>
        <div class="col-md-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.6472879785983!2d85.31202636509477!3d27.728174482783277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb191ff9204bab%3A0xa7c9222d07adf512!2sRehdon%20College%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1654246573826!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>


    </div>


</div>


@endsection('content')