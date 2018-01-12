<div class="row">
                    <div class="col-sm-12  form-box">



                        <h3>Add an asset       </i>
</h3>
                        <p>Add an asset to your portfolio </p>
                        <div class="f1-steps ">
                          <div class="f1-progress">
                              <div class="f1-progress-line" data-now-value="16.66" data-number-of-steps="3" style="width: 16.66%;"></div>
                          </div>
                          <div class="f1-step active" id="step1">
                            <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                            <p>Asset</p>
                          </div>
                          <div class="f1-step" id="step2">
                            <div class="f1-step-icon"><i class="fa fa-info"></i></div>
                            <p>Details</p>
                          </div>
                            <div class="f1-step" id="step3">
                            <div class="f1-step-icon"><i class="fa fa-check"></i></div>
                            <p>Finish</p>
                          </div>
                        </div>
                         <form role="form" action="" method="post" class="f1" id="f1" data-parsley-validate="">
                          <fieldset>
                         <div id="wizardstep1">
                            
                                <h4>Select Asset:</h4>
                                <div class="form-group">
                                <!-- asset Type -->
                                <label for="formAssetType">Asset Type</label>
                                    <select class="form-control" id="formAssetType" required="">
                                      <option value="">Please Select</option>
                                      <option value="cm">Cloud Mining Contract</option>
                                      <option value="hm">Hardware Mining</option>
                                      <option value="coin">Coin</option>
                                      <option value="ico">ICO</option>
                                       <option value="stk">Staking</option>
                                    </select>
                                </div>
                                <!-- for cloud mining contracts -->
                                 <div class="form-group" id="formDateBought" >
                                    <label for="datetimepicker1">Date Bought</label>
                                    <div class='input-group date ' id='datetimepicker1' >
                                        <input type='text' class="form-control" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                 <div class="form-group" id="formDateSold" >
                                    <label for="datetimepicker2">Date Ends (optional) </label>
                                    <div class='input-group date ' id='datetimepicker2' >
                                        <input type='text' class="form-control" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>



                            <div id="wizardstep2coin">
                                <h4>Coin Information:</h4>
                                <div class="form-group">
                                    <label for="formCoinType">Coin Type</label>
                                    <select class="form-control" id="formCoinType" required="">
                                    </select>
                                </div>
                                <div class="form-group" id="coinexchangegroup">
                                    <label for="formCoinExchange">Exchange </label>
                                    <select class="form-control" id="formCoinExchange" required="">
                                    </select>
                                </div>

                                <div class="form-group" id="coindetailsroup">
                                  <!-- auto populate -->
                                  <label for="cloudminerhashpower">Quantity</label>
                                  <input type="text" name="coinquantity" placeholder="Enter the quantity" class="form-control" id="coinquantity">  
                                  <label for="cointoexchangefee">Fees (*to get to exchange)</label>
                                  <input type="text" name="cointoexchangefee" placeholder="Enter the fee" class="form-control" id="cointoexchangefee"> 
                                  <label for="coinexchangefee">Fees (*to get from exchange)</label>
                                  <input type="text" name="coinexchangefee" placeholder="Enter the fee" class="form-control" id="coinexchangefee">                                    
                                  <label for="cloudminerfee">Price  (*to get from exchange)</label>
                                  <input type="text" name="coinexchangeprice" placeholder="Enter the price" class="form-control" id="coinexchangeprice">  
                                  <label for="formcoinhowtopay">Payment Type</label>
                                    <select class="form-control" id="formcoinhowtopay" required="">
                                      <option value="">Please Select</option>
                                      <option value="1">Portfolio (BTC) </option>
                                      <option value="2">Portfolio (LTC)</option>
                                      <option value="3">Cold storage (BTC)</option>
                                      <option value="4">Cold storage (LTC)</option>
                                     
                                    </select> 
                               
                                  <label for="formcoinhowtopay">Price  (*to get from exchange)</label>

                                <input type="text" name="formcoinhowtopay" placeholder="Enter the price" class="form-control" id="coinexchangeprice">  
                                  <label for="formcoinhowtopay">Where is it?</label>
                                    <select class="form-control" id="formcoinhowtopay" required="">
                                      <option value="">Please Select</option>
                                      <option value="1">Portfolio </option>
                                      <option value="3">Cold storage</option>
                                       <option value="4">Hot Wallet</option>
                                      <option value="5">On Exchange</option>
                                       <option value="6">Coins property wallet</option>
                                    
                                    </select> 
                                </div>                                  
                            </div>




                            <div id="wizardstep2cloudmining">
                                <h4>Cloud Mining Information:</h4>
                                <div class="form-group">
                                    <label for="formCloudMiningProvider">Mining Type</label>
                                    <select class="form-control" id="formCloudMiningProvider" required="">
                                      <option value="">Please Select</option>
                                      <option value="1">Genesis</option>
                                      <option value="2">Hashflare</option>
                                    </select>
                                </div>
                               <div class="form-group" id="cloudminingcontractsgroup"> 
                                    <label for="cloudminingcontracts">Contract</label>
                                    <select class="form-control" id="cloudminingcontracts" required="">
                                    
                                    </select>
                                </div>
                               <div class="form-group" id="cloudmininghashpower"> 
                                  <!-- auto populate -->
                                  <label for="cloudminerhashpower">Hashpower</label>
                                  <input type="text" name="cloudminerhashpower" placeholder="Enter the hashpower" class="form-control" id="cloudminerhashpower">  
                                  <label for="cloudminerfee">Fees</label>
                                  <input type="text" name="cloudminerfee" placeholder="Enter the fee" class="form-control" id="cloudminerfee">                                    
                                  <label for="cloudminerfee">Cost</label>
                                  <input type="text" name="cloudminercost" placeholder="Enter the cost" class="form-control" id="cloudminercost">      
                              </div>
                            </div>


                            <div id="wizardstep2hardwaremining">
                                <h4>Hardware Mining Information:</h4>
                                <div class="form-group">
                                    <label for="formHardwareMiningType">Mining Type</label>
                                    <select class="form-control" id="formHardwareMiningType" required="">
                                      <option value="">Please Select</option>
                                      <option value="scrypt">Scrypt</option>
                                      <option value="ethash">Ethash</option>
                                    </select>
                                </div>
                              
                               <div class="form-group" id="cloudmininghashpower"> 
                                  <!-- auto populate -->
                                  <label for="hardwareminername">Name</label>
                                  <input type="text" name="hardwareminername" placeholder="Enter the name" class="form-control" id="hardwareminername">  
                                  <label for="hardwareminerhashpower">Hashpower</label>
                                  <input type="text" name="hardwareminerhashpower" placeholder="Enter the hashpower" class="form-control" id="hardwareminerhashpower">  
                                  <label for="hardwareminerfee">Fees</label>
                                  <input type="text" name="hardwareminerfee" placeholder="Enter the fee" class="form-control" id="hardwareminerfee">                                    
                                  <label for="hardwareminerfee">Cost</label>
                                  <input type="text" name="hardwareminercost" placeholder="Enter the cost" class="form-control" id="hardwareminercost">      
                              </div>
                            </div>

                            <div id="wizardstep2payment">
                          
                              <div class="form-group">
                                  <label for="formHowDidYouPay">How did you pay?</label>
                                  <select class="form-control" id="formHowDidYouPay" required="">

                                 </select>
                                </div>
                            </div>

                            <div id="wizardsummary">
                          
                              <div class="form-group">
                               <!-- hold the summary -->
                                  <div>Asset Type :<span id="assettypesummary"></span></div>
                                  <div>Start Date :<span id="startdatesummary"></span></div>
                                  <div id="summaryenddatediv">End Date :<span id="enddatesummary"></span></div>
                                  <div id="miningroviderdiv">Mining Provider:<span id="miningprovidersummary"></span></div>
                                  <div id="contracttypediv">Contract Type:<span id="contracttypesummary"></span></div>
                                  <div id="hashpowerdiv">Hashpower:<span id="hashpowersummary"></span></div>
                                  <div id="quantitydiv">Quantity:<span id="quantitysummary"></span></div>
                                  <div id="cointypediv">Coin:<span id="cointypesummary"></span></div>
                                  <div id="exchangetypediv">Exchange:<span id="exchangetypedsummary"></span></div>
                                  <div id="feesummary">Fees:<span id="feessummary"></span></div>
                                  <div>Cost:<span id="costssummary"></span></div>
                                  <div>Purchase Method:<span id="purchasemethodsummary"></span></div>
                                  <div id='cloundminingsummaryinfo'>
                                    The cloud mining contract will be treated as income and show up in your income section.  We will calculate the daily income based that days 
                                    difficulty. However you override this with your own figure if you please. You will also show you when this contract is estimated to become profitable 
                                    when it actually is.
                                  </div>
                                  <div id='harddminingsummaryinfo'>
                                    The hardware mining device will be treated as income and show up in your income section.  We will calculate the daily income based that days 
                                    difficulty. However you override this with your own figure if you please. You will also show you when this contract is estimated to become profitable 
                                    when it actually is.
                                  </div>

                              </div>
                            </div>
                                
                                    <div class="f1-buttons">
                                        <!-- parsely validator
                                        <button type="submit" class="btn btn-next " value="validate">Next</button>
                                         -->
                                        <button type="button" class="btn btn-next " value="validate" id="nextbutton" name="nextbutton">Next</button>
                                        <button type="button" class="btn btn-next " value="validate" id="addbutton" name="addbutton">Add</button>

                                    </div>
                                </fieldset>
                        </form>


                      
                    </div>
                </div>