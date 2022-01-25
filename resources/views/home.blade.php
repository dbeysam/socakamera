@extends('layouts.app')

@section('content')
{{-- <div class="card">
    <div class="card-header">Dashboard</div>
</div> --}}
<div class="container">
    <div class="row justify-content-center">
        
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <br>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="image/kamera.jpg" alt="First slide" height="400" width="400">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="image/kamera2.jpg" alt="Second slide" height="400" width="400">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="image/images (1).jpg" alt="Third slide" height="400" width="400">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          </div>
        </div>
 
        </div>
    </div>
</div>
@endsection
