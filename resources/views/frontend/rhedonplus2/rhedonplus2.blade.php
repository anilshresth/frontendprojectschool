@extends('frontend.homemaster')

@section('css')
<link rel="stylesheet" href="{{'css/rhedonplus2.css'}}">
@endsection('css')

@section('content')
@include('frontend.commonbanner.commonbanner')
<div class="container py-5">
<div class="row">
        <div class="col-md-8 pe-4">
            <div class="row school-intro py-3">
                <p class="school-title">REHDON (+2) NEB</p>
                <p>
                The secondary level NEB (National Examinations Board, Nepal) +2 is the medium to further education for SEE Graduates (or equivalent level) students. The two years of course system offers a comprehensive study of different subjects to meet the objectives of high school education. The course and curriculum are constantly and timely upgraded by different subject experts at the NEB and the national and international universities by keeping in mind the rapid-changing worldwide education standards. The two-year +2 curriculums are an academically challenging period. These young scholars need to have the motivation and should focus upon set goals. This results in student satisfaction and continuing interest in education. This two-year program leads to a perfect academic foundation for further studies in health & medical science, engineering, management, or humanities. Also, the +2 qualification is extensively acknowledged by international colleges and universities.
                </p>
                <p>
                Introduction to +2 at REHDON
                </p>
                <p class="rhedonplus-text">
                With the motto of “Quality Education for Quality of Life.” REHDON was incepted with the vision of research-oriented high school level education in the faculty of Science & Management in the year 2000. Our utmost goal is to provide advanced and practical knowledge to produce highly qualified scholars. It aims to create a foundation for future doctors, engineers, agriculturists, forest officials, and scientists.
                </p>
                <p class="rhedonplus-text">
                REHDON provides an excellent teaching-learning environment with the very best teaching faculties. Undoubtedly, REHDON was established by reputed and professional academicians in the field of education who are committed to delivering quality education so as to ensure academic excellence for the quality of life. We have a very good history of excellent and consistent results on the NEB final examinations. REHDON provides a sophisticated and well equipped modern laboratory to retain practical know-how to the students and strengthen their understanding. REHDON offers preparation classes for the competitive examination of medical, technical and engineering courses. A number of students have been selected for a full and partial scholarship in MBBS, BE, Ag, Veterinary, Forestry in examinations conducted by different universities and the ministries as well.
                </p>
            </div>
            <div class="row">
                <div class="col-md-12 mb-4">
                <table class="table table-striped">
                    <caption>Faculty of Science</caption>
                    <thead>
                        <tr>
                            <th>SCODE </th>
                            <th>SUBJECT</th>
                            
                        </tr>

                    </thead>
                   <tr>
                       <td>002</td>
                       <td>Compulsory English</td>
                   </tr>
                   <tr>
                       <td>110</td>
                       <td>Physics</td>
                   </tr>
                   <tr>
                       <td>112</td>
                       <td>Chemistry</td>
                   </tr>
                   <tr>
                       <td>130</td>
                       <td>Mathmatics</td>
                   </tr>        

                </table>

                </div>
                <div class="col-md-12 mb-4">
                <table class="table table-striped">
                    <caption>Faculty of Management</caption>
                    <thead>
                        <tr>
                            <th>SCODE </th>
                            <th>SUBJECT</th>
                            
                        </tr>

                    </thead>
                   <tr>
                       <td>002</td>
                       <td>Compulsory English</td>
                   </tr>
                   <tr>
                       <td>110</td>
                       <td>Physics</td>
                   </tr>
                   <tr>
                       <td>112</td>
                       <td>Chemistry</td>
                   </tr>
                   <tr>
                       <td>130</td>
                       <td>Mathmatics</td>
                   </tr>        

                </table>

                </div>


            </div>



        </div>
        <div class="col-md-4 ps-3">
            @include('frontend.commonblogs.commonblogs')


        </div>

    </div>
    <div class="row">
        <div class="col-xs-12 col-md-12 mt-4">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.647287978598!2d85.31202636509477!3d27.728174482783288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb191ff9204bab%3A0xa7c9222d07adf512!2sRehdon%20College%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1654148822907!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            
        </div>

    </div>
    </div>

@endsection