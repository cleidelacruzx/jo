
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Ticketing system</title>
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/argon-dashboard" />
  <!--  Social tags      -->
  <meta name="keywords" content="dashboard, bootstrap 4 dashboard, bootstrap 4 design, bootstrap 4 system, bootstrap 4, bootstrap 4 uit kit, bootstrap 4 kit, argon, argon ui kit, creative tim, html kit, html css template, web template, bootstrap, bootstrap 4, css3 template, frontend, responsive bootstrap template, bootstrap ui kit, responsive ui kit, argon dashboard">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
 
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
  <!-- End Google Tag Manager -->
  <!-- Favicon -->
  <link href="../assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="../assets/css/argon.min.css?v=1.0.0" rel="stylesheet">
  <link href="/toastr/build/toastr.min.css" rel="stylesheet">
</head>

<body class="bg-default">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
      <!-- this is where you put your ion for the hoome -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="../index.html">
                  <img src="../assets/img/brand/blue.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <!-- Navbar items -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" >
                <i class="ni ni-planet"></i>
                <span class="nav-link-inner--text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="{{ route('login') }}">
                <i class="ni ni-key-25"></i>
                <span class="nav-link-inner--text">Login</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>

    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12">
          <div class="card bg-secondary shadow border-0" id="example3">
            <div class="card-header bg-transparent pb-5">
                 <ul class="nav nav-tabs">
                  
  <li class="nav-item">
    <a class="nav-link active" href="#">Client Register</a>
  </li>
  <li class="nav-item">
    <a  class="nav-link" href="{{route('view.index')}}">View Ticket Status</a>
  </li>
</ul>
<div class="row mt-2" id="example2">
  <div class="col-xl-12 mb-5 mb-xl-0">
 
              <form  id="addstudent">
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-4">
                <label>First Name</label>
                    <input type="text" id="first_name" name="first_name" class="form-control" required>
                     <div class="valid-feedback">
                      looks good
                    </div>
                     <div class="invalid-feedback">
                      Please input your first name
                    </div>
                  </div>

              <div class="col-md-4">
                    <label>Middle Name</label>
                    <input type="text" id="middle_name" name="middle_name" class="form-control" required>
                    <div class="valid-feedback">
                      looks good
                    </div>
                    <div class="invalid-feedback">
                      Please input your first name
                    </div>
                  </div>
              <div class="col-md-4">
                    <label>Last Name</label>
                    <input type="text" id="last_name" name="last_name" class="form-control" required>
                    <div class="valid-feedback">
                      looks good
                    </div>
                    <div class="invalid-feedback">
                      Please input your first name
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label>Facility</label>
                  <input type="text" id="facility" name="facility" class="form-control" required>
                  <div class="valid-feedback">
                      looks good
                    </div>
                </div>
                <div class="row">
                  <label>Designation</label>
                  <input type="text" id="designation" name="designation" class="form-control" required>
                  <div class="valid-feedback">
                      looks good
                    </div>
                    <div class="invalid-feedback">
                      Please input your first name
                    </div>
                </div>
                 <div class="row">
                  <label>Contact</label>
                  <input type="text" id="contact" name="contact" class="form-control" required>
                  <div class="valid-feedback">
                      looks good
                    </div>
                    <div class="invalid-feedback">
                      Please input your first name
                    </div>
                   
                    
                     <div class="col-md-4">
                        {{ Form::label('Categories','Categories') }}
                        @if(isset($client))
                        {{ Form::select('categories', $categories,'NOTAP', ['class' => 'form-control','id' => 'categories','name' => 'categories']) }}
                        @else
                        <select type="text" id="categories" name="categories" class="form-control">
                            <option value="" disabled selected>Choose your option</option>
                              @foreach(App\categories::get() as $categories)
                                  <option value="{{ $categories['id'] }}">{{ $categories['categories'] }}</option>
                              @endforeach
                        </select>
                        @endif
                   </div>
                </div>
                 <div class="row">
                  <label>Concern</label>
                  <textarea type="text" id="concern" name="concern" class="form-control"></textarea>
                </div>
                <button type="button" id="save"   onclick="saveData()"   class="btn btn-primary">SAVE</button>
          </form>

          </div>
        </div>
      </div>
    </div>


    <br>
    <br>
    
</div>       

  <div id="alertcontainer" class="alert alert-success" role="alert">
<div class="pull-right"><span aria-hidden="true" class="pull-right">&times;</span>
</div>
    <button onclick="reload()" type="button" class="close" data-dismiss="alert" aria-label="Close">
              
  <h4 class="alert-heading">Well done!</h4>
              
  <div id="ticketnumber"></div>
  </button>
</div>
</div>


  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.min.js?v=1.0.0"></script>
  <script src="/toastr/toastr.min.js"></script>


  <script>    

    $(document). ready(function(){
    $("#alertcontainer"). hide();

    });
      $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });

      //store
      function saveData(){

          var first_name = $('#first_name').val();
          var middle_name = $('#middle_name').val();
          var last_name = $('#last_name').val();
          var facility = $('#facility').val();
          var designation = $('#designation').val();
          var contact = $('#contact').val();
          var categories = $('#categories').val();
          var concern = $('#concern').val();
          var ticket = $('#ticketnumber').val();

          $.ajax({
            type: "POST",
            url : "{{ route('client.store') }}",
            data: $('#addstudent').serialize(),
            success:function(e){
              toastr.success('Post Created Successfully.', 'Success Alert', {timeOut: 5000});
            

              $("#example3"). hide(500);
              $("#ticketnumber"). html('Your ticket number is ' + e.ticketnumber);
              $("#alertcontainer"). show();
              


    
              },
              error: function(error){
              console.log(error)
              }
          })
          
      }
function reload(){
  
}

    
      </script>


</body>

</html>