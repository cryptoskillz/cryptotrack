

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
  <link href="/assets/datatables/dataTables.bootstrap4.css" rel="stylesheet">
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
          <a href="#">Fiat</a>
        </li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Concept
        </div>

        <div class="card-body">
            This is a concept to separate the loading of cash ($,£) into Crypto currencies the reason for this is as follows:<br><br>

    Traditional trading pairs are always FIAT to asset ie $ to GOOGLE stock, but when you deal with crypto you first have to buy a crypto currency ($ to btc) then use this BTC to buy the other crypto currency (BTC to LTC) and when you sell it you will turn it back into BTC and then maybe buy some XMR, seldom will you ever turn this back to cash unless you want to be the end of the Crypto currency journey.<br><br>

    To further complicate things you could use your $ to buy LTC (as it's cheaper to exchange than BTC) and move it to an exchage at which point you have to trade LTC to BTC and then the crypto currency you initially wanted to buy, say XMR.  Here we have 4 (or 5 if you cannot do a exchange to exchange transfer which is the norm) all with their fees.<br><br>

    Under traditional portfolio managers these are all classed as separate transactions and it quickly makes your portfolio diverge from reality.  That is why we are proposing the separation of Fiat (cash) into crypto in its own channel and then it becomes the reserve you can use to make your trades under portfolio. To further this concept we have the Cold storage section which are the coins that you are not actively trading.<br><br>
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
    <script src="/assets/js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
