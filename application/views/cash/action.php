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
  <link href="<?php echo base_url();?>assets/datetimepicker/css/bootstrap-datetimepicker-standalone.css" rel="stylesheet" 
  <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

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
          <a href="/cash">Cash Purchases</a>
        </li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-info"></i> Select an action
        </div>

        <div class="card-body">
          <div class="form-group">
            <label for="formCashExchnage">Exchange</label>
              <select class="form-control" id="formCashExchnage" required="">
              </select>    
           </div>   
           <div class="form-group" id="CashActionGroup">   
              <label for="formCashAction">Action</label>
              <select class="form-control" id="formCashAction" required="">
                <option value="">Please Select</option>
                <option value="1">Buy</option>
                <option value="2">Sell</option>
                <option value="3">Transfer</option>
              </select>

               

            </div>


            <div class="form-group" id="transferGroup">

            <label for="datetimepickertransfer">Date Transfered</label>
              <div class='input-group date ' id='datetimepickertransfer' >
                  <input type='text' class="form-control" />
                  <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
                           <!-- coin to by dynamic from array -->
               <label for="formTransferAsset">Asset</label>
              <select class="form-control" id="formTransferAsset" required="">
                <option value="">Please Select</option>
                <option value="btc">Bitocin</option>
                <option value="bch">Bitcoin Cash</option>
                <option value="eth">Ethereum</option>
                <option value="ltc">Litecoin</option>
              </select>

              <label for="formWhereIsIt">Where is it?</label>
              <select class="form-control" id="formWhereIsIt" required="">
              <option value="">Please Select</option>
              <option value="1">Portfolio </option>
              <option value="3">Cold storage</option>
               <option value="4">Hot Wallet</option>
              <option value="5">On Exchange</option>
               <option value="6">Coins proprietary wallet</option>
            
            </select> 

              <label for="formTransferAmount">Amount</label>
              <input type="text" name="formTransferAmount" placeholder="Enter the amount" class="form-control" id="formTransferAmount">  


              <label for="formTransferFee">Fee</label>
              <input type="text" name="formTransferFee" placeholder="Enter the fee" class="form-control" id="formTransferFee">  
             <button class="pull-right btn btn-primary addbutton" id="button1">Add</button>
 

            </div>

            <div class="form-group" id="buySellGroup">   
              <label for="datetimepickerbought">Date Bought</label>
              <div class='input-group date ' id='datetimepickerbought' >
                  <input type='text' class="form-control" />
                  <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
              <!-- coin to by dynamic from array -->
               <label for="formCashAsset">Asset</label>
              <select class="form-control" id="formCashAsset" required="">
                <option value="">Please Select</option>
                <option value="btc">Bitocin</option>
                <option value="bch">Bitcoin Cash</option>
                <option value="eth">Ethereum</option>
                <option value="ltc">Litecoin</option>
              </select>

              <label for="formCashAmount">Amount</label>
              <input type="text" name="formCashAmount" placeholder="Enter the amount" class="form-control" id="formCashAmount">  

              <!-- coin to by dynamic from array -->
               <label for="formCashPayMethod">Payment Method</label>
              <select class="form-control" id="formCashPayMethod" required="">
                <option value="">Please Select</option>
                <option value="cc">Credit Card</option>
                <option value="bt">Bank Transfer</option>

              </select>
            <label for="formCashFee">Price</label>
            <input type="text" name="formCashPrice" placeholder="Enter the fee" class="form-control" id="formCashPrice">  

            <label for="formCashFee">Fee</label>
            <input type="text" name="formCashFee" placeholder="Enter the fee" class="form-control" id="formCashFee">  
            <label for="formCashCost">Cost</label>
            <input type="text" name="formCashCost" placeholder="Enter the cost" class="form-control" id="formCashCost">  
            <label for="formCashRef">Ref</label>
            <input type="text" name="formCashRef" placeholder="Enter the referece" class="form-control" id="formCashRef">  
            <button class="pull-right btn btn-primary addbutton"  id="button2">Add</button>


            </div>           
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/cash/cash.js"></script>
  </div>
</body>

</html>

 