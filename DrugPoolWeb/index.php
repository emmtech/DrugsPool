<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Drugs Search</title>
    <link rel ="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" href="images/icon.jpg"/>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- NAV SECTION -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-responsive">
<!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <h2><a href ="index.php" style="color:#fff;">Pharm-Drug.ng</a></h2>
        </div>

<!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="#">

      
  </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- home section-->
<!-- home section-->
<!-- home section-->
<div id = "picture-sec">
     <div class ="container">
        <div class = "row">
             <div class="col-sm-6 col-md-4" id="mypicture">
                  <img src ="images/logo2.jpg" class="img-circle center-block">
             </div>

                <form action="index.php" method='GET' class="center-block">
                <div style="text-align: center"><a href="drugsinstore.php"><h3>Click to view drugs</h3></a></div>
                <center><div style ="text-align: center; font-family: arial; width: 50px; height: 30px; -webkit-border-radius:100px; -moz-border-radius:100px; background: green; color:white"><h3>OR</h3></div></center>
                <h1>Pharm-Drug.ng</h1>
                  <input type="text" class="form-control"  name="drug-search" placeholder="Search for drug" /></br>
                  <input type="submit" name="submit" class="btn btn-success btn-sm" value = "Search Directory" ></br>
                  </form>
               </div>
               <div id="result">
             	
<?php
if(isset($_GET['submit'])){
	$search = $_GET['drug-search']; 
		$j = 0; 
		$mydata = explode(" ", $search);
		$query = "SELECT * FROM drug_tbl WHERE ";
		foreach ($mydata as $key) {
			$j++;
			if($j == 1)
				$query .="drugs_desc LIKE '%$key%'";
			else
				$query .="AND drugs_desc LIKE '%$key%'";
		}
		include("dbconnect.php");
		$query = mysqli_query($dbconn, $query);
		$numrows= mysqli_num_rows($query);
		if($numrows > 0){
			while ($result = mysqli_fetch_assoc($query)){
				$drugName = $result ['drug_name'];
				$disease = $result ['disease_cure'];
				$dosage = $result ['drug_dosage'];
				$effect = $result ['adverse_effect'];
				$manu = $result ['manufacturer']; 
				//$link = $result['drug_link'];

				echo "<div style='width:750px'>"."<h2><a style=\"color:blue\" href=\"drugsfulldescription.php?drugs_id=$result[drugs_id]\" target=\"_blank\">$drugName</a></h2><b u style='color:red;'>Diseases:</b> $disease <br/><b style='color:red;'> Dosage:</b> $dosage<br /><b style='color:red;'style='color:red;'>Adverse Effect:</b> $effect .\"<br /><b style='color:red;'style='color:red;'>Manufacturer: </b>$manu<br /><br />"."</div>";
			}
		}else{
			echo "Result not found for \"<b>$search</b>\"";
		}
	}
?>
             </div>
             </div>
        </div>
    </div>
     <br>
         <br>
     </div>
    <hr> 

        <div>
            <div class ="row well text-center">
                <div class="col-xm-12 col-sm-4 col-md-3">
                   <strong> Medical Advice<span class="glyphicon glyphicon-arrow-right" style ="padding-left:20px;"></span></strong>
                </div>
                <div class="col-xm-12 col-sm-6 col-md-3 ">
                       <em> Self Medication Is Wrong </em>
                    </div>
                <div class="col-xm-12 col-sm-6 col-md-3 ">
                    <em>Make Sure you Consult a Doctor when feeling ill</em>
                </div>
                  
				    <div class="col-xm-12 col-sm-6 col-md-3 ">
                      <em> Be carefull of over the counter Drugs </em>
                    </div>

            </div>
        </div>
        <div class ="col-sm-12 col-md-8 ">
            <h2 class="text-center page-header">Health Tips... <span class ="glyphicon glyphicon-user " aria-hidden="true" style="padding-left:10px;"> </span> </h2>
                <div class="about "><strong style ="color:gold;"> Pharm-Drugs </strong>advices you:<em><p>Eatat good food<p><br><p>Consult a doctor when ill.</p></p><p>Exercise daily</p><p>Always stay off quacks.</p>Visit only registered pharmaceutical outlets for drugs purchase. <br></em></div>
        </div>
        <div class ="row">
            <div class ="col-sm-12 col-md-4">
                <h2 class="text-center page-header">Address...<span class ="glyphicon glyphicon-briefcase "  aria-hidden="true" style="padding-left:10px;"></span></h2>
                <div class="bio">
                              <div class="col-sm-6 col-md-4 text-center" style="padding-top:60px;">
                 <h3> Pharm-Drugs.ng</h3>
                <span class="glyphicon glyphicon-map-marker" aria-hidden="true">Ikeja,Lagos state, Nigeria</span>
            </div>
            
             <div class="col-sm-12 col-md-4 connect center-block text-center" >
               <h3 class="page-header"> Contact Pharm-Drugs</h3>
               <div>  <i style="padding-right:10px;"><img src = "images/fone.png" height="15px" width="15px" alt= "email"></i><em>  +(234)8068713465</em>
               </div>
              <div> <i style="padding-right:10px;"><img src = "images/email.png" alt="email" height="15px" width="15px" alt= "email"></i><em>Pharm-Drugs@gmail.com</em>
               </div>
                <ul class="list-inline list-unstyled">
                    <li><a href="https//:facebook.com/ Pharm-Drugs.7"><img src ="images/facebook.png"></a></li>
                    <li><a href="https://twitter.com/Pharm-Drugs"><img src ="images/twitter.png"></a></li>
             
                </ul>
        </div>
            
    </div>
  </div>
    <hr>
    <footer class="text-center">
      <div class ="container ">
        <div id="Pharm-Drugs">
            profer drug solutions... in a world of possibilities!
       </div>
          <div id="twit" style="font-family:tahoma;"> <img src ="images/twitter.png" height="30px" width="30px"> <a href="https://twitter.com/Pharm-Drugs"> @Pharm-Drugs </a>
                <p>
       </div>
       <div >
          &copy 2017 | All rights reserved</p>
        </div>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
