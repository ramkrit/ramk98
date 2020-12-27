<?php
 
//Including Database configuration file.
 
include "db.php";
include "oops.php";
$obj = new Database();
 
//Getting value of "search" variable from "script.js".
 
if (isset($_POST['search'])) {
 
//Search box value assigning to $Name variable.
 
   $Name = $_POST['search'];
 
//Search query.
 
   // $Query = "SELECT * FROM image_gallery WHERE code LIKE '$Name%' ";
   $obj->select("image_gallery", "*", null, "code LIKE '$Name%'", null, null);
   $data = $obj->showResult();

   foreach ($data as $key => $value) {
   	foreach ($value as list("id"=>$id,"category_id"=>$category_id,"title"=>$title,"size"=>$size,"code"=>$code,"image"=>$image, "date"=>$date )) {
   		
  ?>



						<div class="row pb-2">    
                            <div class="col-lg-3 px-4">
                                <a href="#" class="p-profile-pix">
                                    <img src="image_gallery/<?php echo $image;?>" alt="user" class="img-thumbnail img-fluid" style="width: 100%;height: 200px;">
                                </a>
                            </div>

                            <div class="col-lg-6">
                                <h6>Title - <?php echo $title ;?></h6>
                                <h6>Size - <?php echo $size ;?></h6>
                                <h6>Code - <?php echo $code ;?></h6>
                                <div>Category Name:-<b><?php echo $category_id ;?></b></div>
                                <div><?php echo $date ;?></div>
                            </div>
                            <div class="col-lg-2">
                                <h5 class="m-b-0 d-sm-flex justify-content-between">
                                    <span>
                                        <a href="add_image.php?update_id=<?php echo $id ;?>" class="delete">
                                            <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
                                        </a>
                                    </span>
                                    <span>
                                        <a href="delete_image.php?id=<?php echo $id ;?>&&del_img=1" class="delete">
                                            <i class="zmdi zmdi-delete fa-2x"></i>
                                        </a>
                                    </span>
                                </h5>
                            </div>
                            
                        </div>
                       
<?php
}
   }

}   
?>
 

<hr>