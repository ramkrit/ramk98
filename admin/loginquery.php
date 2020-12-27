<?php
    session_start();
    include("db.php");
    
        
        
            $password = $_POST['password'];
            $email = $_POST['email'];
            
            $sql = "SELECT * FROM admin WHERE userid='".$email."'AND userpass='".$password."'";
            $query = mysqli_query($conn,$sql);
            $row = mysqli_fetch_array($query);
            $count = mysqli_num_rows($query);
            
              
                        if($count > 0){
                            //while($row = mysqli_fetch_array($query)) {
                                $_SESSION['id'] =  $row['id'];
                                // $_SESSION['email'] =  $row['email'];
                                $_SESSION['name'] =  $row['userid'];
                                $_SESSION['passwords'] =  $row['userpass'];
                            //}
                            
                            ?>
                            <script>
                    		   window.open('dashboard.php','_self');
                    	    </script>
                    	    <?php
                    	
                        }else{
                            
                            ?>
                            <script>
                    		    alert('Invalid E-Mail Id or Password....');
                    		    window.open('index.php','_self');
                    	    </script>
                    	    <?php
                            
                        }   
     
?>