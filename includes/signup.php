<?php
  include_once 'dbh.php';
   $nom = $_POST['nom'];
   $prénom = $_POST['prénom'];
   $email = $_POST['email'];
   $telephone = $_POST['telephone'];
   $date = $_POST['date'];
   $maladies = $_POST['maladies'];
   $hidden = $_POST['hidden'];  
   $sql = "INSERT INTO  patients (nom , prénom , email , telephone ,dateNaissance,maladie,idm) VALUES ('$nom','$prénom' , '$email','$telephone','$date','$maladies', '$hidden')";
   mysqli_query($con,$sql);
   header("Location: ../Randez-vous.php?signup=success");
  
    
