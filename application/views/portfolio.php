
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>CryptoSKillz</title>
  <?php
    $this->load->view ('includes/default/header');
  ?>      
  
  <!-- Page level plugin CSS-->
  <link href="assets/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
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
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Portfolio</a>
        </li>
      </ol>
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-bitcoin"></i>
              </div>
              <div class="mr-5">Total value <span id="btctotal"></span> BTC</div>
              <div class="mr-5">Total value $<span id="cashtotal"></span></div>
            </div>
           
          </div>
        </div>
        
      
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-bitcoin"></i>
              </div>
              <div class="mr-5">Portfolio trading amount <span id="portbtctotal"></span> BTC</div>
            </div>
            
          </div>
        </div>
      </div>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Current Holdings
          <a class="pull-right btn btn-primary" href="add">ADD</a>
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Type</th>
                  <th>Asset</th>
                  <th>Quantity</th>
                  <th>Cost</th>
                  <th>Profit</th>
                  <th>Current Price</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Type</th>
                  <th>Asset</th>
                  <th>Quantity</th>
                  <th>Cost</th>
                  <th>Profit</th>
                  <th>Current Price</th>
                  <th>Actions</th>
                </tr>
              </tfoot>
              <tbody>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
         <?php
      $this->load->view ('includes/default/copyright');
    ?> 
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
       <?php
      $this->load->view ('includes/default/logoutmodal');
      $this->load->view ('includes/default/footer');
    ?> 
    <!-- Custom scripts for this page-->
    <script src="assets/js/portfolio/index.js"></script>

    <script src="assets/js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
