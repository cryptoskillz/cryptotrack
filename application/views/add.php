
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    $this->load->view ('includes/default/header');
  ?>      
  
  <!-- Custom styles for this page-->
  <link rel="stylesheet" href="assets/addwizard/css/form-elements.css">
  <link rel="stylesheet" href="assets/addwizard/css/style.css">
  <link href="assets/datetimepicker/css/bootstrap-datetimepicker-standalone.css" rel="stylesheet" >

<link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">



</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">CryptoSkillz</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
     <?php
    $this->load->view ('includes/default/leftmenu');
  ?> 
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid page-content">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/dashboard">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add</li>

      </ol>

      <!-- add wizard -->
      <?php
        $this->load->view ('includes/add/addwizard');
      ?>
      <!-- end add wizard -->

    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
    <?php
      $this->load->view ('includes/default/footer');
    ?>  
            </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <?php
      $this->load->view ('includes/default/footer');
    ?>  
    
    <!-- Latest compiled and minified JavaScript -->




  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>

  <script src="assets/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.8.0/parsley.min.js"></script>
    <!-- Custom scripts for this page-->
   <script src="assets/addwizard/js/jquery.backstretch.min.js"></script>
   <script src="assets/addwizard/js/retina-1.1.0.min.js"></script>
   <script src="assets/addwizard/js/scripts.js"></script>
  </div>
</body>

</html>
