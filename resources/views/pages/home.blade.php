@extends('layouts.app')

@section('title')
    TRIPS
@endsection

@section('content')
        {{-- header --}}
        <header class="text-center">
            <h1>
              Pulang Lebih Mudah
              <br />
              dan Lebih Cepat
            </h1>
            <p class="mt-3">
              You will see beautiful
              <br />
              this TRIP you never see before
            </p>
            <a href="#popular" class="btn btn-get-started px-4 mt-4">
              Get Started
            </a>
          </header>
      
          <main>
            <div class="container">
              <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                  <h2>20K</h2>
                  <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                  <h2>34</h2>
                  <p>Province</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                  <h2>3K</h2>
                  <p>Transport</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                  <h2>12</h2>
                  <p>Airlines</p>
                </div>
              </section>
            </div>
      
            <section class="section-popular" id="popular">
              <div class="container">
                <div class="row">
                  <div class="col text-center section-popular-heading">
                     <h2>Paket Terpopuler</h2>
                     <p>Something that you never try
                       <br/>
                      before in this world</p>
                  </div>
                </div>
              </div>
            </section>
      
            <section class="section-popular-content" id="popularContent">
              <div class="container">
                <div class="section-popular-trip row justify-content-center">
                  
                  @foreach ($items as $item)
                  <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-trip text-center d-flex flex-column"
                    style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');">
                      <div class="travel-country">{{ $item->location }}</div>
                      <div class="travel-location">{{ $item->title }}</div>
                      <div class="trip-button mt-auto">
                        <a href="{{ route('details', $item->slug) }}" class="btn btn-trip-details px-4">View Details</a>
                      </div>
                    </div>
                  </div>
                  @endforeach
      
                </div>
              </div>
            </section>
      
            <section class="section-networks" id="networks">
              <div class="container">
                <div class="row">
                  <div class="col-md-4">
                    <h2>Our networks</h2>
                    <p>Companies are trusted us
                      <br/>
                      more than just a trip</p>
                  </div>
                  <div class="col-md-8 text-center">
                    <img src="{{ url('frontend/image/logos_partner.png') }}" alt="Logos Partner" class="img-partner">
                  </div>
                </div>
              </div>
            </section>
      
            <section class="section-testimonial-heading" id="testimonialHeading">
              <div class="container">
                <div class="row">
                  <div class="col text-center">
                    <h2>They Are Loving Us</h2>
                    <p>Moments were giving them 
                      <br/>
                      the best experience</p>
                  </div>
                </div>
              </div>
            </section>
      
            <section class="section-testimonial-content" id="testimonialContent">
              <div class="container">
                <div class="section-popular-trip row justify-content-center">
                  <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                      <div class="testimonial-content">
                        <img src="{{ url('frontend/image/testi1.jpg') }}" alt="User" class="mb-4 rounded-circle">
                        <h3 class="mb4">Abdul Halim</h3>
                        <p class="testimonial">“The taxi is very cool and
                          very nice a driver, so easy
                          to order the taxi“</p>
                      </div>
                      <hr>
                      <p class="trip-to mt-2">Use Taxi</p>
                    </div>
                  </div>
      
                  <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                      <div class="testimonial-content">
                        <img src="{{ url('frontend/image/testi3.jpg') }}" alt="User" class="mb-4 rounded-circle">
                        <h3 class="mb4">Hajime Isayama</h3>
                        <p class="testimonial">“ I never late to travel
                          because i order train
                          ticket in this website“</p>
                      </div>
                      <hr>
                      <p class="trip-to mt-2">Use Train</p>
                    </div>
                  </div>
      
                  <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                      <div class="testimonial-content">
                        <img src="{{ url('frontend/image/teseti2.jpg') }}" alt="User" class="mb-4 rounded-circle">
                        <h3 class="mb4">Yukinoshita</h3>
                        <p class="testimonial">"The plane is very nice and facilities available to use,
                          i like this one."</p>
                      </div>
                      <hr>
                      <p class="trip-to mt-2">Use Plane</p>
                    </div>
                  </div>
      
                </div>
      
                <div class="row">
                  <div class="col-12 text-center">
                    <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">I Need Help</a>
                    <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">Get Started</a>
                  </div>
                </div>
              </div>
            </section>
      
          </main>
@endsection