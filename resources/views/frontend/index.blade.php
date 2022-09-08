@extends('frontend.layouts.main')
@section('main-container')
    <div class="search">
        <div class="row">
            <div class="col-md-6">
                <div class=" card1">
                    <div class="cardbody">
                        <p class="card-text" style="font-size:2rem; color:#89ecda;">Get Your Information</p>
                        <br>
                        <p class="card-text">Your Roll</p>
                        <div class="search-box">
                            <input class="search-text"type="text" name="" placeholder="Your Roll">
                            <a class="search-btn" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                        </div>
                        <br>
                        <p class="card-text">Semester</p>
                        <div class="search-box">
                            <input class="search-text"type="text" name="" placeholder="Semester">
                            <a class="search-btn" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card2">
                    <div class="cardbody">
                        <p class="card-text" style="font-size:2rem; color:#89ecda;">Search Anything</p>
                        <div class="search-box box2">
                            <input class="search-text"type="text" name="" placeholder="Search Anything">
                            <a class="search-btn" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
</div>

@endsection