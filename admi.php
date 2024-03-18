// <?php 

//require 'database.php';

//$name = "SoyElAdmin";
//$email = "administracion@soyeladmin.com";
//$password = "SoyElAdminMasChingon001";
//$is_admin= 1;
//$status= "accepted";

//Encriptar password
//$password_hash = password_hash($password, PASSWORD_DEFAULT);

//Preparar consulta para insercar el admin
//$sql = "INSERT INTO user (name, email, password_hash, is_admin, status)
  //      VALUES (?, ?, ?, ?, ?)";

//Preparar y ejecutar la consulta
//$smtm = $mysqli->prepare($sql);
//$smtm->bind_param("sssbs", $name, $email, $password_hash, $is_admin, $status);

//if ($smtm->execute()) {
  //  echo "Admin creado con exito";
//} else {
  //  echo "Error al crear el admin: " . $mysli->error;
//}

//$smtm->close();
//$mysli->close(); 
//?>