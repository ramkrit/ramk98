<?php 
    include('header.php');
    include 'oops.php';
    $obj= new Database();
    $id = $title = $size = $code = $category_id = $image =  $date = "";
    if(isset($_GET['update_id'])){
        $id = $_GET['update_id'];
        $obj->select('image_gallery', "*", null, "id=$id", null, null);
        // $obj->select('image_gallery', "*", null, null, 'id DESC', null);
        $data = $obj->showResult();
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        foreach ($data as $key => $value) {
            foreach ($value as list('id' => $id,'title' => $title,'size' => $size,'code' => $code,'category_id' => $category_id,'image' => $image,'date' => $date)) {
                
            }
        }
    }

?>









<!-- main content -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Image</h2>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<form method="POST" enctype="multipart/form-data" name="myForm"   action="insert_image_gallery.php">

    					<div class="body" style="padding-top: 0;">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"  name="title" placeholder="Enter Title Of Image" value="<?php echo $title;?>">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                             <div class="row clearfix">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"  name="size" placeholder="Enter size Of Image" value="<?php echo $size;?>">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                             <div class="row clearfix">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"  name="code" placeholder="Enter code Of Image" value="<?php echo $code;?>">
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                             <select name="category_id" class="form-control">


                                                <?php if(!isset($_GET['update_id'])){?>    
                                                 <option selected disabled>Selecte Sub-Category</option>
                                             <?php }else{ ?>
                                                    <option selected value="<?php echo $category_id;?>"><?php echo $category_id;?></option>
                                             <?php }?>
                                             <?php
                include "db.php";
                $sql = "SELECT * FROM sub_category ";
                $query = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_array($query)){

                ?>
                                                
                                            <option value="<?php echo $row['sub_category'];?>"><?php echo $row['sub_category'];?></option>
                                          <?php
                                          
                                         }
                                          ?>
                                                                                        
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                           
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 dropzone "style="padding: 15px;">
                                  
                                        <div class="dz-message" >
                                            
                                            <h3>Upload Image.</h3>
                                        </div>
                                        <div class="fallback">
                                            <input name="image"  type="file" accept="image/*" />
                                            <input name="old_image"  type="hidden" accept="image/*" value="<?php echo $image;?>"/>
                                        </div>
                                </div>

                                <?php if($image !=""){?>
                                <div class="col-lg-6 col-md-6 col-sm-12 dropzone"style="padding: 15px;">
                                  
                                        <div class="fallback">
                                           <img src="image_gallery/<?php echo $image;?>" alt="user" class="img-thumbnail img-fluid" >
                                        </div>
                                </div>
                            <?php }?>
                            </div>

                          

                            <div class="row clearfix">                            
                                
                                <?php if(!isset($_GET['update_id'])){?>    
                                <div class="col-sm-12">
                                    <button type="submit" name="submit"  value="submit" class="btn btn-raised g-bg-blush2">Submit</button>
                                    <a href="dashboard.php"><button type="button" class="btn btn-raised btn-default ">Cancel</button></a>
                                </div>
                            <?php }else{?>
                                    <div class="col-sm-12">
                                    <input type="hidden" name="id" value="<?php echo $id;?>"> <input type="hidden" name="submit_update" value="submit_update">   
                                    <button type="submit" name="submit_update"  value="submit_update" class="btn btn-raised g-bg-blush2">Update</button>
                                    <a href="dashboard.php"><button type="button" class="btn btn-raised btn-default ">Cancel</button></a>
                                </div>
                            <?php }?>
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

<!-- Mirrored from thememakker.com/templates/swift/university/add-students.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 27 May 2020 12:03:54 GMT -->
</html>