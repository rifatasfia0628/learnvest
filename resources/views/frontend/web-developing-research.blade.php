@extends('frontend.layouts.main')
@section('main-container')
   <div class="std-info">
       <div class="col-md-auto">
 
<h5 style="padding-left:40% ;padding-top:25px;padding-bottom:25px;"></h5>
<table class="content-table">
    <thead>
     <tr>
            <th>Professor's Name</th>
             <th>Institution Name</th>
              <th>Topic</th>
               <th>Headline</th>
                <th>Publication's Name</th>
                 <th>Contact professor</th>
                 <th>View Paper</th>
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

                
    </tr> 
@endforeach

      
    </tbody>
</table>
@endsection
                  