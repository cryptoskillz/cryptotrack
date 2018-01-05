<div class="row">
                    <div class="col-sm-12  form-box">



                        <h3>Add an asset       </i>
</h3>
                        <p>Add an asset to your portfolio </p>
                        <div class="f1-steps">
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
                            <div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
                            <p>social</p>
                          </div>
                        </div>
                                              <form role="form" action="" method="post" class="f1" id="f1" data-parsley-validate="">

                        <fieldset>
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
                                <label for="datetimepicker2">Date Ends</label>

                                <div class='input-group date ' id='datetimepicker2'>

                                    <input type='text' class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>

                            </form>

                      
                            
                                <div class="f1-buttons">

                                    <button type="submit" class="btn btn-next " value="validate">Next</button>
                                </div>
                            </fieldset>

                            <fieldset>
                               
                            </fieldset>

                            <fieldset>
                               
                            </fieldset>
                      
                    </div>
                </div>