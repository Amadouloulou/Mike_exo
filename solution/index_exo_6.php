<?php
//! = si il est pas vide
if(!empty($_POST)){
	$mike = explode(" ", rtrim($_POST["Mike"]));

	if(count($mike) < 4)
		echo " Nombre de paramétre pas assez important ";

	else if(count($mike) > 4)
		echo "	Nombre de parametre trop important";

	else if($mike[0] != "Mike")
		echo "	premiere valeur incorrecte";

	else if(!ctype_digit($mike[1]))
		echo "Votre parametre $mike[1] n'ai pas correct";

	else if(!ctype_digit($mike[3]))
	 	echo "Votre parametre $mike[3] n'ai pas correct";

	else{
		switch ($mike[2])
	    {
	        case '+':
	        $resultat = ($mike[1]+$mike[3]);
	        break;
	        case '*':
	        $resultat = ($mike[1]*$mike[3]);
	        break;
	        case '-':
	        $resultat = ($mike[1]-$mike[3]);
	        break;
	        case '/':
			if ($mike[3] == 0){
				$resultat = "Expression invalide";
			}
			else{
				$resultat = ($mike[1]/$mike[3]);
			}
	        break;
			case '%':
	        $resultat = $mike[1]%$mike[3];
	        break;

	    }
		echo $resultat;
	}


}
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title> Piscine </title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	</head>
	<body>
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form method="POST">
					<div class="form-group">
						<label for="text">Entre votre valeur:</label>
						<input type="text" class="form-control" id="Mike" name="Mike">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	</body>
</html>
