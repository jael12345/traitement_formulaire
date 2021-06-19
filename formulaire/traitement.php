<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width-device-width, initial-scale=1. shrink-to-fit=no">
  
	
</head>
<body class="corps ">
<?php
// print_r($_FILES);
	$bdd= new PDO('mysql:host=localhost;dbname=formulaire','root','', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
	// print_r($_POST);
	$dataInsert=$bdd->prepare('INSERT into form (nom,prenom,datedenaissance,email,pwd,sexe,tel,pays,photo) VALUES(?,?,?,?,?,?,?,?,?)');
	$dataInsert->execute( array($_POST['nom'],$_POST['prenom'],$_POST['datedenaissance'],
								$_POST['email'],$_POST['pwd'],$_POST['sexe'],
								$_POST['tel'],$_POST['pays'],$_FILES['photo']['name']
						));
	$response=$bdd->query('SELECT * FROM form');
	// while ($donnees = $response->fetch()) {
	// 		echo'<br>'. $donnees['nom'];

		
	// }
	if(isset($_POST)){

   
    
            if (isset($_FILES['photo']) AND $_FILES['photo']['error'] == 0)
            {
                if ($_FILES['photo']['size'] <= 3000000)
                {
                  $infosfichier = pathinfo($_FILES['photo']['name']);
                  $extension_upload = $infosfichier['extension'];
                  $extensions_autorisees = array('jpg', 'jpeg', 'png','JPEG','PNG','JPG');
                  if (in_array($extension_upload, $extensions_autorisees))
                  {
                    move_uploaded_file($_FILES['photo']['tmp_name'], 'image/' . basename($_FILES['photo']['name']));
                    // echo "Image recu 100 % ! "."<br> <br> ";
                    $p = $_FILES['photo']['name'];
                    // echo "<img style='height:100px; width:100px;' src='Images/".$p." ' >"."<br>";
                    $Image="<img style='height:80px; width:80px;' src='Images/".$p." ' >"."<br>";
                    // echo  $Image;

                  }
                  else
                  {
                      echo 'extention non-autorisee';
                  }
                }
                else
                {
                    echo 'Image trop Volumineuse';
                }
            }
        }

?>

	<table class="table table-sm">
    <thead>
      <tr>
        <th>id</th>
        <th>nom</th>
        <th>prenom</th>
        <th>datedenaissance</th>
        <th>email</th>
        <th>pwd</th>
        <th>sexe</th>
        <th>tel</th>
        <th>pays</th>
      </tr>
    </thead>
    <tbody>
    <?php   while ($donnees =$response->fetch()) {
  echo 
    '<tr class="bg-info">
      <td class="bg-primary">'.$donnees['id'].'</td>
      <td>'.$donnees ['nom'].'</td> 
      <td>'.$donnees['prenom'].'</td> 
      <td>'.$donnees['datedenaissance'].'</td> 
      <td>'.$donnees['email'].'</td> 
      <td>'.$donnees['pwd'].'</td> 
      <td>'.$donnees['sexe'].'</td> 
      <td>'.$donnees['tel'].'</td> 
      <td>'.$donnees['pays'].'</td> 
      <td><img src="image/'.$donnees['photo'].'"; style=" width: 100px; height: 100px;"</td>
    </tr>';


}  
?>
</tbody>
</table>
  </div>';


</body>
</html>



