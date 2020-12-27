<?php
	include("db.php");
	include "oops.php";
	$obj= new Database();
	
	 if(isset($_GET['del_img'])){
	  	$id = $_GET['id'];
	  	
	  	$obj->select("image_gallery", "image", null, "id = ".$id, null, null);
	  	$dataArray = $obj->showResult();

	  	unlink("image_gallery/".$dataArray[0][0]["image"]);

		if($obj->delete("image_gallery", "id = ".$id."")){
			header("location:all_image.php");
		}else{
			print_r($obj->showResult());
		}

	}
		
	






	if(isset($_GET['del_sub_cat'])){
	   	$id = $_GET['id'];	   	
	
		if($obj->delete('sub_category', 'id='.$id.'')){
				header("Location:all-category.php");
		}else{
			print_r($obj->showResult());
		}
	    
	}
    
    if(isset($_GET['del_sold_work'])){
	   	$id = $_GET['id'];   	


	 	// $sql = "DELETE FROM sold_art_work WHERE  id=$id";
		// $query = mysqli_query($conn,$sql);		
		// 	if($query){
		// 	header("Location:all-sold-art-work.php");
		// }

		$obj->select("sold_art_work", "image", null, "id = ".$id, null, null);
	  	$dataArray = $obj->showResult();

	  	unlink("image_gallery/".$dataArray[0][0]["image"]);

		if($obj->delete("sold_art_work", "id = ".$id."")){
			header("location:all-sold-art-work.php");
		}else{
			print_r($obj->showResult());
		}		
	    
	    
	}	
		
?>