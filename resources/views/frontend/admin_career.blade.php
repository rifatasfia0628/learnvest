@extends('frontend.dashboardlayouts.main')
@section('main-container')

<div class="add2 ">
 <div class="row">
    <div class="col-md-6">
        <div class="admincareercard">
            <a href="new_job_offers">New Job Offers</a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="admincareercard">
            <a href="new_research_assistance">New Research Assistance</a>
        </div>
    </div>
 </div>
 <div class="row"style="margin-top:10px;">
    <div class="col-md-6">
        <div class="admincareercard">
         <a href="new_courses">New Courses</a>
        </div>
    </div>
    <div class="col-md-6">
        <div class="admincareercard">
            <a href="new_research_papers">New Research Papers</a>
        </div>
    </div>
 </div>
</div>
@endsection