<?php 
    include('header.php');
    // include('db.php');
    include "oops.php";
     
    $obj= new Database();
    

    
    // $sql = "SELECT * FROM sub_category Order BY id DESC ";
    // $query = mysqli_query($conn,$sql);
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
<!-- main content -->
<section class="content patients">
    <div class="container-fluid">
        <div class="block-header">
            <div class="d-sm-flex justify-content-between">
                <div>
                    <h2>All Sub Category</h2>
                </div>
                <div>
                    <a href="add-category.php" class="btn btn-raised btn-primary">Add Sub Category</a>
                </div>
            </div>
        </div>
        
        <div class="row clearfix">
        
            <div class="col-lg-8">
                <div class="card">
                   <div class="body">

                            
            <?php
            
            $limit=5;
            $obj->select('sub_category','*', null, null, null, $limit);

                $dataa=$obj->showResult();
                
                // echo "<pre>";
                // print_r($table1); 
                // echo "</pre>";
                foreach ($dataa as $keyt=>$table1) {

                    foreach ($table1 as list("id"=> $id, 'category'=>$category, 'sub_category'=>$sub_category)) {


               
            ?>      
                        <div class="row">  
                         

                            <div class="col-lg-8 pb-2">
                                <div>
                                    Category Name:-<b><?php echo $category;?></b><br>
                                     Sub Category:-<?php echo $sub_category;?>   
                                </div>
                                

                            </div>
                            <div class="col-lg-4">
                                 <h5 class="m-b-0 d-sm-flex justify-content-between">
                                    <span>
                                        <a href="add-category.php?update_id=<?php echo $id;?>&&del_sub_cat=1" class="delete">
                                            <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
                                        </a>
                                    </span>
                                    <span>
                                        <a href="delete_image.php?id=<?php echo $id;?>&&del_sub_cat=1" class="delete">
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
                        <?php

                         $obj->pagination('sub_category',null, null, $limit);
                         

                        ?>
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
</body>

</html>