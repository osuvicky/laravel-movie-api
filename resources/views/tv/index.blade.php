@extends('layouts.main')

@section('content')
<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg" data-background="{{asset('')}}assets/img/bg/breadcrumb_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2 class="title">Tv <span>Show</span></h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">tv show</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- movie-area -->
            <section class="movie-area movie-bg" data-background="{{asset('')}}assets/img/bg/movie_bg.jpg">
                <div class="container">
                    <div class="row align-items-end mb-60">
                        <div class="col-lg-6">
                            <div class="section-title text-center text-lg-left">
                                <span class="sub-title">ONLINE STREAMING</span>
                                <h2 class="title">New Tv Show</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="movie-page-meta">
                                <div class="tr-movie-menu-active text-center">
                                    <button class="active" data-filter="*">Animation</button>
                                    <button class="" data-filter=".cat-one">Movies</button>
                                    <button class="" data-filter=".cat-two">Romantic</button>
                                </div>
                                <form action="#" class="movie-filter-form">
                                    <select class="custom-select">
                                        <option selected>English</option>
                                        <option value="1">Blueray</option>
                                        <option value="2">4k Movie</option>
                                        <option value="3">Hd Movie</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row tr-movie-active">
                        
                        @foreach($popularTV as $popularMovie)
                        <div class="col-xl-3 col-lg-4 col-sm-6 grid-item grid-sizer cat-one">
                            <div class="movie-item movie-item-three mb-50">
                                <div class="movie-poster">
                                    <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$popularMovie['poster_path'] }}" alt="poster">
                                    <ul class="overlay-btn">
                                        <li class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </li>
                                        <!-- <li><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video btn">Watch Now</a></li> -->
                                        <li><a href="{{ route('tv.show', $popularMovie['id'])}}" class="btn">Details</a></li>
                                    </ul>
                                </div>
                                <div class="movie-content">
                                    <div class="top">
                                        <h5 class="title"><a href="{{ route('tv.show', $popularMovie['id'])}}">{{ $popularMovie['name']}}</a></h5>
                                        <span class="date">{{  \Carbon\Carbon::parse($popularMovie['first_air_date'])->format('M d, Y')}}</span>
                                    </div>
                                    <div class="bottom">
                                        <ul>
                                            <li><span class="quality">{{ $popularMovie['original_language']}}</span></li>
                                            <li>
                                                <span class="duration"><i class="far fa-clock"></i>{{ $popularMovie['popularity']}}</span>
                                                <span class="rating"><i class="fas fa-thumbs-up"></i> {{ $popularMovie['vote_average'] * 10 .'%' }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- <div class="row">
                        <div class="col-12">
                            <div class="pagination-wrap mt-30">
                                <nav>
                                    <ul>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div> -->
                </div>
            </section>
            <!-- movie-area-end -->

            <!-- newsletter-area -->
            <section class="newsletter-area newsletter-bg" data-background="{{asset('')}}assets/img/bg/newsletter_bg.jpg">
                <div class="container">
                    <div class="newsletter-inner-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="newsletter-content">
                                    <h4>Trial Start First 30 Days.</h4>
                                    <p>Enter your email to create or restart your membership.</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <form action="#" class="newsletter-form">
                                    <input type="email" required placeholder="Enter your email">
                                    <button class="btn">get started</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- newsletter-area-end -->

@endsection