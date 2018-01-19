

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


    <link rel="stylesheet" href="assets/css/timeline/timeline.css">

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

      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-money"></i>
              </div>
              <div class="mr-5">Cash Deposited £<span id="totaldeposited"></span></div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-money"></i>
              </div>
              <div class="mr-5">Cash Withdrawn £<span id="totalwithdrawn"></span></div>
            </div>
          </div>
        </div> 

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-bitcoin"></i>
              </div>
              <div class="mr-5">
                Assets Purchased<br>
                BTC <span id="btcpurchase"></span><br>
                LTC <span id="ltcpurchase"></span><br>
                ETH <span id="ethpurchase"></span><br>
                BCH <span id="bchpurchase"></span><br>

              </div>
            </div>
          </div>
        </div>  

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-bitcoin"></i>
              </div>
              <div class="mr-5">
                Assets Sold<br>
                BTC <span id="btcsell"></span><br>
                LTC <span id="ltcsell"></span><br>
                ETH <span id="ethsell"></span><br>
                BCH <span id="bchsell"></span><br>
              </div>
            </div>
          </div>
        </div>              
      </div>
      
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-money"></i> Cash time line
          <a class="pull-right btn btn-primary" href="cash/action">Action</a>
        </div>

        </div>
        <div class="card-body">
          <div class="timeline-centered" id="timeline-centered">

              <!-- articles 
              <article class="timeline-entry">
                  <div class="timeline-entry-inner">
                    <time class="timeline-time" datetime="2014-01-10T03:45"> <span>3:35 PM</span><span>1/14/2018</span></time>
                    
                    <div class="timeline-icon bg-success">
                      <i class="entypo-feather"></i>
                    </div>
                    
                    <div class="timeline-label">
                      <h2>Coinbase buy <span>+0.48670984 LTC</span></h2>
                      <p>
                      @ £171.89 per LTC<br>
                      Fee £3.34<br>
                      Subtotal £83.66<br>
                      Total £87.00</p>    
                    </div>
                  </div>
              </article>

              <article class="timeline-entry left-aligned">
                <div class="timeline-entry-inner">
                  <time class="timeline-time" datetime="2014-01-10T03:45"><span>03:47 AM</span> <span>1/14/2018</span></time>
                  
                  <div class="timeline-icon bg-info">
                    <i class="entypo-suitcase"></i>
                  </div>
                  
                  <div class="timeline-label">
                    <h2>Coinbase transfer <span>−0.48670984 LTC (£83.53)</span></h2>
                    <p>
                      to LVprzmeTszuiTssB9ayz9MmZX3djvHy1ed (hot wallet)<br>
                      Fee 0.00022600 LTC (£0.04)<br>
                      Total sent 0.48648384 (£84.53)<br>
                       

                    </p>
                  </div>
                </div>
              </article>


              <article class="timeline-entry right-aligned">
                <div class="timeline-entry-inner">
                  <time class="timeline-time" datetime="2014-01-10T03:45"><span>05:47 AM</span> <span>1/14/2018</span></time>
                  
                  <div class="timeline-icon bg-info">
                    <i class="entypo-suitcase"></i>
                  </div>
                  
                  <div class="timeline-label">
                    <h2>Coinbase transfer <span>+0.48670984 LTC (£83.53)</span></h2>
                    <p>
                      from LVprzmeTszuiTssB9ayz9MmZX3djvHy1ed (hot wallet)<br>
                      Fee 0.00022600 LTC (£0.04)<br>
                      Total sent 0.48648384 (£84.53)<br>
                      
                    </p>
                  </div>
                </div>
              </article>

              <article class="timeline-entry left-aligned">
                <div class="timeline-entry-inner">
                  <time class="timeline-time" datetime="2014-01-10T03:45"><span>05:47 AM</span> <span>1/14/2018</span></time>
                  
                  <div class="timeline-icon bg-secondary">
                    <i class="entypo-suitcase"></i>
                  </div>
                  
                  <div class="timeline-label">
                    <h2>Coinbase sell <span>-0.48670984 LTC (£83.53)</span></h2>
                    <p>
                      Fee 0.00022600 LTC (£0.04)<br>
                      Total 0.48648384 (£84.53)<br>
                      
                    </p>
                  </div>
                </div>
              </article>

              -->
          </div>   
        </div>
      </div>
    </div>

        <!--
             <div class="timeline-centered">

               
          



            This is a concept to separate the loading of cash ($,£) into Crypto currencies the reason for this is as follows:<br><br>

    Traditional trading pairs are always FIAT to asset ie $ to GOOGLE stock, but when you deal with crypto you first have to buy a crypto currency ($ to btc) then use this BTC to buy the other crypto currency (BTC to LTC) and when you sell it you will turn it back into BTC and then maybe buy some XMR, seldom will you ever turn this back to cash unless you want to be the end of the Crypto currency journey.<br><br>

    To further complicate things you could use your $ to buy LTC (as it's cheaper to exchange than BTC) and move it to an exchage at which point you have to trade LTC to BTC and then the crypto currency you initially wanted to buy, say XMR.  Here we have 4 (or 5 if you cannot do a exchange to exchange transfer which is the norm) all with their fees.<br><br>

    Under traditional portfolio managers these are all classed as separate transactions and it quickly makes your portfolio diverge from reality.  That is why we are proposing the separation of Fiat (cash) into crypto in its own channel and then it becomes the reserve you can use to make your trades under portfolio. To further this concept we have the Cold 
    storage section which are the coins that you are not actively trading.<br><br>
    -->
       
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
    <script src="<?php echo base_url();?>assets/js/cash/index.js"></script>

  </div>
</body>

</html>
