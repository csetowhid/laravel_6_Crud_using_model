@extends('welcome')
@section('content')
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">

        <hr>
        <div>
        	
        		<h4>Student Name: {{$student->name}}</h4><br>
        		<h4>Student Email: {{ $student->email}}</h4><br>
        		<h4>Student Phone: {{ $student->phone}}</h4>
        </div>
      </div>
    </div>
  </div>

  <hr>
@endsection