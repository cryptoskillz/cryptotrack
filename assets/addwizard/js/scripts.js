
var atStep = 1;
var tradingfee = 0.1;
var coinpricebtc = 0;
var coinpricefiat = 0;

 //TODO refactor this so the price fetching is in one place
  var coinmarketcapdata= {}
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() 
  {
    if (this.readyState == 4 && this.status == 200) 
    {
       coinmarketcapdata = JSON.parse(this.response)
       //console.log(coinmarketcapdata)

    }
  };
  xhttp.open("GET", "https://api.coinmarketcap.com/v1/ticker/", true);
  xhttp.send();


//debug
//console.log(coinlist)

var key = 'portfolio';
var portfolio = lscache.get(key);
//console.log(portfolio)

function scroll_to_class(element_class, removed_height) {
	var scroll_to = $(element_class).offset().top - removed_height;
	if($(window).scrollTop() != scroll_to) {
		$('html, body').stop().animate({scrollTop: scroll_to}, 0);
	}
}

function bar_progress() {
    if (atStep == 2)
    {

        $('.f1-progress').attr('style', 'width: 300%;').data('now-value', 300);
        $('#step1').removeClass('active');
        $('#step1').removeClass('activated');
        $('#step2').addClass('active');  

    }
    if (atStep == 3)
    {
        $('.f1-progress').attr('style', 'width: 500%;').data('now-value', 500);
        $('#step2').removeClass('active');
        $('#step2').removeClass('activated');
        $('#step3').addClass('active');
        $('#nextbutton').hide();
        $('#addbutton').show();

    }
}


/* to add parsely validation
$(function () {
  $('#f1').parsley().on('field:validated', function() {
    if ($('.parsley-error').length === 0)
    {
         alert(atStep)
        if (atStep == 2)
        {

           //hide step 1
           $('#wizardstep1').hide();
           //hide step 2
           $('#wizardstep2cloudmining').hide();
           //show final step
           $('#wizardsummary').show();
        }     

        if (atStep == 1)
        {
            //hide step 1
            $('#wizardstep1').hide()
            //show step 2 
            //init step 2
            $('#cloudminingcontractsgroup').hide();
            $('#wizardstep2cloudmining').show()

            //alert(assetType)            
            bar_progress(300, 'right');   
            scroll_to_class( $('.f1'), 20 );
            atStep = 2;
     
        }  

    }
    return false; // Don't submit form for this demo

  })
  .on('form:submit', function() {
    return false; // Don't submit form for this demo
  });
});
*/


