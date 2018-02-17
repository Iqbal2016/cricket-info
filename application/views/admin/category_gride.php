<div class="row">
    <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Category Manager</h1>
    </div>
    <!-- end  page header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                View Category
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                   
                    <table class="table table-striped table-bordered table-hover" id="categoryID">
                        
                        
                        <thead>
                            <tr>
                                <th>Category Id</th> 
                                <th>Category Name</th> 
                                <th>Publication Status</th> 
                                <th>Actions</th> 
                            </tr>
                        </thead>
                        <tbody>
                            
                            <?php
                            foreach ($all_category as $v_category) {
                                ?>
                                <tr> 
                                    <td><?php echo $v_category->category_id; ?></td> 
                                    <td><?php echo $v_category->category_name; ?></td> 
                                    <td>
                                        <?php
                                        if ($v_category->publication_status == 1) {
                                            echo 'Published';
                                        } else {
                                            echo 'Unpublished';
                                        }
                                        ?>
                                    </td> 
                                    <td>
                                        <a href="<?php echo base_url(); ?>super_admin/edit_category/<?php echo $v_category->category_id ?>"><input type="image" src="<?php echo base_url() ?>images/icn_edit.png" title="Edit"></a>
                                        <a href="<?php echo base_url(); ?>super_admin/delete_category/<?php echo $v_category->category_id ?>" onclick="return confirm('Are you sure want to delete');"><input type="image" src="<?php echo base_url() ?>images/icn_trash.png" title="Trash"></a>
                                        
                                        <?php
                                        if ($v_category->publication_status == 1) {
                                            ?>
                                            <a href="<?php echo base_url(); ?>super_admin/unpublished_category/<?php echo $v_category->category_id; ?>">Unpublished</a>

                                            <?php
                                        } else {
                                            ?>

                                            <a href="<?php echo base_url(); ?>super_admin/published_category/<?php echo $v_category->category_id; ?>">Published</a>
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
<script>

$(document).ready(function() {
    $('#categoryID').DataTable();
} );

</script>



			 
<script src="https://cdn.jsdelivr.net/jquery.datatables/1.10.9/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.9/js/jquery.dataTables.min.js" type="text/javascript"></script>