@extends('frontend.dashboardlayouts.main')
@section('main-container')
<div class="add ">
    <form class="row g-3" action="{{ url('/') }}/new_guideteacher" method="post">
        @if (Session::has ('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if (Session::has ('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf
  <div class="col-md-6">
    <label for="inputprofessorsname" class="form-label">Professors Name</label>
    <input type="text" name="professorsname"class="form-control" id="inputprofessorsname">
    <span class="text-danger"> 
      @error('professorsname')
    
        {{ $message }}
      @enderror
    </span>
  </div>
    <div class="col-md-6 sec">
      <label for="inputsemester" class="form-label">Select Your Semester</label>
   <select class="form-select"  name="semester" aria-label="Default select example">
  <option selected>Select Semester</option>
  <option value="1st">1st</option>
  <option value="2nd">2nd</option>
  <option value="3rd">3rd</option>
  <option value="4th">4th</option>
  <option value="5th">5th</option>
  <option value="6th">6th</option>
  <option value="7th">7th</option>
  <option value="8th">8th</option>
</select> <span class="text-danger"> 
  @error('semester')

    {{ $message }}
  @enderror
</span>
  </div>
  <div class="col-md-6 sec">
    <label for="inputsection" class="form-label">Select Your section</label>
 <select class="form-select"  name="section" aria-label="Default select example">
<option selected>Select Your Section</option>
<option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
</select>
<span class="text-danger"> 
@error('section')

  {{ $message }}
@enderror
</span></div>
    <button type="submit" class="btn btn-primary btn1">Add</button>
</form>
			
   </div>
@endsection