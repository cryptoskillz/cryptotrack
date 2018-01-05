
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
            
            //alert(assetType)            
            bar_progress(300, 'right');   
            scroll_to_class( $('.f1'), 20 );
     
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
    
     /*
    

       
    	

       
    	// fields validation
        //todo (chris) make this work for selects
    	parent_fieldset.find('select, input[type="text"], input[type="password"], textarea').each(function() {
    		if( $(this).val() == "" ) {
    			$(this).addClass('input-error');
    			next_step = false;
    		}
    		else {
    			$(this).removeClass('input-error');
    		}
    	});
    	// fields validation

    	if( next_step ) {
    		parent_fieldset.fadeOut(400, function() {
    			// change icons
    			current_active_step.removeClass('active').addClass('activated').next().addClass('active');
    			// progress bar
    			bar_progress(progress_line, 'right');
    			// show next step
	    		$(this).next().fadeIn();
	    		// scroll window to beginning of the form
    			scroll_to_class( $('.f1'), 20 );
	    	});
    	}
       
         
    	
    });
     */
    
    
    
    	
   // });
    
    
});
