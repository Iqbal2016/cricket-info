

    <section id="blog" class="container">
       

        <div class="blog">
            <div class="row">
                 <div class="col-md-8">

<!--<label id="form-msg-label" class="my-error-class"></label>-->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel  panel-default">                       
                <div class="panel-heading">
                    <center><h2>REGISTER TO BLOGGERS</h2></center>
                    <h4 style="color:red;">
                    <?php
                    $exception = $this->session->userdata('exception');

                    if (isset($exception)) {
                        echo $exception;
                        $this->session->unset_userdata('exception');
                    }
                    ?>
                </h4>
                <h4 style="color:green;">
                    <?php
                    $loged_out = $this->session->userdata('loged_out');

                    if (isset($loged_out)) {
                        echo $loged_out;
                        $this->session->unset_userdata('loged_out');
                    }
                    ?>
                </h4>
                    
                </div>
            </div>
           

            <div class="panel-body">
                <div class="row">

                    <div class="col-lg-12">
                        <form action="<?php echo base_url(); ?>viewer_register/save_user" method="post">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Name</label> <input id="blogger_name"
                                                                     class="form-control" placeholder="Blogger Name" name="blogger_name" required="required">
                                </div>
                                 <div class="form-group">
                                    <label>User Name / Email</label> <input id="blogger_email_address"
                                                                      class="form-control" placeholder="User Name / Email"  name="blogger_email_address" required="required">
                                </div>
                                <div class="form-group">
                                <label>Password</label> 
                                    <input class="form-control" placeholder="blogger_password" name="blogger_password" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea class="form-control" rows="2" id="address" name="address"></textarea>
                                </div>
                                <div class="form-group">
                                            <label>Country</label>
                                            <select class="form-control"  id="country"  name="country" required="required">
                                            <option value="">Select Country......</option>
                                                <script type="text/javascript">
				                                	printCountryOptions();
				                            	</script>
                                            </select>
                                            
                                </div>


                               
                            </div>

                            
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-primary">Submit Button</button>
                            </div>
                            <div class="col-lg-6">
                                <button type="reset" class="btn btn-primary">Reset Button</button>

                            </div>
                        </form>
                    </div>
                    <!-- /.col-lg-6 (nested) -->
                    <!-- /.col-lg-6 (nested) -->
                </div>
                <!-- /.row (nested) -->
            </div>




        </div>
    </div>
</div>
                    
                </div><!--/.col-md-8-->

                <aside class="col-md-4">
                  <div class="widget categories">
                        <h3>Categories</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="blog_category">
                                    <li><a href="#">Computers <span class="badge">04</span></a></li>
                                    <li><a href="#">Smartphone <span class="badge">10</span></a></li>
                                    <li><a href="#">Gedgets <span class="badge">06</span></a></li>
                                    <li><a href="#">Technology <span class="badge">25</span></a></li>
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.categories-->
    				
    				<div class="widget archieve">
                        <h3>Archieve</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="blog_archieve">
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> December 2013 <span class="pull-right">(97)</span></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> November 2013 <span class="pull-right">(32)</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> October 2013 <span class="pull-right">(19)</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> September 2013 <span class="pull-right">(08)</a></li>
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.archieve-->
    				
                    <div class="widget tags">
                        <h3>Tag Cloud</h3>
                        <ul class="tag-cloud">
                            <li><a class="btn btn-xs btn-primary" href="#">Apple</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Barcelona</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Office</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Ipod</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Stock</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Race</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">London</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Football</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Porche</a></li>
                            <li><a class="btn btn-xs btn-primary" href="#">Gadgets</a></li>
                        </ul>
                    </div><!--/.tags-->
    				
    				
    			</aside>  
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->
