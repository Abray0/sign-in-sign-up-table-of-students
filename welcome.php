<?php
session_start();
require_once 'config.php';
$sql="SELECT *  FROM Projet ";
$query=mysqli_query($conn,$sql);
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Welcome</title>
     <link rel="stylesheet" href="style.css.css
   </head>
   <body>
     <section>
       <ul>
       <li>  <a href="logout.php" class="btn">Deconnexion</a></li>
       </ul>
       <div class="container">
     <h1>Liste des ETUDIANTS 2021-2022</h1>
     <table id="students">
     <tr>
     <th>Nom</th>
     <th>Prenom</th>
     <th>Email</th>
    </tr>
    <?php
    while($row=mysqli_fetch_assoc($query)){
      echo "<tr>";
      echo "<td>";
      echo $row['username'];
      echo "</td>";
      echo "<td>";
      echo $row['Nom'];
      echo "</td>";
      echo "<td>";
      echo $row['Prénom'];
      echo "</td>";
      echo "<td>";
      echo $row['Email'];
      echo "</td>";
      echo "<td>";
      echo $row['Apogee'];
      echo "</td>";
      
      echo "</tr>";}
      ?>
    </table>
    </div>
    </section>
   </body>
 </html>