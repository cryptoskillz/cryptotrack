
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
          <a href="#">Portfolio</a>
        </li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Market
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <th>Coin</th>
                <th>Price</th>
                <th>Circulating supply price</th>
                <th>Total supply price</th>
                <th>Circulating supply</th>
                <th>Total supply</th>
      
                <th>Coins reserved</th>
                <th>Mineable?</th>

              </thead>
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
    <script src="assets/js/sb-admin-datatables.min.js"></script>
  </div>
</body>
 <script>

    var currencies = 'BTC,XRP,ETH,BCH,ADA,LTC,NEM,XLM,TRX,IOTA'

    var divisor = 21000000;
    //set the circulating supplies
    //todo (Chris) Move this to a json object to handle better even better get it from API.
    //note we are setting it relative to BTC so not really requieed but it may be used if we want to use another symbole as the reserve
    //note circulating supply was used when no total supply (not mineable)
    var btccs = 16786437 //circulating supply
    var btcts = 21000000 //totalsupply
    var btcrsv = 0 //the coins in reserve (use this in a later calc)
    var btcmin = 1 // is it mineable

    //ripple
    var xrpcs = 38739144847 //circulating supply
    var xrpts = 99993093880  //totalsupply  
    var xrprsv = 140000000 //the coins in reserve (use this in a later calc) 14 billion
    var xrpmin = 0 // is it mineable

    //ethereum
    var ethcs = 96817082 //circulating supply
    var ethts = 0 //totalsupply
    var ethrsv = 0 //the coins in reserve (use this in a later calc)
    var ethmin = 1 // is it mineable

    //bitcoin cash
    var bchcs = 16897463 //circulating supply
    var bchts = 21000000 //totalsupply
    var bchrsv = 0 //the coins in reserve (use this in a later calc)
    var bchmin = 1 // is it mineable

    //caradano
    var adacs = 25927070538 //circulating supply
    var adats = 0 //totalsupply
    var adarsv = 0 //the coins in reserve (use this in a later calc)
    var adamin = 0 // is it mineable    

    //litecoin
    var ltccs = 54646333 //circulating supply
    var ltcts = 84000000 //totalsupply
    var ltcrsv = 0 //the coins in reserve (use this in a later calc)
    var ltcmin = 1 // is it mineable      

    //litecoin
    var nemcs = 8999999999 //circulating supply
    var nemts = 0 //totalsupply
    var nemrsv = 0 //the coins in reserve (use this in a later calc)
    var nemmin = 0 // is it mineable    

    //litecoin
    var xlmcs = 17877807309 //circulating supply
    var xlmts = 0 //totalsupply
    var xlmrsv = 0 //the coins in reserve (use this in a later calc)
    var xlmmin = 0 // is it mineable   


    //litecoin
    var trxcs = 65748192476 //circulating supply
    var trxts = 0 //totalsupply
    var trxrsv = 0 //the coins in reserve (use this in a later calc)
    var trxmin = 0 // is it mineable  

    //litecoin
    var iotacs = 2779530283 //circulating supply
    var iotats = 0 //totalsupply
    var iotarsv = 0 //the coins in reserve (use this in a later calc)
    var iotamin = 0 // is it mineable  

    function loadDoc() 
    {
      var table = $('#dataTable').DataTable();
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() 
      {
        if (this.readyState == 4 && this.status == 200) 
        {
            
            var obj = JSON.parse(this.response)
            //console.log(obj)
             $.each(obj, function(i, item) 
             {
                var symbol = i;

               //console.log(i);
                $.each(item, function(i2, item2) 
               {
                  var baseprice = item2 //the price
                  var basesymbol = i2 // will always be USD but may exented this in the future

                  var circulatingsupply = 0;
                  var totalsupply = 0;
                  var realpricecs = 0;
                  var realpricets = 0;
                  var ismineable = 0;
                  var reseveramount = 0;



                  realpricecs = baseprice * cstmp;
                  realpricets = baseprice * tstmp;

                 /// console.log(symbol+" : "+i2+" : "+item2);

                  //note (chris) really badly written code be here, fast , Saturday, midnight.  Shall optimise :)
                  if (symbol == "BTC")
                  {
                    //console.log(symbol+price+" "+basesymbol)
                    ismineable = btcmin ;
                    reseveramount = btcrsv;
                    circulatingsupply = btccs;
                    totalsupply = btcts;                   
                  }

                  //======================================================
                  //setting the bases for the difference currencies (bad)
                  //=====================================================

                  if (symbol == "XRP")
                  {
                    //console.log(symbol+price+" "+basesymbol)
                    ismineable = xrpmin;
                    reseveramount = xrprsv ;
                    circulatingsupply = xrpcs;
                    totalsupply = xrpts;
                  }


                  if (symbol == "ETH")
                  {
                    //console.log(symbol+price+" "+basesymbol)
                    ismineable = ethmin ;
                    reseveramount = ethrsv;
                    circulatingsupply = ethcs;
                    totalsupply = ethts;
                  }                 

                  if (symbol == "BCH")
                  {
                    //console.log(symbol+price+" "+basesymbol)
                    ismineable = bchmin ;
                    reseveramount = bchrsv;
                    circulatingsupply = bchcs;
                    totalsupply = bchts;
                  } 

                  if (symbol == "ADA")
                  {
                    //console.log(symbol+price+" "+basesymbol)
                    ismineable = adamin ;
                    reseveramount = adarsv;
                    circulatingsupply = adacs;
                    totalsupply = adats;
                  }   


                  if (symbol == "LTC")
                  {
                    //console.log(symbol+price+" "+basesymbol)
                    ismineable = ltcmin ;
                    reseveramount =ltcrsv ;
                    circulatingsupply = ltccs;
                    totalsupply = ltcts;
                  } 

                  if (symbol == "NEM")
                  {
                    //console.log(symbol+price+" "+basesymbol)
                    ismineable = nemmin;
                    reseveramount = nemrsv ;
                    circulatingsupply = nemcs;
                    totalsupply = nemts;
                  }

                  if (symbol == "XLM")
                  {
                    //console.log(symbol+price+" "+basesymbol)
                    ismineable = xlmmin;
                    reseveramount = xlmrsv ;
                    circulatingsupply = xlmcs;
                    totalsupply = xlmts;
                  }  

                  if (symbol == "TRX")
                  {
                    //console.log(symbol+price+" "+basesymbol)
                    ismineable = trxmin ;
                    reseveramount = trxrsv;
                    circulatingsupply = trxcs;
                    totalsupply = trxts;
                  } 

                   if (symbol == "IOTA")
                  {
                    //console.log(symbol+price+" "+basesymbol)
                    ismineable = iotamin;
                    reseveramount = iotarsv;
                    circulatingsupply = iotacs;
                    totalsupply = iotats;
                  }                                                                                             

                   //======================================================
                  //end of setting the bases for the difference currencies (bad)
                  //=====================================================

                  //calc it 
                  if (symbol == "BTC")
                  {
                    //its BTC no need to do the math
                    realpricets = baseprice;
                    realpricecs = baseprice;
                  }
                  else
                  {
                    var tstmp = 0;
                    var cstmp = circulatingsupply / divisor; //circulating supply / 21 million
                    //check the total supply is not 0
                    if (totalsupply != 0)
                      tstmp = totalsupply / divisor;
                    else
                      tstmp = cstmp;


                    realpricecs = baseprice * cstmp;
                    realpricets = baseprice * tstmp;

                   
                  }
                  //this is the result 
                  //console.log(symbol+" : "+realpricecs+" : "+realpricets+" : "+ismineable+" : "+reseveramount)
                  //console.log(i+" "+item);
                  //console.log('adding table')
                  //console.log(ismineable)
                  if (ismineable == 0)
                    ismineableopt = "No";
                  else
                    ismineableopt = "Yes";
                   table.row.add( [
                      symbol,
                      "$"+Number(baseprice).toFixed(2),
                      "$"+Number(realpricecs).toFixed(2),
                      "$"+Number(realpricets).toFixed(2),
                      circulatingsupply,
                      totalsupply,
                      reseveramount,
                      ismineableopt
                      
                    ] ).dr

               });
             });
        }

        table.draw();

      };
      xhttp.open("GET", "https://min-api.cryptocompare.com/data/pricemulti?fsyms="+currencies+"&tsyms=USD", true);
      xhttp.send();
    }
    
    
   
   // var table
    $(document).ready(function() {
     // table = $('#example').DataTable();
      loadDoc();

    
     
    } );
    </script>

</html>
