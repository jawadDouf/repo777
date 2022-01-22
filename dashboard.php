<?php
session_start();
require 'includes/checklogin.php';
include 'includes/dbh.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="pictures">
</head>
<body>
 <nav class="dashboard-links">
     <div >
         <img src="pictures/Cabinet Pro.svg" alt="">
     </div>
     <div>
        <div>
            <a href=""> <img src="pictures/home 1.svg" alt="">
             <h3>Dashboard</h3></a>
         </div>
         <div >
            <a href=""><img src="pictures/setting 1.svg" alt="">
             <h3>settings</h3></a>
        </div>
        <div >
            <a href=""><img src="pictures/log-out 1.svg" alt="">
             <h3><a href = "Randez-vous.php">Log out</h3></a>
        </div>
      </div>
    
      
 </nav>
 <div class="user-notif">
    <a href=""><img src="pictures/notification 1.svg" alt=""></a>
    <a href=""><img src="pictures/user 1.svg" alt=""><span>  rafikaida@gmail.com</span></a>
 </div>
 <div class="header">
 <div class="header-numbers">
    <div class="numbers-elements">
        <img src="pictures/patient.svg" alt="">
        <h3><?php 
          $sql = "SELECT * FROM  patients ";
          $operation = mysqli_query($con,$sql);    
          $allPatients = mysqli_num_rows($operation);
          echo "$allPatients";
        ?></h3>
        <h3>general patient</h3>
    </div>

    <div class="numbers-elements">
        <img src="pictures/people.svg" alt="">
        <h3><?php  echo "$_SESSION[docPatients]";?></h3>
        <h3>votre patient</h3>
    </div>
    
    <div class="numbers-elements">
        <img src="pictures/cloud.svg" alt="">
        <h3>10</h3>
        <h3>compte cloude</h3>
    </div>

    <div class="numbers-elements">
        <img src="pictures/annual.svg" alt="">
        <h3>10</h3>
        <h3>services mois</h3>
    </div>
    <button>
        <span class = "buttonIcon"><i class="fas fa-user-plus"></i></span>   
        <span class = "buttonText">Ajouter patient</span>  
    </button>

    
</div>
<div>
    <table>
<tr>
        <th>nom</th>
        <th>E-mail</th>
        <th>Date naissance</th>
        <th>Phone</th>
        <th>maladie</th>
        <th>options</th>
</tr>
<?php
        print_r($_SESSION);
        $sql = "SELECT * FROM  patients where idm = $_SESSION[id]";
        $result = mysqli_query($con,$sql);    
        // $result = $con -> query($sql);
        $resultCheck = mysqli_num_rows($result);//get the number of rows
        if($resultCheck > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr><td>" . $row['nom']  .  " " . $row['prénom']  .  "</td><td>" . $row['email'] . "</td><td>"  . $row['dateNaissance'] . "</td><td>". $row['telephone'] . 
                "</td><td>". $row['maladie'] .  "</td><td>" ."<span class = 'icon'><i class='fas fa-edit'></i></span>"."<span class = 'icon'><i class='fas fa-trash-alt'></i></span>"."</td></tr>";
                
            }
            echo "</table>";
        }
    ?>
</div>
</div>


</div>


<script src="https://kit.fontawesome.com/f694c8cce8.js" crossorigin="anonymous"></script>
<script src="dashboard.js"></script>
</body>
</html><!-- <form action="" class="header-numbers-content">
        <div class="add">
            <div class="add-button">
                <img src="pictures/add.svg" alt="">
                <a href="">ajouter patient</a>
            </div>
        </div>
        <br>
        <div class="form-titles">
            <div><p>name</p></div>
            <div><p>name</p></div>
            <div><p>name</p></div>
            <div><p>name</p></div>
            <div><p>name</p></div>
        </div>
        <div class="form-titles">
            <p>name</p> 
            <p>name</p>
            <p>name</p>
            <p>name</p>
            <p>name</p>
        </div>
    
      </form> -->