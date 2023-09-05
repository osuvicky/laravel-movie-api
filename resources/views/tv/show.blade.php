@extends('layouts.main')

@section('content')
<!-- movie-details-area -->
<section class="movie-details-area" data-background="{{asset('')}}assets/img/bg/movie_details_bg.jpg">
                <div class="container">
                    <div class="row align-items-center position-relative">
                        <div class="col-xl-5 col-lg-6">
                            <div class="movie-details-img">
                                <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="poster">
                                <!-- <a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="popup-video"><img src="{{asset('')}}assets/img/images/play_icon.png" alt=""></a> -->
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <div class="movie-details-content">
                                <!-- <h5>New Episodes</h5> -->
                                <h2> <span>{{ $movie['name']}}</span></h2>
                                <div class="banner-meta">
                                    <ul>
                                        <li class="quality">
                                            <span>{{ $movie['original_language']}}</span>
                                            <span>{{ $movie['popularity']}}</span>
                                        </li>
                                        @foreach ($movie['genres'] as $genre)
                                        <li class="category">
                                            <a href="#">{{ $genre['name'] }}@if (!$loop->last), @endif</a>
                                        </li>
                                        @endforeach
                                        <li class="release-time">
                                            <span><i class="far fa-calendar-alt"></i> {{  \Carbon\Carbon::parse($movie['first_air_date'])->format('M d, Y')}}</span>
                                            <span><i class="far fa-clock"></i> {{ $movie['vote_average']}}</span>
                                        </li>
                                    </ul>
                                </div>
                                <p>{{ $movie['overview']}}</p>
                                <!-- <div class="movie-details-prime">
                                    <ul>
                                        <li class="share"><a href="#"><i class="fas fa-share-alt"></i> Share</a></li>
                                        <li class="streaming">
                                            <h6>Prime Video</h6>
                                            <span>Streaming Channels</span>
                                        </li>
                                        <li class="watch"><a href="https://www.youtube.com/watch?v=R2gbPxeNk2E" class="btn popup-video"><i class="fas fa-play"></i> Watch Now</a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                        <div class="movie-details-btn">
                            <a href="{{asset('')}}assets/img/poster/movie_details_img.jpg" class="download-btn" download="">Download <img src="{{asset('')}}assets/fonts/download.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- movie-details-area-end -->

            <!-- episode-area -->
            
            <!-- tv-series-area-end -->

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