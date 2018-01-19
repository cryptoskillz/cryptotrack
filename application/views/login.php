
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
          <a href="#">Login</a>
        </li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-lock"></i> Info
        </div>

        <div class="card-body">
          <span>
          Please note, we never store any of your data on our servers.  It is all stored locally on your machine.  If you create a new seed it will delete all of the local stored data. 
          </br>
          </span>
          <button href="" id="createseed">Create new seed</button>
          <div class="form-group" >
            <label for="loginseed">Enter Seed </label>
            <input type="text" name="loginseed" placeholder="Enter the seed" class="form-control" id="loginseed">  
            <div id="seederror"></div>
            <button type="button" class="btn btn-primary" value="" id="loginbutton" name="loginbutton">Login</button>
            <span>
              The whitepaper for this application (very early draft) can be found here for <a href="https://docs.google.com/document/d/1iL6R_-WgYI-v_KM3CmFGR7EV8dwvCOqN4vv9_qrmsiY" target="_blank">review</a>
            </span>
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
    <script src="assets/js/sb-admin-datatables.min.js"></script>
    <script src="assets/js/mnemonic.js"></script>

    <script>

    

      $("#createseed").click(function() {
        //todo (chris) wann that all cached data will be cleared.
        m = new Mnemonic(96);
        m.toWords();
        ["grey", "climb", "demon", "snap", "shove", "fruit", "grasp", "hum", "self"]
        var seed =JSON.stringify(m.toWords().join(" "));
        seed = seed.replace('"','')
        seed = seed.replace('"','')
        lscache.set('account', {'account':seed});

        //console.log(seed)
        $('#loginseed').val(seed);
      });

      $("#loginbutton").click(function() {
         //get the key
         var theseed =  $("#loginseed").val()
         var key = 'account';
         var json = lscache.get(key);
         //console.log(theseed)
         //console.log( json.account)
          $("#seederror").text("")
         if (theseed != "")
         {
          if (json != null)
          {
             if (theseed == json.account)
             {  
               lscache.set('loggedin', {'state':"1"});
               window.location.href = "/dashboard";
             }
             else
             {
               $("#seederror").text("Seeds do not match")
          
             }
          }
          else
          {
            $("#seederror").text("Seeds do not match")
          }
         
        }
        else
        {
          $("#seederror").text("Seeds cannot be blank")
        
        }
      });
      
    </script>

  </div>
</body>


</html>
