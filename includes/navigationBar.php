<div class="col-md-4" style="height:50px;padding:2px;"> 
                    <a href="home.php">
                      <button type="button" class="btn btn-primary" style="width:288px;background-color:#346893; font-size:20px;">
                        <span ><i class="fa fa-home" aria-hidden="true"></i>
                          <b>  Home </b>
                        </span> 
                      </button>
                    </a>
                </div>
                <div class="col-md-2" style="height:50px; padding-top: 20px;">
                    <b> <i style="font-size:15px;"> WELCOME:</i>  <?php echo $_SESSION["username"];?></b> 
                </div>
                <div class="col-md-3" style="height:50px; padding-top: 20px;"> 
                    <b> </b> 
                </div>
                <div class="col-md-3" style="height:50px; padding:2px">
                    <a href="logout.php">
                      <button type="button" style="background-color:#346893; font-size:20px;" class="btn btn-primary btn-block">
                        <span> <i class="fa fa-lock" aria-hidden="true"></i>
                         <b> SignOut  </b>
                        </span>
                      </button>
                    </a>
                </div>