@extends('frontend.layouts.main')
@section('main-container')
  <div class="headline">
        <h1>Guide Teachers</h1>
    </div>
    <div class="guidecard">
        <div class="row">
            <div class="col-md-6">
                <div class="card card3">
                    <img src="#" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card3">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card card3" style=" top:20%; left:45%" >
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="headline2">
        <h1>Courses & Books</h1>
    </div>
    <div class="booklist">
        <div class="row">
            <div class="col-md-6">
                <div class="card card5">
                    <div class="card-body">
                        This is some text within a card body.
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card5">
                    <div class="card-body">
                        This is some text within a card body.
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row" >
            <div class="col-md-6">
                <div class="card card5">
                    <div class="card-body">
                        This is some text within a card body.
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card5">
                    <div class="card-body">
                        This is some text within a card body.
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card card5">
                    <div class="card-body">
                        This is some text within a card body.
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card5">
                    <div class="card-body">
                        This is some text within a card body.
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="student">
        <h1 style="color:#ffe5a9;">Student Information</h1>
        <div class="row row2">
            <div class=" clo-md-4">
                <a class="btn btn-primary btn2" href="3rd_semester-A" role="button">A </a>
            </div>
            <div class=" clo-md-4">
                <a class="btn btn-primary btn2" href="3rd_semester-B" role="button">B</a>
            </div>
            <div class=" clo-md-4">
                <a class="btn btn-primary btn2" href="3rd_semester-C" role="button">C</a>
            </div>
        </div>
    </div>
    @endsection
