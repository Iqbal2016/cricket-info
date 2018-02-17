<div class="row">
    <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Slider Manager</h1>
    </div>
    <!-- end  page header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                View Slider
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                           <tr> 
                                <th>Slider Title</th> 
                                <th>Slider short Ds</th> 
                                <th>Slider Image</th>
                                <th>Publication Status</th> 
                                <th>Actions</th> 
                            </tr> 
                        </thead>
                        <tbody>
                            <?php
                            foreach ($all_slider as $v_slider) {
                                ?>
                                <tr> 
                                    <td><?php echo $v_slider->slide_title; ?></td> 
                                    <td><?php echo $v_slider->slide_short_description; ?></td> 
                                    <td><img src="<?php echo $v_slider->slide_image; ?>" alt="image" width="60" height="30" /></td> 
                                    
                                    <td>
                                        <?php
                                        if ($v_slider->publication_status == 1) {
                                            echo 'Published';
                                        } else {
                                            echo 'Unpublished';
                                        }
                                        ?>
                                    </td> 
                                    <td>
                                        <a href="<?php echo base_url(); ?>slider_admin/edit_slider/<?php echo $v_slider->slide_id ?>"><input type="image" src="<?php echo base_url() ?>images/icn_edit.png" title="Edit"></a>
                                        <a href="<?php echo base_url(); ?>slider_admin/delete_slider/<?php echo $v_slider->slide_id ?>"  onclick="return confirm('Are you sure want to delete');" ><input type="image" src="<?php echo base_url() ?>images/icn_trash.png" title="Trash"></a>
                                        <?php
                                        if ($v_slider->publication_status == 1) {
                                            ?>
                                            <a href="<?php echo base_url(); ?>slider_admin/unpublished_slider/<?php echo $v_slider->slide_id; ?>">Unpublished</a>

                                            <?php
                                        } else {
                                            ?>

                                            <a href="<?php echo base_url(); ?>slider_admin/published_slider/<?php echo $v_slider->slide_id; ?>">Published</a>
                                            <?php
                                        }
                                        ?>
                                    </td> 
                                </tr> 
                            <?php } ?>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>

