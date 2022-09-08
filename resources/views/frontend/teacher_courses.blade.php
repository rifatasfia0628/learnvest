@extends('frontend.teacherdashboardlayouts.main')
@section('main-container')
<div class="add">

    <form class="row g-3" action="{{ url('/') }}/teacher_courses" method="post">
        @if (Session::has ('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if (Session::has ('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf
  <div class="col-md-6">
    <label for="inputcoursename" class="form-label">Course Name</label>
    <input type="text" name="coursename"class="form-control" id="inputcoursename">
    <span class="text-danger"> 
      @error('coursename')
    
        {{ $message }}
      @enderror
    </span>
  </div>
  <div class="col-md-6">
    <label for="inputopic" class="form-label">Topic</label>
    <input type="text"  name="topic"class="form-control" id="inputopic">
    <span class="text-danger"> 
      @error('topic')
    
        {{ $message }}
      @enderror
    </span>
  </div>
   <div class="col-md-6">
    <label for="inputinstitutionname" class="form-label">Institution Name</label>
    <input type="text" name="institutionname" class="form-control" id="inputinstitutionname">
    <span class="text-danger"> 
      @error('institutionname')
    
        {{ $message }}
      @enderror
    </span>
  </div>
<div class="col-md-6">
    <label for="inputviewcourse" class="form-label">View Course</label>
    <input type="email"  name="viewcourse" class="form-control" id="inputviewcourse">
    <span class="text-danger"> 
      @error('viewcourse')
    
        {{ $message }}
      @enderror
    </span>
</div> 
<div class="col-md-6 sec">
    <label for="inputCareer" class="form-label">Career Field</label>
 <select class="form-select"  name="career" aria-label="Default select example">
<option selected>Select Your Career</option>
<option value="Android">Android</option>
<option value="Web Development">Web Development</option>
<option value="Networking">Networking</option>
<option value="Hardware">Hardware</option>
<option value="Artificial Intelligence">Artificial Intelligence</option>
<option value="IOT">IOT</option>
</select>
<span class="text-danger"> 
@error('career')

  {{ $message }}
@enderror
</span> </div>
 
<div class="col-md-6 sec">
    <button type="submit" class="btn btn-primary btn1">Add</button></div>
</form>
			

		</div>
@endsection