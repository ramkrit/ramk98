<?php
    // include("db.php");
include "oops.php";

$obj= new Database();

 if(isset($_POST['submit'])){
        $category_id = $_POST['category_id'];
      
                 // validation of data   
              if(empty($_POST['sub_category'])){
                $headlineErr = "sub category must be filled out";
                }else{
                    
                    if (!preg_match("/^[a-zA-Z(_) ]*$/",$_POST['sub_category'])) {
                      $headlineErr = "Only letters, white space and (,),_  allowed In Sub  Category Section"; 
                    }else{
                          $sub_category = $_POST['sub_category'];
                    }
                }
                
                if(!empty($headlineErr)){
                    ?>
                    <script>
                        alert('<?php echo $headlineErr ;?>');
                        window.open('add-category.php','_self');
                    </script>
                    <?php
                }else{
                    
                    $values=["category"=>$category_id, " sub_category"=>$sub_category];
                    if ($obj->insert("sub_category", $values)) {
                        ?>

                        <script type="text/javascript">
                         alert('Sub Category Added Successfully on Website');
                         window.open('all-category.php','_self');
                        </script>

                        <?php
                    }else{
                        ?>

                        <script type="text/javascript">
                         alert('Sub Category failed to insert! ');
                         window.open('add-category.php','_self');
                        </script>
                        
                        <?php
                    }
                }
    }else if (isset($_POST['update_submit'])) {
      $cate_id = $_POST['cate_id'];
      $category_id = $_POST['category_id'];
      $sub_category = $_POST['sub_category'];

      $updated_values =  array( 'category' => $category_id , 'sub_category' => $sub_category );
      if($obj->update("sub_category", $updated_values, "id = $cate_id")){
       ?>
        <script>
          alert("data updated Successfully");
          window.open('all-category.php', '_self');
        </script>
        <?php
      }else{
        echo "<pre>";
         print_r($obj->showResult());
        echo "</pre>";
      }


    }     



?>