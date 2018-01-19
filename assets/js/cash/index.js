function addTimeLineItem(item)
{
	var html ='<article class="timeline-entry [ALIGNED]">'+
                  '<div class="timeline-entry-inner">'+
                   '<time class="timeline-time" datetime="2014-01-10T03:45"> <span>[TIME]</span><span>[DATE]</span></time>'+
                    '<div class="timeline-icon bg-[ICON]">'+
                      '<i class="entypo-feather"></i>'+
                    '</div>'+
                    '<div class="timeline-label">'+
                      '<h2>[EXCHANGE] [ACTIONTYPE] <span>[SYMBOL][AMOUNT]  [ASSET]</span></h2>'+
                      '<p>'+
                      'Cost £[COST]<br>'+
                      'Fee £[FEE]<br>'+
                      'Subtotal £[PRICE]<br>'+
                      'Total £[TOTAL]</p> '+  
                    '</div>'+
                  '</div>'+
             '</article>'


        var html2 ='<article class="timeline-entry [ALIGNED]">'+
                  '<div class="timeline-entry-inner">'+
                   '<time class="timeline-time" datetime="2014-01-10T03:45"> <span>[TIME]</span><span>[DATE]</span></time>'+
                    '<div class="timeline-icon bg-[ICON]">'+
                      '<i class="entypo-feather"></i>'+
                    '</div>'+
                    '<div class="timeline-label">'+
                      '<h2>[EXCHANGE] [ACTIONTYPE] <span>[SYMBOL][AMOUNT]  [ASSET]</span></h2>'+
                      '<p>'+
                       'Fee £[FEE]<br>'+
                      'Where is it: [WHERE]<br>'+
                 
                    '</div>'+
                  '</div>'+
             '</article>'     
	//add to timeline
     		//note (chris) we are making the assumpation here that the JSON object is in chronologcial order if not we will have to order it in future.
     		var myDate = item.datetime.split(" ")
     		var tmphtml = "";
     		//console.log(myDate);
     		if (item.actiontype == 3)
     			 tmphtml = html2.replace("[TIME]",myDate[1]+myDate[2])
     		else
      			 tmphtml = html.replace("[TIME]",myDate[1]+myDate[2])
    		
        	tmphtml = tmphtml.replace("[DATE]",myDate[0])
        	tmphtml = tmphtml.replace("[EXCHANGE]",item.exchange)
        	if (item.actiontype == 1)
        	{
        		tmphtml = tmphtml.replace("[ACTIONTYPE]","buy");
        		tmphtml = tmphtml.replace("[ICON]","success")
        		tmphtml = tmphtml.replace("[ALIGNED]","right-aligned")


        	}
        	if (item.actiontype == 2)
        	{
        		tmphtml = tmphtml.replace("[ACTIONTYPE]","sell");
        		tmphtml = tmphtml.replace("[ICON]","secondary");
        		tmphtml = tmphtml.replace("[ALIGNED]","left-aligned")
        	}

        	//todo (chris) we may require transfer in / out
         	if (item.actiontype == 3)
         	{
        		tmphtml = tmphtml.replace("[ACTIONTYPE]","transfer")
        		tmphtml = tmphtml.replace("[ICON]","info");
        		tmphtml = tmphtml.replace("[ALIGNED]","right-aligned")
        		if (item.whereisit == "1")
        			tmphtml = tmphtml.replace("[WHERE]","Portfolio")

        		if (item.whereisit == "2")
        			tmphtml = tmphtml.replace("[WHERE]","")        		
        		if (item.whereisit == "3")
        			tmphtml = tmphtml.replace("[WHERE]","Cold storage")        		
        		if (item.whereisit == "4")
        			tmphtml = tmphtml.replace("[WHERE]","Hot Wallet")        		
        		if (item.whereisit == "5")
        			tmphtml = tmphtml.replace("[WHERE]","On Exchange")
         		if (item.whereisit == "6")
        			tmphtml = tmphtml.replace("[WHERE]","Coins proprietary wallet")       		
         	}
        	tmphtml = tmphtml.replace("[SYMBOL]","+")
        	tmphtml = tmphtml.replace("[AMOUNT]",item.amount)
        	tmphtml = tmphtml.replace("[ASSET]",item.assettype)
        	tmphtml = tmphtml.replace("[COST]",item.cost.toFixed(2))
        	tmphtml = tmphtml.replace("[FEE]",item.fee.toFixed(2))
        	tmphtml = tmphtml.replace("[PRICE]",item.price.toFixed(2))
        	tmphtml = tmphtml.replace("[TOTAL]",item.total.toFixed(2))
        	
     		$('#timeline-centered').append(tmphtml);
}
$( document ).ready(function() 
{

	var cashtrades = lscache.get("cashtrades");
	cashtrades = JSON.parse(cashtrades);
	//console.log(cashtrades)
	var buytotal = 0;
	var selltotal = 0;
	var btcpurchase = 0;
	var ethpurchase = 0;
	var ltcpurchase = 0;
	var bchpurchase = 0;
	var btcsell = 0;
	var ethsell = 0;
	var ltcsell = 0;
	var bchsell = 0;	


	
    //console.log( cashtrades);
     $.each(cashtrades, function(i, item) {
     	//console.log(item)

     	//todo (chris) chnage this to an integer in next json structure review
     	if (item.actiontype == "1")
     	{
     		//its a buy, add to total plus fees
     		buytotal = parseFloat(buytotal) + parseFloat(item.total);
     		if (item.assettype == "btc")
     			btcpurchase =  parseFloat(btcpurchase) + parseFloat(item.amount);
     		if (item.assettype == "eth")
     			ethpurchase =  parseFloat(ethpurchase) + parseFloat(item.amount);     		
     		if (item.assettype == "ltc")
     			ltcpurchase =  parseFloat(ltcpurchase) + parseFloat(item.amount);     		
     		if (item.assettype == "bch")
     			bchpurchase =  parseFloat(bchpurchase) + parseFloat(item.amount);    

    				
     		
     	}
		if (item.actiontype == "2")
     	{
     		//its a sell, add to total plus fees
     		selltotal = parseFloat(selltotal) + parseFloat(item.total);
     		if (item.assettype == "btc")
     			btcsell =  parseFloat(btcsell) + parseFloat(item.amount);
     		if (item.assettype == "eth")
     			ethsell =  parseFloat(ethsell) + parseFloat(item.amount);     		
     		if (item.assettype == "ltc")
     			ltcsell =  parseFloat(ltcsell) + parseFloat(item.amount);     		
     		if (item.assettype == "bch")
     			bchsell =  parseFloat(bchsell) + parseFloat(item.amount); 



     	}
     	
     	addTimeLineItem(item)



    });

     //console.log(buytotal.toFixed(2));
     $('#totaldeposited').text(buytotal.toFixed(2))
     $('#totalwithdrawn').text(selltotal.toFixed(2))
     //assets bought
     $('#btcpurchase').text(btcpurchase.toFixed(2))
     $('#ltcpurchase').text(ltcpurchase.toFixed(2))     
     $('#ethpurchase').text(ethpurchase.toFixed(2))     
     $('#bchpurchase').text(bchpurchase.toFixed(2))
     //assets sold
     $('#btcsell').text(btcsell.toFixed(2))
     $('#ltcsell').text(ltcsell.toFixed(2))     
     $('#ethsell').text(ethsell.toFixed(2))     
     $('#bchsell').text(bchsell.toFixed(2))     

 });