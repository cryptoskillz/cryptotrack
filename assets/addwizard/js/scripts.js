
var atStep = 1;

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

    //init
    $('#formDateBought').hide();
    $('#formDateSold').hide();
    $('#wizardstep2cloudmining').hide();
    $('#cloudmininghashpower').hide();
    $('#wizardstep2payment').hide();
    $('#wizardsummary').hide();
    $('#addbutton').hide();
  

    
    $( "#nextbutton" ).click(function() {
        if (atStep == 2)
        {

           //hide step 1
           $('#wizardstep1').hide();
           //hide step 2
           $('#wizardstep2cloudmining').hide();
           //show final step
           $('#wizardsummary').show();
           $('#wizardstep2payment').hide();
           atStep = 3;
           bar_progress();   
           scroll_to_class( $('.f1'), 40 );
           

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
            atStep = 2;          
            bar_progress();   
            scroll_to_class( $('.f1'), 20 );
            
     
        }  

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
            $('#cloudminingcontracts').append('<option value="bitcoin" >Bitcoin</option>')
            $('#cloudminingcontracts').append('<option value="litecoin" >Litecoin</option>')
            $('#cloudminingcontracts').append('<option value="dash" >Dash</option>')
            $('#cloudminingcontracts').append('<option value="ether" >Ether</option>')
            $('#cloudminingcontracts').append('<option value="zcash" >Zcash</option>')
            $('#cloudminingcontracts').append('<option value="monero" >Monero</option>')             
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
            $('#formHowDidYouPay').append('<option value="creditcard" >Credit Card</option>')
            $('#formHowDidYouPay').append('<option value="bitcoin" >Bitcoin</option>')   
            $('#formHowDidYouPay').append('<option value="bitcoincash" >Bitcoin Cash</option>')           
            $('#formHowDidYouPay').append('<option value="dash" >Dash</option>')           
            $('#formHowDidYouPay').append('<option value="litecoin" >Litecoin</option>')           
            $('#formHowDidYouPay').append('<option value="dogecoin" >Dogecoin</option>')           

        }

        $('#wizardstep2payment').show();
    });



    /*
        Fullscreen background
    */
    $.backstretch("assets/img/backgrounds/1.jpg");
    
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
    
    
    

    
    
});
