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
              <a class="nav-link nav-link-icon">
                <span class="nav-link-inner--text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item" id="login"> 
              <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
              <a class="nav-link nav-link-icon" >
                <span class="nav-link-inner--text">Login</span>
                </div>
              @guest
              @else
              <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>{{ __('Logout') }}</span>
              </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              @endguest
            </div>
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
<!DOCTYPE html>
<html>
<style type="text/css">

body { 
    background: white; 
    overflow-x:hidden;
}   

div.loginbox{
    position: absolute;
    top: 95%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 80%;
    padding: 39px;
    background-color:white;
    box-shadow: 0 15px 25px rgba(0,0,0,.5)
    border-radius:50px;
    border: 6px solid #00ace6;

}
.logo{
    width: 101.1%;
    height: 130px;
    overflow: hidden;
    position:absolute;
    top: calc(-140px/2);
    left:calc(5.5% - 65px);
}


/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.collapsible {
  background-color: #f2f2f2;
  color: black;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border-bottom-color: white;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #cccccc;
}

.collapsible:after {
  content: '\002B';
  color: white;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f2f2f2;
}

    /* Page content */

.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #00ace6;
  border: none;
  color: white;
  text-align: center;
  font-size: 15px;
  padding: 20px;
  width: 300px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

</style>
<body>


    <tr>
        <td>
            <div id="mainlevel">
            <center>
            <table width="100%" border="0" cellpadding="5" cellspacing="0">
            <tbody><tr>
                <td>
                    <center>
                    <div id="mainarea">
                    <center>
                    <table width="100%" border="0" cellpadding="5" cellspacing="5">
                    <tbody><tr>
                        <td>
                            <div id="maindivarea">
                            <center>
                                <div id="statusbox">
                                    <font color="red" face="arial" size="+1">
                                    <b>
                                        
                                    </b>
                                </font>
                                </div>
                                <br>
                                
                                <div class="loginbox">
                                <img src="img/headerpic.png" class="logo">
                                <br>

                                <h2 style="color:black">Frequently Asked Questions</h2>
                                <button class="collapsible">E-Claims</button>
                                <div class="content">
                                <button class="collapsible">Open Section 1</button>
                                <div class="content">
                                  <p>content</p>
                                </div>
                                <button class="collapsible">Open Section 2</button>
                                <div class="content">
                                  <p>content</p>
                                </div>
                                <button class="collapsible">Open Section 3</button>
                                <div class="content">
                                  <p>content</p>
                                </div>
                                </div>

                                <button class="collapsible">PCB</button>
                                <div class="content">
                                <button class="collapsible">Open Section 1</button>
                                <div class="content">
                                  <p>content</p>
                                </div>
                                <button class="collapsible">Open Section 2</button>
                                <div class="content">
                                  <p>content</p>
                                </div>
                                <button class="collapsible">Open Section 3</button>
                                <div class="content">
                                  <p>content</p>
                                </div>
                                </div>

                                <button class="collapsible">Technical</button>
                                <div class="content">
                                <button class="collapsible">Open Section 1</button>
                                <div class="content">
                                  <p>content</p>
                                </div>
                                <button class="collapsible">Open Section 2</button>
                                <div class="content">
                                  <p>content</p>
                                </div>
                                <button class="collapsible">Open Section 3</button>
                                <div class="content">
                                  <p>content</p>
                                </div>
                                </div>
                                <button class="collapsible">Other Concern</button>
                                <div class="content">
                                  <form><br>
                                <a type="button" class="button" href="{{route('view.index')}}" style="vertical-align:middle"><span>Click this to make a Concern</span></a>
                                </form>
                                <br>
                                </div>

                                <script>
                                var coll = document.getElementsByClassName("collapsible");
                                var i;

                                for (i = 0; i < coll.length; i++) {
                                  coll[i].addEventListener("click", function() {
                                    this.classList.toggle("active");
                                    var content = this.nextElementSibling;
                                    if (content.style.maxHeight){
                                      content.style.maxHeight = null;
                                    } else {
                                      content.style.maxHeight = content.scrollHeight + "100px";
                                    } 
                                  });
                                }
                                </script>
                          </div>
                  </center>
                  </div>
                  </td>
                  </tr>
                  </tbody>
       </table>
</body>
</html>                  

</body>

</html>