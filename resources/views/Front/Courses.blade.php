@extends('Front/Comm');
@section('commman');

<main id="main" data-aos="fade-in">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">
    <h2>Courses</h2>
    <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Courses Section ======= -->
<section id="courses" class="courses">
  <div class="container" data-aos="fade-up">

 

    <div class="row" data-aos="zoom-in" data-aos-delay="100">
    @foreach($userss as $value)

      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="course-item">
          <img src="{{asset('front/img/course-1.jpg')}}" class="img-fluid" alt="...">
          <div class="course-content">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4>{{$value->title}}</h4>
              <p class="price">$169</p>
            </div>

            <h3><a href="course-details.html">Website Design</a></h3>
            <p>{{$value->description}}</p>
            <div class="trainer d-flex justify-content-between align-items-center">
              <div class="trainer-profile d-flex align-items-center">
                <img src="{{asset('front/img/trainers/trainer-1.jpg')}}" class="img-fluid" alt="">
                <span>Antonio</span>
              </div>
            </div>
          </div>
        </div>
       
      </div> <!-- End Course Item-->
      @endforeach

      


    </div>

  </div>
</section><!-- End Courses Section -->

</main><!-- End #main -->
@endsection