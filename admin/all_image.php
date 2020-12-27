<?php 
    include('header.php');
    include('db.php');
    include "oops.php";

    $obj = new Database();
      
    
    $limit = 20;
    
    
?>
<!--Side menu and right menu -->
<style type="text/css">
    .fa-2x{
        font-size: 40px;
    }
    .text1{ 
            overflow: hidden; 
            text-overflow: ellipsis; 
            display: -webkit-box; 
            line-height: 16px;  
            height: 130px; 
            border:none;
              
            /* The number of lines to be displayed */ 
            -webkit-line-clamp: 2;  
            -webkit-box-orient: vertical; 
        }
</style>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>


<!-- main content -->
<section class="content patients">
    <div class="container-fluid">
      <div class="row">  
        <div class="col-lg-6">
            <h4>All Images</h4>
        </div>
        <div class="col-lg-6 text-right"> 
            <a href="add_image.php" class="btn btn-raised btn-primary">Add Image</a>
        </div>
        <div class="col-lg-12 mb-4">

            <!-- searching box-->
           <div id="otherFieoupDiv">
             <input type="text" class="form-control bg-white w-25 p-2" id="search" placeholder="Search(code) " style="border:1px solid #ddd; border-radius: 5px;" />
             <div id="display"></div>
          </div>
          <!-- searching box-->

        </div>    
        
      </div> 
        
        
        <div class="row clearfix">
        
            <div class="col-lg-8">
                <div class="card ">
                    
                            <div class="body">
                            <?php


                                $obj->select('image_gallery', "*", null, null, 'id DESC', $limit);
                                $data=$obj->showResult();
                                
                                foreach ($data as $key[0] => $row) {
                                    foreach ($row as list("id"=>$id,"category_id"=>$category_id,"title"=>$title,"size"=>$size,"code"=>$code,"image"=>$image, "date"=>$date )) {
                                 
                            ?>
                        <div class="row">    
                            <div class="col-lg-4">
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
                        <hr>
                        <?php       
                                }
                            }
                        ?>
                                
     
         
                          
            <div class="row">
                <div class="col-md-6 col-md-offset-5">
                    <div class="pagination-wrapper">
                        <?php 

                            $obj->pagination("image_gallery",null, null, $limit);

                        ?>
                    </div>
                </div>
            </div>      
                                
                                
                    </div>
                </div>
            </div>


           
            
        </div>
    </div>
</section>
<!-- main content -->

<div class="color-bg"></div>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/morphingsearchscripts.bundle.js"></script> <!-- Main top morphing search --> 

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js --> 


<script>
function fill(Value) {
 
   //Assigning value to "search" div in "search.php" file.
 
   $('#search').val(Value);
 
   //Hiding "display" div in "search.php" file.
 
   $('#display').hide();
 
}
 
$(document).ready(function() {
 
   //On pressing a key on "Search box" in "search.php" file. This function will be called.
 
   $("#search").keyup(function() {
 
       //Assigning search box value to javascript variable named as "name".
 
       var name = $('#search').val();
 
       //Validating, if "name" is empty.
 
       if (name == "") {
 
           //Assigning empty value to "display" div in "search.php" file.
 
           $("#display").html("");
 
       }
 
       //If the name is not empty.
 
       else {
 
           //AJAX is called.
 
           $.ajax({
 
               //AJAX type is "Post".
 
               type: "POST",
 
               //Data will be sent to "ajax.php".
 
               url: "ajax.php",
 
               //Data, that will be sent to "ajax.php".
 
               data: {
 
                   //Assigning value of "name" into "search" variable.
 
                   search: name
 
               },
 
               //If result found, this function will be called.
 
               success: function(html) {
 
                   //Assigning result to "display" div in "search.php" file.
 
                   $("#display").html(html).show();
 
               }
 
           });
 
       }
 
   });
 
});
</script>
</body>

</html>