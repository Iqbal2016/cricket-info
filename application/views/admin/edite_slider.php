<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit Slider</h1>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel  panel-default">                       
                <div class="panel-heading">
                    Basic Form Elements
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
                       <form action="<?php echo base_url(); ?>slider_admin/update_slide" method="post" enctype="multipart/form-data">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="hidden" name="category_id" value="<?php echo $edite_slider->slide_id; ?>">
                                    <label>Slide Title</label> <input id="slide_title" value="<?php echo $edite_slider->slide_title; ?>"
                                                                     class="form-control" placeholder="Slide title" name="slide_title" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Slide Short Description</label>
                                    <textarea class="form-control" rows="2" id="slide_short_description" name="slide_short_description"><?php echo $edite_slider->slide_short_description; ?></textarea>
                                </div>

                                
                               
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Slide Image</label>
                                    <input type="file" name="slide_image" value="<?php echo $edite_slider->slide_image; ?>" required="required">
                                    
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
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Slide Description</label>
                                    <textarea class="form-control ckeditor" rows="8" id="slide_description" name="slide_description"><?php echo $edite_slider->slide_description; ?></textarea>
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
                </div>
            </div>
        </div>
    </div>
</div>
