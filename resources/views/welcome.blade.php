<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Clean Blog - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->

  <link href="{{asset('FrontEnd/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{asset('FrontEnd/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
  <!-- Custom styles for this template -->
  <link href="{{asset('FrontEnd/css/clean-blog.min.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.html">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Write Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('student')}}">Student</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url({{asset('FrontEnd/img/home-bg.jpg')}})">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Student Blog</h1>
            <span class="subheading">A Blog Theme by Start Bootstrap</span>
          </div>
        </div>
      </div>
    </div>
  </header>
  @yield('content')

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('FrontEnd/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('FrontEnd/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  
  <!-- Custom scripts for this template -->
  <script src="{{asset('FrontEnd/js/clean-blog.min.js')}}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
  @if(Session::has('message'))
  var type="{{Session::get('alert-type','info')}}"
  switch(type){
  case 'info':
        toastr.info("{{Session::get('message')}}");
        break;

  case 'success':
        toastr.success("{{Session::get('message')}}");
        break;

  case 'warning':
        toastr.warning("{{Session::get('message')}}");
        break;

  case 'error':
        toastr.error("{{Session::get('message')}}");
        break;
}
@endif
</script>

<script>
  $(document).on("click", "#delete", function(e){
    e.preventDefault();
    var link = $(this).attr("href");
    swal({
  title: 'Are you want to Delete?',
  text: "Once Delete, This will be Permanently Delete!",
  icon: 'warning',
  buttons: true,
  dangerMode: true,
})
    .then((willDelete)=>{
      if (willDelete){
        window.location.href = link;
      }
      else{
        swal("Safe Data!");
      }
    });
  });
</script>

</body>
</html>
