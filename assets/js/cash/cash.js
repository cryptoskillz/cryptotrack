$( document ).ready(function() 
{

	var cashtrades = lscache.get("cashtrades");
    //console.log( cashtrades);
    //console.log(cashexchangelist);
	 //ide the cash select
	 $('#CashActionGroup').hide();
	 $('#buySellGroup').hide();
	 $('#transferGroup').hide();

    $('#datetimepickerbought').datetimepicker();
    $('#datetimepickertransfer').datetimepicker();

     $('#formCashExchnage').empty();
     $('#formCashExchnage').append('<option value="" >Please select</option>')
     $.each(cashexchangelist, function(i, item) {
         $('#formCashExchnage').append('<option value="'+ item.id +'" >'+ item.name +'</option>')
         //console.log(i + " : " + item.id + " : "+ item.symbol)
    });



     //check for selected exchnage
    $("#formCashExchnage" ).change(function() {
        //alert($(this).val())
         $('#CashActionGroup').show();
    });

     //check for a coin slection
    $("#formCashAction" ).change(function() {
        //alert($(this).val())
         if ($("#formCashAction" ).val() == "3")
         {
			 $('#buySellGroup').hide();
         	 $('#transferGroup').show();

         }
         else
         {
         	$('#transferGroup').hide();
         	$('#buySellGroup').show();
         }
    });

    $('.addbutton').click(function() {
    	//get the inf0
    	var obj = {}
    	obj.actiontype = $("#formCashAction").val()
    	obj.exchange = $("#formCashExchnage").val();

    	//check the type
    	if (obj.actiontype == 3)
    	{
    		//transfer
    		obj.actionname = "transfer";
    		obj.datetime = $("#datetimepickertransfer").find("input").val();
    		obj.assettype = $("#formTransferAsset").val();
    		obj.assetname = $("#formTransferAsset option:selected").text();
    		obj.whereisit = $("#formWhereIsIt").val();
    		obj.amount = $("#formTransferAmount").val();
    		obj.fee =  parseFloat($("#formTransferFee").val());
      		obj.cost = 0.00;
     		obj.ref = "";
     		obj.price = 0.00	
     		obj.total = 0.00	

       	}
    	else
    	{
    		//buy or sell
    		if (obj.actiontype == 1)
    		{
    			obj.actionname = "buy";
    		}
    		else
    		{
    			obj.actionname = "sell";
    		}

    		obj.datetime = $("#datetimepickerbought").find("input").val();
    		obj.assettype = $("#formCashAsset").val();
    		obj.assetname = $("#formCashAsset option:selected").text();
    		obj.whereisit = obj.exchange
      		obj.price = parseFloat($("#formCashPrice").val());
    		obj.amount = parseFloat($("#formCashAmount").val());
    		obj.fee = parseFloat($("#formCashFee").val());
     		obj.cost = parseFloat($("#formCashCost").val());
     		obj.ref = $("#formCashRef").val();
   			obj.total = parseFloat($("#formCashCost").val()) + parseFloat($("#formCashFee").val());


    	}

    	var tmpObj = [];
    	if (cashtrades != null)
    	{
    		tmpObj = JSON.parse(cashtrades);
    	}
    	tmpObj.push(obj);
    	//console.log(tmpObj)
		cashtrades = JSON.stringify(tmpObj);
		lscache.set('cashtrades',cashtrades);

    	//console.log(cashtrades);
    })



	//get the csh trades
  	

});