<html>
<body>

<?php
require("conn.php");

   global $conn; 


  // if ( isset( $_POST['submit'] )  ) { 
    $sid = uniqid();
    $name = $_POST['contact_name'];
    $email = $_POST['contact_email'];
    $psw = $_POST['contact_psw'];
    $IBAN = $_POST['contact_code'];

//} 

   $_SESSION["id"] = $sid;

   $psw = password_hash($psw, PASSWORD_DEFAULT);

   $sql = "INSERT INTO user(id, name, email, password, IBAN) VALUES ('$sid', '$name', '$email', '$psw', '$IBAN')";

  if(mysqli_query($conn, $sql)){
    header( 'Location: pagina_admin.html' );
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