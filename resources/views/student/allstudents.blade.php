@extends('welcome')
@section('content')
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-10 mx-auto">
        <p>
        <a href="{{url('student/create')}}" class="btn btn-danger">Add Student</a>
        
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
	        		<a href="{{url('student/'.$row->id.'/edit')}}" class="btn btn-sm btn-info">Edit</a>

	        		<form action="{{url('student/'.$row->id)}}" method="POST">
	        			@csrf
	        			@method('DELETE')
	        			<button class="btn btn-sm btn-danger" type="submit">Delete</button>
	        		</form>

	        		<a href="{{url('student/'.$row->id)}}" class="btn btn-sm btn-success">View</a>
	        	</td>
	        	</tr>
	        	@endforeach
	        </table>
      </div>
    </div>
  </div>

  <hr>
@endsection