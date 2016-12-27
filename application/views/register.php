 <?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>

 <form role="form"  method="post" action="<?php  echo base_url(); ?>users/register">
                        
                        <div class="form-group">
                          <label> First Name*</label>
                          <input type="text" class="form-control" name="first_name" placeholder="Enter Your First Name">
                        </div> 


                        <div class="form-group">
                          <label> Last Name*</label>
                          <input type="text" class="form-control" name="last_name" placeholder="Enter Your Last Name">
                        </div>   


                        <div class="form-group">
                          <label>Email address</label>
                          <input type="email" name="email" class="form-control"  placeholder="Enter your Email Address">
                        </div>

                         <div class="form-group">
                          <label>Choose Username*</label>
                          <input type="text" name="username" class="form-control"  placeholder="Create a Username">
                        </div>


                        <div class="form-group">
                          <label >Password*</label>
                          <input type="password" name="password" class="form-control" placeholder="Enter a Password">
                        </div>


                        <div class="form-group">
                          <label >Confirm Password*</label>
                          <input type="password" name="password2" class="form-control" placeholder="Enter Password Again">
                        </div>  


                        <div class="game-addd">
                        <button name="submit" class="btn btn-primary" type="submit">Register</button>
                      </div>
                  </form>