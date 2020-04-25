<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Upload Excel</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('home/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{asset('home/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('home/css/grayscale.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Covid19 Kenya Spread</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Upload CSV Files</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
       <label style="color:white;" >Upload Gender CSV Data</label>
     <div class="form-inline">
     <button class="btn btn-xs"><i class="fa fa-download text-info">Download</i></button>
     <form method="post" action="{{ route('gender.save') }}" enctype="multipart/form-data">
      @csrf
        <input type="file" class="form-control" id="gendercsv" name="gendercsv" accept =".csv"/>
        <button type="submit" class="btn btn-xs"><i class="fa fa-upload text-success">Upload</i></button>
        </form>
        <button class="btn btn-xs" id="gender_cancel"><i class="fa fa-close text-danger">Cancel</i></button>
        <span id="gender_error"></span>
       </div>
        <label style="color:white;">Upload Total CSV Data</label>
     <div class="form-inline">
     <button class="btn btn-xs"><i class="fa fa-download text-info">Download</i></button>
        <input id="totalcsv" type="file" class="form-control" name="totalcsv">
        <button class="btn btn-xs"><i class="fa fa-upload text-success">Upload</i></button>
         <button id="total_cancel" class="btn btn-xs"><i class="fa fa-close text-danger">Cancel</i></button>
         <span id="total_error"></span>
       </div>
        <label style="color:white;">Upload Counties CSV Data</label>
     <div class="form-inline">
     <button class="btn btn-xs"><i class="fa fa-download text-info">Download</i></button>
        <input type="file" id="countycsv" class="form-control" name="countycsv">
        <button  class="btn btn-xs"><i class="fa fa-upload text-success">Upload</i></button>
         <button id="county_cancel" class="btn btn-xs"><i class="fa fa-close text-danger">Cancel</i></button>
         <span id="county_error"></span>
       </div>
      </div>
    </div>
  </header>
  <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script>
$("#gender_cancel").on('click',function(){
    $("#gendercsv").val("");
});
$("#total_cancel").on('click',function(){
    $("#totalcsv").val("");
});
$("#county_cancel").on('click',function(){
    $("#countycsv").val("");
});
</script>


  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Peter Gondi
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('home/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('home/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{asset('home/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{asset('home/js/grayscale.min.js')}}"></script>

</body>

</html>
