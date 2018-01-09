
var atStep = 1;

function scroll_to_class(element_class, removed_height) {
	var scroll_to = $(element_class).offset().top - removed_height;
	if($(window).scrollTop() != scroll_to) {
		$('html, body').stop().animate({scrollTop: scroll_to}, 0);
	}
}

function bar_progress(progress, direction) {
    if (atStep == 1)
    {
        new_value =50;
        $('.f1-progress').attr('style', 'width: ' + progress + '%;').data('now-value', progress);
        $('#step1').removeClass('active');
        $('#step1').removeClass('activated');
        $('#step2').addClass('active');  
    }
	
}

$(function () {
  $('#f1').parsley().on('field:validated', function() {
    if ($('.parsley-error').length === 0)
    {
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


jQuery(document).ready(function() {

    //init
    $('#formDateBought').hide();
    $('#formDateSold').hide();
    $('#wizardstep2cloudmining').hide();


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
                            alert('sssss');

            var option = document.createElement("option");
            option.text = "Kiwi";
            option.value = "gah"
                    alert('sss');

            $('#cloudminingcontracts').add(option);

            
        }

        //hashflare
        if (miningtype == "2")
        {
            $('#formDateSold').show()
            
        }



        //populate the select
        $('#cloudminingcontractsgroup').show()
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
