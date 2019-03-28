@extends('layouts.app')
@section('content') <!-- dont forget to put endsection -->
<br>
<div class="row mt-2" id="example2" >
	<div class="col-xl-12 mb-5 mb-xl-0">
	<!-- Button trigger modal -->
	

		<div class="modal fade" id="studentmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalCenterTitle">Admin</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		       <form id="addstudent">
                {{ csrf_field() }}
                <div class="row">
                  <label>Email</label>
                  <input type="text" id="email" name="email" class="form-control" required>
                </div>
                <div class="row">
                  <label>Encountered Problem</label>
                  <input type="text" id="eproblem" name="eproblem" class="form-control" required>
                </div>
                 <div class="row">
                  <label>Before Problem</label>
                  <input type="text" id="bproblem" name="bproblem" class="form-control" required>
                </div>
                  <div class="row">
                  <label>Receiver</label>
                  <textarea type="text" id="receiver" class="form-control" name="receiver"></textarea>
                </div>
                  <div class="row">
                  <label>Ticket</label>
                  <textarea type="text" id="ticket" class="form-control" name="ticket"></textarea>
                </div>
          </div>
<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">
        <i class="fa fa-angle-left"></i>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">
        <i class="fa fa-angle-right"></i>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
		      		</form>
		    </div>
		  </div>
		</div>

		<table id="example" class="table">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>Email</th>
		      <th>Encountered Problem</th>
		      <th>Before Problem</th>
		      <th>Receiver</th>
		      <th>Ticket</th>
		      <th>Action</th>
		      </tr>
		  </thead>
		  <tbody>
		  	@foreach ($admin as $admin)
		    <tr>
		      <td>{{ $admin->id }}</td>
		      <td>{{ $admin->email}}</td>
		      <td>{{ $admin->eproblem}}</td>
		      <td>{{ $admin->bproblem}}</td>
		      <td>{{ $admin->receiver}}</td>
		      <td>{{ $admin->ticketnumber}}</td>
		     
		      <td><a button type="button"  class="btn btn-danger" a href = "delete/{{ $admin->id }}">Delete</button></a></td>	
		  	<td>
        </form>
      </div>
		  	</td>
		    </tr>

		    @endforeach
		  </tbody>
		</table>
</div>	
@endsection <!-- dont forget to put endsection -->
@section('scripts')
	<script>
		$(document).ready(function(){

			
			
			// ADD
		    $('#addstudent').on('submit', function(event) {
		       event.preventDefault(); 
		       $.ajax({
		           type: "POST",
		           url:  "{{ route('admin.store') }}",
		           data: $('#addstudent').serialize(),
		           success: function( response ) {
		           	    if( response == "record exist"){
				          toastr.error('Client Record Already Exist', 'Failed!', {timeOut: 5000, closeButton: true});
				        }else{
						toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
						}
						$('#studentmodal').modal('hide');
						$("#addstudent")[0].reset();
		           },
		           error: function(error){
		 				console.log(error)
		 			}
		       });
		    });
		   // ADD

		
		   

	</script>
@endsection
