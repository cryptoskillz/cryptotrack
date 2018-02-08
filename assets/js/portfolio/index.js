$( document ).ready(function() 
{
  
  var key = 'portfolio';
  var portfolio = lscache.get(key);
  var btccurrentprice = 0;

  var coinmarketcapdata= {}
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() 
  {
    if (this.readyState == 4 && this.status == 200) 
    {
       coinmarketcapdata = JSON.parse(this.response)
       //console.log(coinprices)
      //console.log(portfolio)
	  if (portfolio != null)
	  {
	  	//todo (chris) process the array.
	  	var table = $('#dataTable').DataTable();

	  	//get the trades
	  	if (portfolio == '')
	  		return	
		var obj = JSON.parse(portfolio)
		var assettypes = [];
		var cashtotal = 0;
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
			var currentprice = 0;
			var totalcost = 0;
			var profit = 0;
			$.each(obj, function(i2, item2) 
			{
			 	
				console.log(item2.coinexchangepricefiat)
			 	if (item2.cointype == item)
			 	{
			 		//find the current price
			 		$.each(coinmarketcapdata, function(i3, item3) 
					{
						//console.log(item)
						//console.log(item3.symbol)

						if (item3.symbol == item)
						{
							currentprice = parseFloat(item3.price_usd)
						}
						if (item3.symbol == "BTC")
						{
							btccurrentprice = parseFloat(item3.price_usd);
						}

					});


			 		//inc the total
			 		quantity  = parseInt(quantity)+parseInt(item2.quantity);
			 		assettype  = item2.assettype;
			 		var itemtotal = parseFloat(item2.coinexchangepricefiat) * item2.quantity
			 		totalcost  = parseFloat(totalcost)+parseFloat(itemtotal);
			 		cashtotal = parseFloat(cashtotal)+parseFloat(itemtotal);

			 	}

			});
			//console.log(totalcost)

			//todo refactor this nonsense
			var tmpcp = quantity * parseFloat(currentprice)
			//console.log("tmpcp"+tmpcp);
			//cashtotal = cashtotal + tmpcp;
			profit = parseFloat(tmpcp) - parseFloat(totalcost)
			//console.log("profit"+profit)
			perprofit = profit / totalcost * 100
			
			
			perprofit = parseFloat( perprofit)	
			totalcost = parseFloat( totalcost)	


		  	table.row.add( [
		                      assettype,
		                      cointype,
		                      quantity,
		                      "$"+totalcost.toFixed(2),
		                      "$"+profit.toFixed(2)+" <br>(% "+perprofit.toFixed(2)+" )",
		                      "$"+currentprice,
		                      ""
		                      
		                    ] ).dr

		     table.draw();
	 	
		});
	  }
    }

    //work out btc price
    var btctotal = cashtotal / btccurrentprice ;
   // table.draw();
   $('#btctotal').text(btctotal.toFixed(4));
   $('#cashtotal').text(cashtotal);

  };
  xhttp.open("GET", "https://api.coinmarketcap.com/v1/ticker/", true);
  xhttp.send();
  //console.log(coinprices)


});