jQuery(document).ready(function() {

    var dateNow = new Date();
    $('#datetimepicker1').datetimepicker({
        defaultDate:dateNow
    });

    //init
    $('#formDateBought').hide();
    $('#formDateSold').hide();
    $('#wizardstep2cloudmining').hide();
    $('#cloudmininghashpower').hide();
    $('#wizardstep2payment').hide();
    $('#wizardsummary').hide();
    $('#addbutton').hide();
    $('#wizardsummary').hide();
    $('#wizardstep2cloudmining').hide();
    $('#wizardstep2hardwaremining').hide();
    $('#wizardstep2coin').hide();


    
    //add it to the database.
    $( "#addbutton" ).click(function() {
        //alert('add')

        var obj = {}
        //process the coin
        var assetType = $('#formAssetType').val();
        if (assetType == "coin")
        {
            obj.assettype = 'Coin';
            obj.startdate = $('#datetimepicker1').find("input").val();
            obj.enddate = $('#datetimepicker2').find("input").val();
            obj.quantity = $('#coinquantity').val();
            obj.cointype = $('#formCoinType').val();
            obj.exchange = $('#formCoinExchange').val();
            obj.fee = $('#coinexchangefee').val();
            obj.coinexchangepricebtc = $('#coinexchangepricebtc').val();
            obj.coinexchangepricefiat = $('#coinexchangepricefiat').val();
            obj.totalcostbtc = $('#totalcostbtc').val();
            obj.totalcostfiat = $('#totalcostfiat').val();           
           /* refactor this so it gets it from the API*/
            if ($('#formcoinhowtopay').val()  == 1)
               obj.paidfrom = "Portfolio (BTC)"
            if ($('#formcoinhowtopay').val()  == 2)
                obj.paidfrom = "Portfolio (LTC)"                
            if ($('#formcoinhowtopay').val()  == 3)
               obj.paidfrom = "Cold storage (BTC)";                
            if ($('#formcoinhowtopay').val()  == 4)
                obj.paidfrom = "Cold storage (LTC)"
            console.log(obj);
            var tmpObj = [];
            if ((portfolio != null) && (portfolio != ''))
            {
                tmpObj = JSON.parse(portfolio);
            }
            tmpObj.push(obj);
            //console.log(tmpObj)
            portfolio = JSON.stringify(tmpObj);
            lscache.set('portfolio',portfolio);
             $.growl({ title: "Added", message: "Trade has been added" });

        }  
    });



    
    $( "#nextbutton" ).click(function() {
        if (atStep == 2)
        {

            //output vars
            var assetoutput = ''


           //hide step 1
           $('#wizardstep1').hide();
           $('#wizardstep2payment').hide();
           atStep = 3;
           bar_progress();   
           scroll_to_class( $('.f1'), 40 );

            //check out which one to show
            var assetType = $('#formAssetType').val();
            $('#quantitydiv').hide();
            $('#cointypediv').hide();
            $('#exchangetypediv').hide();

            //add these to summary

            //cointoexchangefee
            //formcoinhowtopay  
              
            //check if its clound mining
            if (assetType == "cm")
            {
                $('#wizardstep2cloudmining').hide();
                $('#assettypesummary').text('Clound Mining Contract')
                $('#startdatesummary').text($('#datetimepicker1').find("input").val());
                $('#enddatesummary').text($('#datetimepicker2').find("input").val());
                //todo (chris) refactor this 
                var cmps = '';
                if ($('#formCloudMiningProvider').val() == 1)
                    cmps = "Genesis"
                if ($('#formCloudMiningProvider').val() == 2)
                    cmps = "Hashflare"

                $('#miningprovidersummary').text(cmps);
                $('#contracttypesummary').text($('#cloudminingcontracts').val() );
                $('#hashpowersummary').text($('#cloudminerhashpower').val())
                $('#feessummary').text($('#cloudminerfee').val());
                $('#costssummary').text($('#cloudminercost').val());
                $('#purchasemethodsummary').text($('#formHowDidYouPay').val() );
                $('#harddminingsummaryinfo').hide();
                $('#cloundminingsummaryinfo').show();              
                $('#wizardsummary').show()
            }

            if (assetType == "hm")
            {
                $('#assettypesummary').text('Hardware Mining ')
                $('#startdatesummary').text($('#datetimepicker1').find("input").val());
                $('#enddatesummary').text("");
                //todo (chris) refactor this 
                $('#miningprovidersummary').text($('#hardwareminername').val() );
                $('#contracttypesummary').text("");
                $('#contracttypesummary').hide();
                $('#hashpowersummary').text($('#hardwareminerhashpower').val())
                $('#feessummary').text($('#hardwareminerfee').val());
                $('#costssummary').text($('#hardwareminercost').val());
                $('#purchasemethodsummary').text($('#formHowDidYouPay').val() );
                $('#wizardsummary').show()
                $('#wizardstep2hardwaremining').hide();
                $('#harddminingsummaryinfo').show();
                $('#cloundminingsummaryinfo').hide();


                
            }

            if (assetType == "coin")
            {
                $('#assettypesummary').text('Coing from Exchnage');
                $('#startdatesummary').text($('#datetimepicker1').find("input").val());
                $('#summaryenddatediv').hide();
                $('#contracttypediv').hide();
                $('#miningroviderdiv').hide();
                $('#hashpowerdiv').hide();
                $('#cloundminingsummaryinfo').hide();
                $('#harddminingsummaryinfo').hide();
                
                $('#startdatesummary').text($('#datetimepicker1').find("input").val());
                $('#quantitysummary').text($('#coinquantity').val());
                $('#cointypesummary').text($('#formCoinType').val());
                $('#exchangetypedsummary').text($('#coinexchangefee').val());
                $('#feessummary').text($('#coinexchangefee').val());
                $('#costssummary').text($('#coinexchangeprice').val());

                /* refactor this so it gets it from the API*/
                if ($('#formcoinhowtopay').val()  == 1)
                    $('#purchasemethodsummary').text("Portfolio (BTC)");
                if ($('#formcoinhowtopay').val()  == 2)
                    $('#purchasemethodsummary').text("Portfolio (LTC)");                
                if ($('#formcoinhowtopay').val()  == 3)
                    $('#purchasemethodsummary').text("Cold storage (BTC)");                
                if ($('#formcoinhowtopay').val()  == 4)
                    $('#purchasemethodsummary').text("Cold storage (LTC)");


                $('#wizardstep2coin').hide();
                $('#wizardsummary').show();
                


            }          
        }     

        if (atStep == 1)
        {
            //hide step 1
            $('#wizardstep1').hide()
            var assetType = $('#formAssetType').val();
            //check if its clound mining
            if (assetType == "cm")
            {
                $('#wizardstep2hardwaremining').hide();
                $('#cloudminingcontractsgroup').hide();
                $('#wizardstep2cloudmining').show()
            }
             if (assetType == "hm")
            {
                $('#cloudminingcontractsgroup').hide();
                $('#wizardstep2cloudmining').hide();
                $('#wizardstep2hardwaremining').show();
                $('#formHowDidYouPay').empty();
                $('#formHowDidYouPay').append('<option value="creditcard" >Credit Card</option>')
                $('#formHowDidYouPay').append('<option value="bitcoin" >Bitcoin</option>')   
                $('#formHowDidYouPay').append('<option value="bitcoincash" >Bitcoin Cash</option>')           
                $('#formHowDidYouPay').append('<option value="dash" >Dash</option>')           
                $('#formHowDidYouPay').append('<option value="litecoin" >Litecoin</option>')           
                $('#formHowDidYouPay').append('<option value="dogecoin" >Dogecoin</option>')       
                $('#wizardstep2payment').show();
            }
            if (assetType == "coin")  
            {
                $('#quantitydiv').show();
                $('#cointypediv').show();
                $('#exchangetypediv').show();
                //hide the exchnages
                $('#coinexchangegroup').hide();
                //hide the details
                $('#coindetailsroup').hide();
                //populate the drop down
                $('#formCoinType').empty();
                $('#formCoinType').append('<option value="" >Please select</option>')
                $.each(coinlist, function(i, item) {
                    $('#formCoinType').append('<option value="'+ item.symbol +'" >'+ item.id +' ('+item.symbol+')' +'</option>')

                   // console.log(i + " : " + item.id + " : "+ item.symbol)
                });
                
                //wizardstep2coin
                $('#wizardstep2coin').show();

            }         
            //show step 2 
            //init step 2
           

            //alert(assetType)  
            atStep = 2;          
            bar_progress();   
            scroll_to_class( $('.f1'), 20 );
            
     
        }  

    });

    //check for a coin slection
    $("#formCoinType" ).change(function() {
         //get the selected coin
         //var selectedcoin = $(this).val()
         //get the selected coin text

        
        

         
         
         //note this is a pretty crappy way to get the value we should be geting it from the arrays but for now it works.
         var selectedcointext = $(this).find('option:selected').text();
         //removes the 
         selectedcoin = selectedcointext.split(" ");
         var coinmarketcapurl = "https://coinmarketcap.com/currencies/"+selectedcoin[0]+"/"
         $('#formCoinTypeInfo').html("<a href='"+coinmarketcapurl+"' target='_blank'>"+coinmarketcapurl+"</a>");
         //show the exchanges
         $('#coinexchangegroup').show();
         //empty the list
         $('#formCoinExchange').empty();
         //add a select option
         $('#formCoinExchange').append('<option value="" >Please select</option>')

         //loop through the list of exchanges
         //TODO the exhcange list has to be consumed by the ingestion server when we code it.

         //loop the exchnage list
         $.each(exchangelist, function(i, item) {
            //we have not found this coin on this exchnage to set a flag to false
            var notfound = 0;
            //loop coins this exchnage supports
            $.each(item.coins, function(i2, item2) {
                //debug
                //console.log(item2)
                //console.log($('#formCoinType').val());

                //check if this is a match 
                if ((item2 == $('#formCoinType').val()) && (notfound == 0))
                {
                    //update the found flag
                    notfound = 1;
                    //add it to the list.
                    $('#formCoinExchange').append('<option value="'+ item.id +'" >'+ item.name +'</option>')
                }
             });
           // console.log(i + " : " + item.id + " : "+ item.symbol)
        });
    });

    $('#coinquantity').change(function() {
        //debug
       //console.log(tradingfee);
       //console.log(coinpricebtc);
       var quantity = $('#coinquantity').val();
       var pricefiat = coinpricefiat * quantity;
       var pricebtc = coinpricebtc * quantity;
       var tradingfeepaid = pricebtc / 100 * tradingfee;
       $('#totalcostbtc').val(pricebtc);
       $('#totalcostfiat').val(pricefiat);
       $('#coinexchangefee').val(tradingfeepaid);



    })


    //check for a exchange slection
    $("#formCoinExchange" ).change(function() {
        //console.log(coinmarketcapdata)
       
        $.each(exchangelist, function(i, item) {
            //check for the right array item
            if (item.id ==  $('#formCoinExchange').val())
            {
                tradingfee = item.tradingfee;
                $("#coinexchangefeelabel").text("Trading Fee "+tradingfee+'%')
            }
            
        });

        //set the price
        $.each(coinmarketcapdata, function(i, item) 
        {   

            if ($('#formCoinType').val() == item.symbol)
            {
                //debug
                //console.log($('#formCoinType').val())
                //console.log(item)
                coinpricebtc = item.price_btc;
                coinpricefiat= item.price_usd;
                $('#coinexchangepricebtc').val(item.price_btc) 
                $('#coinexchangepricefiat').val(item.price_usd) 

            }
            
        });

        $('#coindetailsroup').show();
    });


    


    //check for asset type
    $( "#formAssetType" ).change(function() {
       //check what was selected
            var assetType = $('#formAssetType').val();
            $('#formDateBought').show()
                
            //check if its clound mining
            if (assetType == "cm")
            {
                $('#formDateSold').show()
                
            }
            else
            {
                $('#formDateSold').hide()
            }
    });

    //cloud mining seleted
    $( "#formCloudMiningProvider" ).change(function() {

        //1 = genesis
        //2 = hasflare
        var miningtype = $('#formCloudMiningProvider').val();
            
        //check if its clound mining

        //todo (chris) get these from an automatic source
        //genesis
        if (miningtype == "1")
        {
            $('#cloudminingcontracts').empty()
            $('#cloudminingcontracts').append('<option value="" >Please Select</option>')
            $('#cloudminingcontracts').append('<option value="bitcoin" >Bitcoin</option>')
            $('#cloudminingcontracts').append('<option value="litecoin" >Litecoin</option>')
            $('#cloudminingcontracts').append('<option value="dash" >Dash</option>')
            $('#cloudminingcontracts').append('<option value="ether" >Ether</option>')
            $('#cloudminingcontracts').append('<option value="zcash" >Zcash</option>')
            $('#cloudminingcontracts').append('<option value="monero" >Monero</option>')           
            
        }

        //hashflare
        if (miningtype == "2")
        {
            $('#cloudminingcontracts').empty()
            $('#cloudminingcontracts').append('<option value="" >Please Select</option>')
            $('#cloudminingcontracts').append('<option value="sha256" >Sha256</option>')
            $('#cloudminingcontracts').append('<option value="scrypt" >Scrypt</option>')
            $('#cloudminingcontracts').append('<option value="ethash" >Ethash</option>')
            $('#cloudminingcontracts').append('<option value="equihash" >Equihash</option>')
          
        }

        //show the options
        $('#cloudminingcontractsgroup').show()
    });

    //cloud mining seleted
    $( "#cloudminingcontracts" ).change(function() {
       
         //show the options
        $('#cloudmininghashpower').show();

        $('#formHowDidYouPay').empty()
        $('#formHowDidYouPay').append('<option value="" >Please Select</option>')
        
        //genesis
        if ($('#formCloudMiningProvider').val() == "1")
        {

            $('#formHowDidYouPay').empty();
            $('#formHowDidYouPay').append('<option value="creditcard" >Credit Card</option>')
            $('#formHowDidYouPay').append('<option value="bitcoin" >Bitcoin</option>')   
            $('#formHowDidYouPay').append('<option value="bitcoincash" >Bitcoin Cash</option>')           
            $('#formHowDidYouPay').append('<option value="dash" >Dash</option>')           
            $('#formHowDidYouPay').append('<option value="litecoin" >Litecoin</option>')           
            $('#formHowDidYouPay').append('<option value="dogecoin" >Dogecoin</option>')           

        }

        if ($('#formCloudMiningProvider').val() == "2")
        {

            $('#formHowDidYouPay').empty();
            $('#formHowDidYouPay').append('<option value="creditcard" >Credit Card</option>')
            $('#formHowDidYouPay').append('<option value="bitcoin" >Bitcoin</option>')   
        

        }


        $('#wizardstep2payment').show();
    });



    /*
        Fullscreen background
    */
    $.backstretch("../../assets/img/backgrounds/1.jpg");
    
    $('#top-navbar-1').on('shown.bs.collapse', function(){
    	$.backstretch("resize");
    });
    $('#top-navbar-1').on('hidden.bs.collapse', function(){
    	$.backstretch("resize");
    });
    
    /*
        Form
    */
    $('.f1 fieldset:first').fadeIn('slow');
    
    $('#datetimepicker1').datetimepicker();
    $('#datetimepicker2').datetimepicker();
  
    
    

    
    
});
