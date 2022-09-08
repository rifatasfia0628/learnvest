@extends('frontend.dashboardlayouts.main')
@section('main-container')
<div class="add2">
    <table class="content-table">
        <thead>
         <tr>
                <th>Professor's Name</th>
                 <th>Section</th>
                  <th>Semester</th>
                  <th>Status</th>
                  <th>Action</th>
                  <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($newguide as $newguides)
              <tr>
                <td>{{ $newguides->professorsname }}</td>
                  <td>{{ $newguides->section}}</td>
                    <td>{{ $newguides->semester}}</td>  
                    <td>{{ $newguides->status}}</td>  
                    <td> 
                      <a href="{{ "/delete_guide" }}/{{ $newguides->newguide_id }}"><button class="btn btn-danger">Delete</button></a></td>
                    <td> <a href="{{ "/approve_guide" }}/{{ $newguides->newguide_id }}"><button class="btn btn-success">Approve</button></a></td>
                     
            </tr> 
@endforeach
        </tbody>
    </table>
</div>
@endsection