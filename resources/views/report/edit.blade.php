@extends('layouts.app')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Report</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('report.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('report.update',$report->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="text" name="email" value="{{ $report->text }}" class="form-control" placeholder="Email">
                </div>
            </div>
           
           <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Category:</strong>
                    <input type="text" name="category" value="{{ $report->category }}" class="form-control" placeholder="Category">
                </div>
            </div>
           <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Sub Category:</strong>
                    <input type="text" name="sub_category" value="{{ $report->sub_category }}" class="form-control" placeholder="Sub
Category">
                </div>
            </div>
               <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Receiver:</strong>
                    <input type="text" name="receiver" value="{{ $report->receiver }}" class="form-control" placeholder="Receiver">
                </div>
            </div>
               <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Level:</strong>
                    <input type="text" name="level" value="{{ $report->level }}" class="form-control" placeholder="Level">
                </div>
            </div>
               <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Status:</strong>
                    <input type="text" name="status" value="{{ $report->status }}" class="form-control" placeholder="Status">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection