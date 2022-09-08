@extends('frontend.dashboardlayouts.main')
@section('main-container')
<div class="add2">
    <table class="content-table">
        <thead>
         <tr>
                <th>Professor's Name</th>
                 <th>Institution Name</th>
                  <th>Topic</th>
                   <th>Headline</th>
                    <th>Publication's Name</th>
                     <th>Contact professor</th>
                     <th>Career</th>
                     <th>Status</th>
                     <th>Action</th>
                     <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($newresearchpaper as $newresearchpapers)
              <tr>
                <td>{{ $newresearchpapers->professorsname }}</td>
                  <td>{{ $newresearchpapers->institutionname }}</td>
                    <td>{{ $newresearchpapers->topic}}</td>  
                      <td>{{ $newresearchpapers->headline }}</td>
                        <td>{{ $newresearchpapers->publicationname }}</td>
                        <td>{{ $newresearchpapers->contactprofessor }}</td>
                        <td>{{ $newresearchpapers->viewpaper }}</td>
                        <td>{{ $newresearchpapers->status }}</td>

                        <td> 
                          <a href="{{ "/delete_research" }}/{{ $newresearchpapers->newresearchpaper_id }}"><button class="btn btn-danger">Delete</button></a></td>
                        <td>   <a href="{{ "/approve_research" }}/{{ $newresearchpapers->newresearchpaper_id }}"><button class="btn btn-success">Approve</button></a></td>
            </tr> 
@endforeach
        </tbody>
    </table>
</div>
@endsection