@extends('frontend.dashboardlayouts.main')
@section('main-container')
<div class="add2">
 
    <table class="content-table">
        <thead>
         <tr>
                <th>Company Name</th>
                 <th>Position</th>
                  <th>Requirements</th>
                   <th>Responsibilities</th>
                    <th>Experience Needed</th>
                     <th>Salary range</th>
                     <th>Drop Your CV</th>
                     <th>Status</th>
                     <th>Action</th>
                     <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($newjob as $newjobs)
        <tr>
            <th>{{ $newjobs->companyname }}</th>
            <th>{{ $newjobs->position }}</th>
            <th>{{ $newjobs->requirments }}</th>
            <th>{{ $newjobs->responsibilities }}</th>
            <th>{{ $newjobs->experienceneeded }}</th>
            <th>{{ $newjobs->salaryrange }}</th>
            <th>{{ $newjobs->dropyourcv }}</th>
            <th>{{ $newjobs->status}}</th>
            <td>  <a href="{{ "/delete_job" }}/{{ $newjobs->newjob_id }}"><button class="btn btn-danger">Delete</button></a></td>
            <td>  <a href="{{ "/approve_job" }}/{{ $newjobs->newjob_id }}"><button class="btn btn-success">Approve</button></a></td>
        </tr>
            @endforeach
        </tbody>
    </table>
       </div>
</div>
@endsection