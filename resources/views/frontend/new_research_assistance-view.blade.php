@extends('frontend.dashboardlayouts.main')
@section('main-container')
<div class="add2 ">
    <table class="content-table">
        <thead>
          <tr>
            <th>Professor's Name</th>
             <th>Research Topic</th>
              <th>Research Boundaries</th>
                 <th>Contact professor</th>
                 <th>Status</th>
                 <th>Action</th>
                 <th>Action</th>
               
        </tr>
    </thead>
    <tbody>
        @foreach($newresearchassistance as $newreassist)
          <tr>
            <td>{{  $newreassist->professorsname}}</td>
                <td>{{  $newreassist->researchtopic}}</td>  
                  <td>{{  $newreassist->researchboundaries}}</td>
                   
                    <td>{{  $newreassist->contactprofessor}}</td>
                    <td>{{  $newreassist->status}}</td>
                   
                    <td> 
                      <a href="{{ "/delete_assistance" }}/{{ $newreassist->newassistance_id }}"><button class="btn btn-danger">Delete</button></a></td>
                      <td><a href="{{ "/approve_assistance" }}/{{ $newreassist->newassistance_id }}"><button class="btn btn-success">Approve</button></a></td>
                    
        </tr> 
       @endforeach 
    </tbody>
    </table>
</div>
@endsection