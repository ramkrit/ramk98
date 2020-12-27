<?php 
    include('header.php');
    include 'oops.php';
    $id = $category = $sub_category = "";
    if(isset($_GET['update_id'])){
        $id = $_GET['update_id'];
        $obj = new Database();

        $obj->select("sub_category", "*", null, "id = $id", null, null);
        $data = $obj->showResult();    
        // echo "<pre>";
        // print_r($data) ;  
        // echo "</pre>";

        foreach ($data as $key => $value) {
            foreach ($value as list("id"=>$id, "category"=>$category, "sub_category"=>$sub_category,)) {
                    }
        }
    }    

?>

<!-- main content -->

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Sub Category</h2>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">

                  
					<form method="POST" name="myForm"   action="insert-sub-category.php">

    					<div class="body" style="padding-top: 0;">
    					     <div class="row clearfix">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select name="category_id" class="form-control">
                                            <?php if(!isset($_GET['update_id'])){ ?>   

                                            <option selected disabled>Select Category</option>

                                            <?php }else{?>

                                            <option selected value="<?php echo $category;?>">
                                            <?php echo $category;?></option>

                                            <?php }?>    
                                            
                                            <option value="Paintings">Paintings</option>
                                            <option value="Portraits">Portraits</option>
                                            <option value="Drawings">Drawings</option>
                                            <option value="Illustrations">Illustrations</option>
                                            <option value="Art & Crafts">Art & Crafts</option>
                                                                                        
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"  name="sub_category" placeholder="Enter Sub Category" value="<?php echo $sub_category;?>">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="row clearfix">                            
                                

                                <div class="col-sm-12">
                                    <?php if(!isset($_GET['update_id'])){ ?>
                                    <button type="submit" name="submit"  value="submit" class="btn btn-raised g-bg-blush2">Add</button>
                                    <?php
                                        }else{
                                            ?>
                                            <input type="hidden" name="cate_id" value="<?php echo $id;?>">
                                          <button type="submit" name="update_submit"   class="btn btn-raised g-bg-blush2">Update</button>  
                                            <?php
                                        }
                                    ?>
                                    <a href="dashboard.php"><button type="button" class="btn btn-raised btn-default ">Cancel</button></a>

                                </div>
                            </div>


                        </div>
                    </form>
                   
				</div>
			</div>
		</div>
           
    </div>
</section>

<div class="color-bg"></div>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/morphingsearchscripts.bundle.js"></script> <!-- Main top morphing search --> 


<script src="assets/plugins/autosize/autosize.js"></script> <!-- Autosize Plugin Js --> 
<script src="assets/plugins/momentjs/moment.js"></script> <!-- Moment Plugin Js -->
<script src="assets/plugins/dropzone/dropzone.js"></script> <!-- Dropzone Plugin Js -->
<!-- Bootstrap Material Datetime Picker Plugin Js --> 
<script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 
<script src="assets/js/pages/forms/basic-form-elements.js"></script>

<script>
	initSample();
</script>



</body>
</html>