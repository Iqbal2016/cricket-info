<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edite Biography</h1>
    </div>
</div>

<!--<label id="form-msg-label" class="my-error-class"></label>-->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel  panel-default">                       
                <div class="panel-heading">
                    Basic Biography Elements
                </div>
            </div>
            <?php
            $message = $this->session->userdata('message');
            //echo '------'.$message;
            if ($message) { //echo '------1';
                ?>
                <h4 class="alert_success"><?php echo $message; ?></h4>
                <?php
                $this->session->unset_userdata('message');
            }
            ?>

            <div class="panel-body">
                <div class="row">

                    <div class="col-lg-12">
                        <form action="<?php echo base_url(); ?>biography_admin/update_biography" method="post" enctype="multipart/form-data">
                            <div class="col-lg-6">
                            	 <input type="hidden" name="player_Id" value="<?php echo $biography_info->player_Id; ?>">
                                <div class="form-group">
                                    <label>Palyer Name</label> <input id="player_Name"
                                                                     class="form-control" placeholder="Player Name" name="player_Name" required="required" value="<?php echo $biography_info->player_Name; ?>">
                                </div>
                                
                               <!--  <div class="form-group">
                                    <label>Palyer Country</label> <input id="player_Country"
                                                                     class="form-control" placeholder="Player Country" name="player_Country" required="required">
                                </div> -->
                                <div class="form-group">
                                            <label>Palyer Country</label>
                                            <select class="form-control"  id="player_Country" name="player_Country" required="required" >
                                            <option value="">Select Country......</option>
                                                <script type="text/javascript">
				                                	printCountryOptions();
				                            	</script>
                                            </select>
                                            
                                </div>
                              
                                <div class="form-group">
                                    <label>Palyer Description</label>
                                    <textarea class="form-control" rows="3" id="player_Description" name="player_Description"><?php echo $biography_info->player_Description; ?></textarea>
                                </div>
								<div class="form-group">
                                    <label>Palyer Weight</label> <input id="player_Weight"
                                                                     class="form-control" placeholder="Player Weight" name="player_Weight" required="required" value="<?php echo $biography_info->player_Weight; ?>">
                                </div>

                            </div>

                            <div class="col-lg-6">
								<div class="form-group">
                                    <label>Palyer Height</label> <input id="player_Height"
                                                                     class="form-control" placeholder="Player Height" name="player_Height" required="required" value="<?php echo $biography_info->player_Height; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Palyer Age</label> <input id="player_Age"
                                                                      class="form-control" placeholder="Author Age"  name="player_Age" required="required" value="<?php echo $biography_info->player_Age; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Palyer Image</label> 
                                    <input type="file" id="player_Image" name="player_Image">
                                </div>
                                <div class="form-group">
                                    <label>Palyer Position</label> <input id="player_Position"
                                                                      class="form-control" placeholder="Player Position"  name="player_Position" required="required" value="<?php echo $biography_info->player_Position; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Publication Status</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="publication_status" id="publication_status" value="1" checked>Published
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="publication_status" id="publication_status" value="0">Un Published
                                        </label>
                                    </div>
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
