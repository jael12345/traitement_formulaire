<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<meta name="viewport" content="width-device-width, initial-scale=1. shrink-to-fit=no">
	
	
</head>
<body class="corps ">
	<div class="container-fluid ">
		
		<div class="row ">
			<h2></h2>
			<div class=" form1 col-md-offset-2 col-md-8  col-xs-12 col-xm-offset-2 col-xm-10">
				<h3>INSCRIVEZ VOUS</h3>
				<form enctype="multipart/form-data" method="post" action="traitement.php" id="myform" >
					<div class="col-md-5 col-xm-5 col-xs-offset-1 col-xs-11 form2">
							<span class="glyphicon glyphicon-user"></span>
							<label>Noms</label>
							<input id="name" class=" form-control inpt1 " type="text" name="nom" placeholder="veuillez entrer votre nom"  required="">
							<p></p>
							<span class="glyphicon glyphicon-user"></span>
							<label>Prenoms</label>
							<input class="form-control inpt2" type="text" name="prenom" placeholder="veuillez entrer votre nom"  id="prenom" required="">
							<p></p>
							<span class="glyphicon glyphicon-time"></span>
							<label>Date de naissance</label>
							<input class="form-control inpt3" type="date" name="datedenaissance" placeholder="Veuillez entrez votre date de naissance" id="datedenaissance" required="">
							<p></p>
							<span class="glyphicon glyphicon-envelope"></span>
							<label>email</label>
							<input class="form-control inpt3" type="email" name="email" placeholder="veuillez entrer votre adresse mail" id="mail" required="">
							<p></p>
							<span class="glyphicon glyphicon-lock"></span>
							<label>mot de passe</label>
							<input class="form-control inpt4" type="password" name="pwd" placeholder="Veuillez entrer votre mot de passe" id="pwd"  required=""><br>
							
							
					</div>
					<div class="col-md-offset-1 col-md-5 col-md-pull-1 col-xm-5 col-xs-offset-1 col-xs-11 form3">
							<span class="glyphicon glyphicon-earphone"></span>
							<label>Telephone</label>
							<input class="form-control inpt5" type="" name="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" placeholder="123-234-678" required="">
							<p></p>
							<span class="glyphicon glyphicon-flag"></span>
							<label>choix du pays</label>
							<select class="form-control sel1" placeholder="" name="pays" required="">
								<option selected="selected"  value="v" disabled="" >choix du pays </option>
								<option class="form-control" value="cameroun">cameroun</option>
								<option class="form-control" value="niger">niger</option>
								<option class="form-control" value="senegal">senegal</option>
								<option class="form-control" value="tchad">tchad</option>
							</select>
							<p></p>
							<span class="fa fa-transgender"></span>
							<label>Sexe</label>
							<select class="form-control sel2" placeholder="sexe" name="sexe" required="">
								<option class="form-control" value="femme">Femme</option>	
								<option class="form-control" value="homme">Homme</option>	
							</select>
							<p></p>
							<span class="glyphicon glyphicon-picture"></span>
							<label>Telecharger votre photo de pofil</label>
							<input class="form-control inpt7" type="file" name="photo" accept="image/*" onchange="loadFile(event)" required="" >
							<div class="col-md-offset-4 col-md-4 im" style="">
                            <img id="im"/>
                      		</div>
					</div>
					<div class="col-md-offset-2 col-md-4 col-xm-5 col-xs-6 bout">
						<input  type="reset"  class="  btn btn-block btn-info bout1"> 
						
					</div>
					<div class="  col-md-4 col-xm-5 col-xs-6">
						<input  type="submit"  class=" bout btn btn-block btn-info btn-success" >
					</div>
					<!-- <div class="col-md-3">
						<input  type="submit" name="enregistrer" class=" bout btn btn-block btn-info" >
					</div> -->
						
				</form>		
			</div>
		</div>
		
	</div>
	</body>
	<script type="text/javascript" src="boostrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
    var loadFile = function(event) {
        var profil = document.getElementById('im');
        profil.src = URL.createObjectURL(event.target.files[0]);
      };
    var	nom = document.getElementById('name');
    var prenom=document.getElementById('prenom');
    var pwd=document.getElementById('pwd');
      
   


	nom.addEventListener('change', testnom); 
	function testnom(){
	 	if(nom.value.length<4){ 
	 		nom.setCustomValidity('Veuillez entrer un nom comprenant au moins 4 caracteres');
			return false;
		}
		else if(contient_specialchart(nom.value)){ 
			nom.setCustomValidity('Le nom doit avoir au minimum 4 lettres sans les caracteres speciaux tels que @ ou % ...');
			return false;
		}else{
			return true;
		}
	}


	prenom.addEventListener('change', testprenom); 
	function testprenom(){		
	 	if(prenom.value.length<3){ 
	 		prenom.setCustomValidity('Veuillez entrer un prenom comprenant au moins 4 caracteres');	  
			return false;
		}
		else if(contient_specialchart(prenom.value)){  
			prenom.setCustomValidity('Le prenom doit avoir au minimum 4 lettres sans les caracteres speciaux tels que @ ou % ...');
			return false;
		}else{
			return true;
		}
	}
	function contient_specialchart(char){
		var special = ['@','!','~','<','>','?',' " '," ' ",'*','(',')','^','%','$','#','&','{','}','[',']',';',];

		for (var i = special.length - 1; i >= 0; i--) { 
			for (var id in char) {  
				if(char[id]==special[i]){
					return true;
				}
			}
		}
		return false;
	}

	pwd.addEventListener('change', testpwd);
	function testpwd(){
		if(pwd.value.length<8){
			pwd.setCustomValidity('Veuillez entrer un mot de passe comprenant au moins 8 lettres et caracteres speciaux');
			return false;
		}else{
			return true;
		}

	}

	var mail = document.getElementById('mail');

	mail.addEventListener('blur', testmail);
	function testmail(){
		var mail_indic='0';
		var mail_format=[],mail_ending=[];
		mail_format=['gmail.com','yahoo.com','yahoo.fr','hotmail.com' , 'icloud.com']; 

		for(var i=0; i<mail.value.length; i++){  
			if(mail.value[i]=='@'){	
				mail_indic=mail.value[i];
			}
		}
		
		if(mail_indic=='@'){         
			mail_ending=mail.value.split('@');  
			
			for (var i = 0; i < mail_format.length; i++) { 
				console.log(mail_format[i]);
				console.log(mail_format.length);
				if(mail_format[i]==mail_ending[1]){	
					return true;
				}
				else if(i==mail_format.length-1 && mail_format[i]!=mail_ending[1]){  
					mail.setCustomValidity('Le format de mail attendu est exemple@xmail.xxx');
					return false;
				}
			}
		}
		else{ 	
			mail.setCustomValidity('Le format de mail attendu est exemple@xmail.xxx');
			return false;
		}
	}


  </script>
  


</html>