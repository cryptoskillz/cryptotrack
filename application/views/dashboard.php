
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
  <link href="<?php echo base_url();?>assets/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">CryptoSkillz</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="/dashboard">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        
       
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
      </ol>
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
                  <th>Holdings</th>
                  <th>Profit</th>
                  <th>Pairs</th>
                  <th>Purchases</th>
                  <th>Current Price</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Type</th>
                  <th>Asset</th>
                  <th>Holdings</th>
                  <th>Profit</th>
                  <th>Pairs</th>
                  <th>Purchases</th>
                  <th>Current Price</th>
                  <th>Actions</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>Coin</td>
                  <td><i class="cc BTC" title="BTC"> BTC</i></td>
                  <td>$15,0000 (1)</td>
                  <td>$124.20 (+10%)</td>
                  <td>USD,BCH</td>
                  <td>56</td>
                  <td>$13,0000 (+23%)</td>
                  <!-- TODO (Chris) make this code come from the buy type -->
                  <td>
                  <a href="trades/btc"><i class="fa fa-eye" aria-hidden="true"></i></a>
                  <a href=""><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                  </td>
                </tr>
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
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url();?>assets/js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
