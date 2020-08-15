<div class="col-lg-3" style="background-color: #346893" >
                    <div class="col-md-12">
                        <label style="color: white"> </label>
                          <hr>
                          <div class="well">
                              <table class="table table-hover" style="font-size:17px;">
                                  
								  
								  <?php 
                                      if ($_SESSION["user_role"]=="Partient"){
                                    ?>
                                    
                                      <a href="request.php" class="btn btn-primary btn-block" style="background-color:#0e263d; border-radius:10px;" role="button">
                                        <span> <i class="fa fa-adjust" aria-hidden="true"></i>
                                          <b>Request  </b>
                                        </span>
                                      </a>
									  <a href="my_request.php" class="btn btn-primary btn-block" style="background-color:#0e263d; border-radius:10px;" role="button">
                                        <span> <i class="fa fa-user" aria-hidden="true"></i>
                                          <b> My Request </b>
                                        </span>
                                      </a>
									  
									  <?php 
                                      }elseif($_SESSION["user_role"]=="Lab_technician"){
                                    ?>
									
									  <a href="view_request.php" class="btn btn-primary btn-block" style="background-color:#0e263d; border-radius:10px;" role="button">
                                        <span> <i class="fa fa-adjust" aria-hidden="true"></i>
                                          <b>View Partient </b>
                                        </span>
                                      </a>
									  
									  <?php 
                                      }elseif($_SESSION["user_role"]=="Dr"){
                                    ?>
									  <a href="view_lab_result.php" class="btn btn-primary btn-block" style="background-color:#0e263d; border-radius:10px;" role="button">
                                        <span> <i class="fa fa-adjust" aria-hidden="true"></i>
                                          <b>View Labs Results </b>
                                        </span>
                                      </a><a href="view_patients.php" class="btn btn-primary btn-block" style="background-color:#0e263d; border-radius:10px;" role="button">
                                        <span> <i class="fa fa-adjust" aria-hidden="true"></i>
                                          <b>View Patient </b>
                                        </span>
                                      </a>
                                      
									  
									  <?php }?>
									  
									  
									  
									  
                              </table>
                          </div>
                          <hr>
                    </div>
                </div>