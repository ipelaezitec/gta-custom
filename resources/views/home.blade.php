@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-7">
            <div class="row mt-4 ">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                         <ol class="carousel-indicators">
                            <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                            <li data-target="#carouselExampleControls" data-slide-to="2"></li>
                            <li data-target="#carouselExampleControls" data-slide-to="3"></li>
                            <li data-target="#carouselExampleControls" data-slide-to="4"></li>
                        </ol>
                        <div class="carousel-inner">
                            @if (!isset($custom))
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="https://d1muf25xaso8hp.cloudfront.net/https%3A%2F%2Fs3.amazonaws.com%2Fappforest_uf%2Ff1535256396516x634409788530319900%2Flarge.20180728020246_1.jpg.8250ed43c66c1f6282da4b76d31a1c58.jpg?w=768&h=431&auto=compress&fit=max" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://d1muf25xaso8hp.cloudfront.net/https%3A%2F%2Fs3.amazonaws.com%2Fappforest_uf%2Ff1535256489897x761541015002876500%2Flarge.20180727041442_1.jpg.b54c3468fff407b67acb40f0872fe79b.jpg?w=768&h=431&auto=compress&fit=max" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://d1muf25xaso8hp.cloudfront.net/https%3A%2F%2Fs3.amazonaws.com%2Fappforest_uf%2Ff1535256600713x531589473830536000%2F20180724000142_1.jpg?w=768&h=431&auto=compress&fit=max" alt="Four slide">
                                </div>
                            @else
                                @foreach ($images as $image)
                                    @if ($loop->first)
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="{{ $image->url }}" alt="error" style="width:768px; height: 431px;">
                                        </div>
                                    @else
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="{{ $image->url }}" alt="error" style="width:768px; height: 431px;">
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>          
            </div>
           
            <div class="row mt-4 video-row">
                <div class="embed-responsive embed-responsive-16by9">
                    @if (!isset($custom))
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/fB8TyLTD7EE"allowfullscreen></iframe>
                    @else
                        <iframe class="embed-responsive-item" src="{{ $custom->videourl }}"allowfullscreen></iframe>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="custom-card p-4 mt-4">
                <div class="font-raleway">
                    @if (!isset($custom))
                        Welcome !
                    @else
                    {!!$custom->hometext!!}
                    @endif   
                    @guest
                    @else    
                        <a href="{{ route('app') }}">    
                            <button class="mx-auto btn appli-button">
                                Apply today!
                            </button>
                        </a>
                    @endguest
                    
            </div>
        </div>
    
    </div>    
</div>
@include('layouts.login')

@endsection

{{-- <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                You are logged in!
            </div>
        </div>
    </div>
</div> --}}