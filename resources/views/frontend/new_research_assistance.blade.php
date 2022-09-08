@extends('frontend.dashboardlayouts.main')
@section('main-container')
<div class="add">

    <form class="row g-3" action="{{ url('/') }}/new_research_assistance" method="post">
        @if (Session::has ('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if (Session::has ('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf
  <div class="col-md-6">
    <label for="inputprofessorsname" class="form-label">Professor's Name</label>
    <input type="text" name="professorsname"class="form-control" id="inputprofessorsname">
    <span class="text-danger"> 
      @error('professorsname')
    
        {{ $message }}
      @enderror
    </span>
  </div>
  <div class="col-md-6">
    <label for="inputresearchtopic" class="form-label">Research Topic</label>
    <input type="text"  name="researchtopic"class="form-control" id="inputresearchtopic">
    <span class="text-danger"> 
      @error('researchtopic')
    
        {{ $message }}
      @enderror
    </span>
  </div>
   <div class="col-md-6">
    <label for="inputresearchboundaries" class="form-label">Research Boundaries</label>
    <input type="text" name="researchboundaries" class="form-control" id="inputresearchboundaries">
    <span class="text-danger"> 
      @error('researchboundaries')
    
        {{ $message }}
      @enderror
    </span>
  </div> 
<div class="col-md-6">
    <label for="inputcontactprofessor" class="form-label">Contact Professor</label>
    <input type="email"  name="contactprofessor" class="form-control" id="inputcontactprofessor">
    <span class="text-danger"> 
      @error('contactprofessor')
    
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