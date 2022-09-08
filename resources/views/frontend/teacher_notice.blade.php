@extends('frontend.teacherdashboardlayouts.main')
@section('main-container')
<div class="add">

    <form class="row g-3" action="{{ url('/') }}/add_notice" method="post" 
    enctype="multipart/form-data">
        @if (Session::has ('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if (Session::has ('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf
     
  <div class="col-md-12">
    <label for="notice_title" class="form-label">Notice</label>
    <input type="text" name="notice"class="form-control" id="inputnoticetitle">
    <span class="text-danger"> 
      @error('title')    
        {{ $message }}
      @enderror
    </span>
</div>

 
  <div class="col-md-12">
    <label for="noticearea" class="form-label">Description</label>
    <input type="text"  name="description"class="form-control" id="inputnotice">
    <span class="text-danger"> 
      @error('notice')
    
        {{ $message }}
      @enderror
    </span>
  </div>
<div class="col-md-6" style="margin-top:30px;">
    <button type="submit" class="btn btn-primary ">Add Notice</button></div>
</form>
			

		</div>
@endsection