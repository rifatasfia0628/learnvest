@extends('frontend.dashboardlayouts.main')
@section('main-container')

<div class="add ">
    <form class="row g-3" action="{{ url('/') }}/new_books" method="post">
        @if (Session::has ('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if (Session::has ('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf
  <div class="col-md-6">
    <label for="inputsubjectname" class="form-label">Subject Name</label>
    <input type="text" name="subjectname"class="form-control" id="inputsubjectname">
    <span class="text-danger"> 
      @error('subjectname')
    
        {{ $message }}
      @enderror
    </span>
  </div>
  <div class="col-md-6">
    <label for="inputwritersname" class="form-label">Writer's Name</label>
    <input type="text"  name="writersname"class="form-control" id="inputwritersname">
    <span class="text-danger"> 
      @error('writersname')
    
        {{ $message }}
      @enderror
    </span>
  </div>
  <div class="col-md-6">
    <label for="inputbookname" class="form-label">Book Name</label>
    <input type="text"  name="bookname"class="form-control" id="inputbookname">
    <span class="text-danger"> 
      @error('bookname')
    
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
    <button type="submit" class="btn btn-primary btn1">Add</button>
</form>
			
   </div>
@endsection