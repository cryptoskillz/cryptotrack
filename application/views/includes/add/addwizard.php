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
                                    <div class='input-group date ' id='datetimepicker1'>
                                        <input type='text' class="form-control" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                                 <div class="form-group" id="formDateSold" >
                                    <label for="datetimepicker2">Date Ends (optional) </label>

                                    <div class='input-group date ' id='datetimepicker2'>

                                        <input type='text' class="form-control" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div id="wizardstep2cloudmining">
                                <h4>Cloud Mining Information:</h4>
                                <div class="form-group">
                                    <label for="formCloudMiningProvider">Mining Provider</label>
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

                            <div id="wizardstep2payment">
                          
                              <div class="form-group">
                                  <label for="formHowDidYouPay">How did you pay?</label>
                                  <select class="form-control" id="formHowDidYouPay" required="">

                                 </select>
                                </div>
                            </div>

                            <div id="wizardsummary">
                          
                              <div class="form-group">
                                Add it    
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