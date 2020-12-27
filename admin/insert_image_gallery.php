<?php
    include("db.php");
    include "oops.php";
    $obj=new Database();




 if(isset($_POST['submit'])){
     
     date_default_timezone_set('Asia/Kolkata');
        $date=date("d-m-Y");
        $unique=date("s");
        $title = $_POST['title'];
        $size = $_POST['size'];
        $code = $_POST['code'];
        $category_id = $_POST['category_id'];
        
     


        $image = $unique.'_'.$_FILES['image']['name'];
        $dir = "image_gallery/";
        $starget_dir = $dir.basename($image);
        $stmp_name = $_FILES['image']['tmp_name'];

        $allowed_image_extension = array("png", "jpg", "jpeg");

    // Get image file extension
    $file_extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
    
    if (! file_exists($_FILES["image"]["tmp_name"])) {
            ?>
        <script>
            alert("Choose image file to upload.");
            window.history.back('add_image.php','_self');
        </script>
        <?php
    }
    else if (! in_array($file_extension, $allowed_image_extension)) {
        
        ?>
        <script>
            alert("Upload valiid images. Only PNG, JPG and JPEG are allowed");
            window.history.back('add_image.php','_self');
        </script>
        
        <?php
        }else{
            if (!move_uploaded_file($stmp_name, $starget_dir)) {

           ?>
            <script>
                alert("there was an error uploading your file.");
                window.open('add_image.php','_self');
            </script>
            <?php
            
          }else{

                

                 // $values=["category"=>$category_id, " sub_category"=>$sub_category];
                 $data=["category_id"=>$category_id, "title"=>$title, "size"=>$size, "code"=>$code, "image"=>$image, "date"=>$date];
                
                // $sql  = "INSERT INTO `image_gallery`(category_id,title,size,code,image,date) VALUES('$category_id','$title','$size','$code','$image','$date')";
                // $query = mysqli_query($conn,$sql);


                if ($obj->insert('image_gallery', $data)) {?>
                    <script type="text/javascript">

                     alert('Image Added Successfully on Website');
                     window.open('all_image.php','_self');
                    </script>
                    <?php
            
                }else{
                    
                    print_r($obj->showResult());
                    $error = "IMG not submit";
                }
               
          }
        }
    } 





if(isset($_POST['submit_update'])){

        $id = $_POST['id'];
        date_default_timezone_set('Asia/Kolkata');
        $date=date("d-m-Y");
        $title = $_POST['title'];
        $size = $_POST['size'];
        $code = $_POST['code'];
        $category_id = $_POST['category_id'];

        $unique=date("s");

        if($_FILES['image']['name'] !=""){

        $image = $unique.'_'.$_FILES['image']['name'];
        $dir = "image_gallery/";
        $starget_dir = $dir.basename($image);
        $stmp_name = $_FILES['image']['tmp_name'];

        $allowed_image_extension = array("png", "jpg", "jpeg");

    // Get image file extension
    $file_extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
    
    if (! file_exists($_FILES["image"]["tmp_name"])) {
            ?>
        <script>
            alert("Choose image file to upload.");
            window.open('add_image.php','_self');
        </script>
        <?php
    }else if (! in_array($file_extension, $allowed_image_extension)) {
        
        ?>
        <script>
            alert("Upload valiid images. Only PNG, JPG and JPEG are allowed");
            window.open('add_image.php','_self');
        </script>
        
        <?php
        }else{
            if (!move_uploaded_file($stmp_name, $starget_dir)) {

           ?>
            <script>
                alert("there was an error uploading your file.");
                window.history.open('add_image.php','_self');
            </script>
            <?php
            
          }
        }


    }else{
        $image = $_POST['old_image'];
    }



        $updated_date=["category_id"=>$category_id, "title"=>$title, "size"=>$size, "code"=>$code, "image"=>$image, "date"=>$date];
        
        if($obj->update('image_gallery', $updated_date, "id = $id")){
            ?>
            <script>
                alert("Data updated Successfully!");
                window.open('all_image.php','_self');
            </script>
            <?php
        }else{
            echo "sdkjfll<br>";


            echo "<pre>";
            print_r($updated_date);
            echo "</pre>";
        }

        

    


    }else{
        echo "submit button is not clicked2";
    } 

?>

