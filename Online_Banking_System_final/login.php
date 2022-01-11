<html>
<body>

<?php
    require("conn.php");

    global $conn; 
    session_start(); 

    $name = $_POST['name'];
    $psw = $_POST['psw'];
    $_SESSION["psw"] = $psw;

    $sql = "SELECT password FROM user WHERE name = '$name' ";
    $result = mysqli_query($conn, $sql);

    if($result){
		header( 'Location: pagina_start.html' );
    }

     while($row = mysqli_fetch_array($result)){
         if(password_verify($psw, $row['password'])){		
			 if($name == 'admin'){
				header( 'Location: pagina_admin.html' );
			 }
			 else{
				header( 'Location: pagina_client.html' );
			 }
         }
         else{  
			 header( 'Location: pagina_start.html' );	
         }			 
     }
    ?>

</body>
</html>