<div class="row">
    <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Biography Manager</h1>
    </div>
    <!-- end  page header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                View Biography
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                           <tr> 
                                <th>Palyer Name</th> 
                                <th>Palyer Country</th> 
                                <th>Palyer Image</th>
                                <th>Palyer Position</th>
                                <th>Publication Status</th> 
                                <th>Actions</th> 
                            </tr> 
                        </thead>
                        <tbody>
                            <?php
                            foreach ($all_biography as $v_viography) {
                                ?>
                                <tr> 
                                    <td><?php echo $v_viography->player_Name; ?></td> 
                                    <td><?php echo $v_viography->player_Country; ?></td> 
                                    <td><img src="<?php echo $v_viography->player_Image; ?>" alt="image" width="30" height="30" /></td> 
                                    <td><?php echo $v_viography->player_Position; ?></td> 
                                    <td>
                                        <?php
                                        if ($v_viography->publication_status == 1) {
                                            echo 'Published';
                                        } else {
                                            echo 'Unpublished';
                                        }
                                        ?>
                                    </td> 
                                    <td>
                                        <a href="<?php echo base_url(); ?>biography_admin/edit_biography/<?php echo $v_viography->player_Id ?>"><input type="image" src="<?php echo base_url() ?>images/icn_edit.png" title="Edit"></a>
                                        <a href="<?php echo base_url(); ?>biography_admin/delete_biography/<?php echo $v_viography->player_Id ?>"  onclick="return confirm('Are you sure want to delete');" ><input type="image" src="<?php echo base_url() ?>images/icn_trash.png" title="Trash"></a>
                                        <?php
                                        if ($v_viography->publication_status == 1) {
                                            ?>
                                            <a href="<?php echo base_url(); ?>biography_admin/unpublished_biography/<?php echo $v_viography->player_Id; ?>">Unpublished</a>

                                            <?php
                                        } else {
                                            ?>

                                            <a href="<?php echo base_url(); ?>biography_admin/published_biography/<?php echo $v_viography->player_Id; ?>">Published</a>
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

