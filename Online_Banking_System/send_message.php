<html>
<body>

<?php
require("conn.php");

   global $conn; 


  // if ( isset( $_POST['submit'] )  ) { 
    $sid = uniqid();
    $name = $_POST['contact_name'];
    $email = $_POST['contact_email'];
    $message = $_POST['contact_message'];
    $subject = $_POST['contact_subject'];

//} 

   $_SESSION["id"] = $sid;

   $sql = "INSERT INTO message(id, name, email, message, subject) VALUES ('$sid', '$name', '$email', '$message', '$subject')";

  if(mysqli_query($conn, $sql)){
    header( 'Location: pagina_client.html' );
  }
  else{
    echo('<script type="text/JavaScript">  
        alert("Something went wrong: " '. mysqli_error($conn).'); 
        window.location.href = "pagina_start.php";
        </script>');
  }

?>

</body>
</html>