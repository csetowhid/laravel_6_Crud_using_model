@extends('welcome')
@section('content')
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-10 mx-auto">
        <p>
        <a href="{{route('student')}}" class="btn btn-danger">Add Student</a>
        
        </p>
        <hr>
	        <table class="table table-responsive">
	        	<tr>
	        		<th>SL</th>
	        		<th>Student Name</th>
	        		<th>Student Email</th>
	        		<th>Student Phone</th>
	        		<th>Action</th>
	        	</tr>
	        	@foreach($student as $row)
	        	<tr>
	        		<td>{{$row->id}}</td>
	        		<td>{{$row->name}}</td>
	        		<td>{{$row->email}}</td>
	        		<td>{{$row->phone}}</td>
	        		
	        		<td>
	        		<a href="{{url('editstudent'.$row->id)}}" class="btn btn-sm btn-info">Edit</a>
	        		<a href="{{url('deletestudent'.$row->id)}}" class="btn btn-sm btn-danger" id="delete">Delete</a>
	        		<a href="{{url('viewstudent'.$row->id)}}" class="btn btn-sm btn-success">View</a>
	        	</td>
	        	</tr>
	        	@endforeach
	        </table>
      </div>
    </div>
  </div>

  <hr>
@endsection