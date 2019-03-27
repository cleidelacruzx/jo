@extends('layouts.app')
@section('content')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style>
.onoffswitch2 {
    position: relative; width: 90px;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}

.onoffswitch2-checkbox {
    display: none;
}

.onoffswitch2-label {
    display: block; overflow: hidden; cursor: pointer;
    border: 2px solid #999999; border-radius: 5px;
}

.onoffswitch2-inner {
    display: block; width: 200%; margin-left: -100%;
    -moz-transition: margin 0.3s ease-in 0s; -webkit-transition: margin 0.3s ease-in 0s;
    -o-transition: margin 0.3s ease-in 0s; transition: margin 0.3s ease-in 0s;
}

.onoffswitch2-inner:before, .onoffswitch2-inner:after {
    display: block; float: left; width: 50%; height: 30px; padding: 0; line-height: 30px;
    font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
    -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
}

.onoffswitch2-inner:before {
    content: "ACCEPT";
    padding-left: 10px;
    background-color: #2FCCFF; color: #FFFFFF;
}

.onoffswitch2-inner:after {
    content: "DECLINE";
    padding-right: 10px;
    background-color: #EEEEEE; color: #999999;
    text-align: right;
}

.onoffswitch2-switch {
    display: block; width: 18px; margin: 0px;
    background: #FFFFFF;
    border: 2px solid #999999; border-radius: 5px;
    position: absolute; top: 0; bottom: 0; right: 68px;
    -moz-transition: all 0.3s ease-in 0s; -webkit-transition: all 0.3s ease-in 0s;
    -o-transition: all 0.3s ease-in 0s; transition: all 0.3s ease-in 0s; 
    background-image: -moz-linear-gradient(center top, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0) 100%);
    background-image: -webkit-linear-gradient(center top, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0) 100%);
    background-image: -o-linear-gradient(center top, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0) 100%);
    background-image: linear-gradient(center top, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0) 100%);
}

.onoffswitch2-checkbox:checked + .onoffswitch2-label .onoffswitch2-inner {
    margin-left: 0;
}

.onoffswitch2-checkbox:checked + .onoffswitch2-label .onoffswitch2-switch {
    right: 0px; 
}
</style>

<div class="row mt-2" id="example2" style="display:none">
  <div class="col-xl-12 mb-5 mb-xl-0">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0 text-primary">CLIENT APPROVAL</h3>
          </div>
        </div>
      </div>

        <div class="card shadow border-0">
          <div class="card-body">  
            <table id="example" class="table-striped">
              <thead>
                <tr>
                  <th>Last Name</th>
                  <th>First Name</th>
                  <th>Email</th>
                  <th>Username</th>
                  <th>Province</th>
                  <th>Municipality</th>
                  <th>Facility</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($clients as $client)
                <tr>
                  <td>{{ $client->lname }}</td>
                  <td>{{ $client->fname }}</td>
                  <td>{{ $client->email }}</td>
                  <td>{{ $client->username }}</td>
                  <td>{{ $client->province }}</td>
                  <td>{{ $client->municipality }}</td>
                  <td>{{ $client->facility }}</td>
                  <td>
                      <div class="onoffswitch2">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch2-checkbox" id="myonoffswitch2" checked>
                        <label class="onoffswitch2-label" for="myonoffswitch2">
                            <span class="onoffswitch2-inner"></span>
                            <span class="onoffswitch2-switch"></span>
                        </label>
                      </div>
                  </td>

                </tr>

              @endforeach 
              </tbody>
            </table>
          </div>  
        </div>
  </div>
</div>  

@endsection