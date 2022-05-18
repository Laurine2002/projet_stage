<?php
    try  { 

        $database=new PDO('mysql:host=127.0.0.1;dbname=tchat','root',''); 
    }

    catch(Exeption $e){ 

        die($e->getMessage());

    };

        $reponse=$database->query('SELECT * FROM user order by id desc ');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEED RECEPTION</title>
    <link rel="stylesheet" href="./public/styles.css">
    <link rel="stylesheet" href="./src/styles.css">
    <script src="./tailwindCore.js"></script>
</head>
<body> 

 <table class="table">
  <thead>
    <tr>
        <th>Num</th>
        <th >Nom</th>
        <th >Prenom</th>
        <th>Tel</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
  </thead>
  <tbody>

  <?php       
//  while( $row = $reponse->fetch() ) { ?>
    <!-- <tr> -->
        <!-- <td><?php //echo $row['id'];?></td> -->
      <!-- <td ><?php //echo $row['nom'];?></td> -->
      <!-- <td><?php //echo $row['prenom'];?></td> -->
      <!-- <td><?php //echo $row['Tel'];?></td> -->
      <!-- <td><?php //echo $row['Email'];?></td> -->
      <!-- <td> <a class=" btn btn-primary"href="modifier.php?id=<?php //echo  $row['id'];?>">Modifier</a> -->
            <!--<a class="btn btn-danger"href="delete.php?id=<?php// echo  $row['id'];?>">Supprimer</a>
        </td> -->
      
    <!-- </tr> -->

    <?php //} ?> 
    
   
  </tbody>
</table>

    
    
    

 		<!-- <div class="container">
 			<div class="row justify-content-md-center">

 				<form method="POST" action="traitement.php" >


 					<div class="card-header text-white bg-primary">
 						Formulaire
 					</div>
 
					  <div class="card-body">
					    <div class="form-group">
					    	<label class="form-label"> Pseudo </label><br>

					    	<input type="text" class="form-control" name="pseudo">
					    </div> <br>


					    <div class="form-group">
					    	<labe class="form-label"> Message </label> <br>

					    	<textarea class="form-control" id="message" rows="3" name="sms"></textarea>
					    </div>  <br> <br> 
					    <div class="form-group">
					    	
					    	<button type="submit" class=" btn btn-primary"> Envoyer</button>
					    </div>
					  </div>
				</div>
				</div>
 					
 				</form>

 				

 			
 			</div>	
 		</div> -->
 
 </body>
 </html> 