@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('report.create') }}"> Create New Records</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Email</th>
            <th>Category</th>
            <th>Sub Category</th>
            <th>Receiver</th>
            <th>Level</th>
            <th>Status</th>
         
            <th width="280px">Action</th>
        </tr>
        @foreach ($reports as $report)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $report->email }}</td>
            <td>{{ $report->category }}</td>
            <td>{{ $report->sub_category }}</td>
            <td>{{ $report->receiver }}</td>
            <td>{{ $report->level }}</td>
            <td>{{ $report->status }}</td>
           
            <td>
                <form action="{{ route('report.destroy',$report->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('report.show',$report->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('report.edit',$report->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $reports->links() !!}
      
@endsection