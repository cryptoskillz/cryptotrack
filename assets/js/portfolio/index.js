$( document ).ready(function() 
{

  var key = 'portfolio';
  var portfolio = lscache.get(key);
  //console.log(portfolio)
  if (portfolio != null)
  {
  	//todo (chris) process the array.
  	var table = $('#dataTable').DataTable();

  	//get the trades
	var obj = JSON.parse(portfolio)
	var assettypes = [];
	//get all the unique pairs we have to deal with
	$.each(obj, function(i, item) 
	{
		if(jQuery.inArray(item.cointype, assettypes) == -1)
		{
			assettypes.push(item.cointype);
		}
		//assettypes.push(item.cointype);
	});
	


	$.each(assettypes, function(i, item) 
	{
		//console.log(item)
		var quantity = 0;
		var assettype = '';
		var cointype = item
		$.each(obj, function(i2, item2) 
		{
		 	
			console.log(item2)
		 	if (item2.cointype == item)
		 	{
		 		//inc the total
		 		quantity  = parseInt(quantity)+parseInt(item2.quantity);
		 		assettype  = item2.assettype;
		 	}

		});
		//console.log(item)
		 	
	  	table.row.add( [
	                      assettype,
	                      cointype,
	                      quantity,
	                      "4",
	                      "5",
	                      "6",
	                      "7",
	                      "8"
	                      
	                    ] ).dr

	     table.draw();
 	
	});
  }
});