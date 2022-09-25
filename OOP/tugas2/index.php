<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tugas 2 | OOP PHP</title>
   <link rel="stylesheet" href="style.css">
</head>
<div class="container">
            <div class="header">
                <h1>MONYET</h1>
        </div>
<body>
<div class="kotak">
            <div class="kotak1">
   <?php

   interface Bintang
   {
      public function Makan();
      public function Berjalan();
      public function Bersuara();
      public function Sepeda();
   }
   class Monyet implements Bintang
   {
      public function Makan()
      {
          return "Monyet dapat berjalan<br/>";
       }
 
       public function Berjalan()
       {
          return "Monyet memakan pisang<br/>";
       }
 
       public function Bersuara()
       {
          return "Monyet dapat bersuara<br/>";
       }
       public function Sepeda()
       {
          return "Tapi Juga dapat naik sepeda apa<br/>";
       }
    }
 
    class Lainnya implements Bintang
    {
       public function Makan()
       {
          return "";
       }
       public function Berjalan()
       {
          return "";
       }
 
       public function Bersuara()
       {
          return "";
       }
       public function Sepeda()
       {
          return "Monyet juga dapat menaiki sebuah sepeda<br/>";
       }
    }

    ?>
   <p>
          <?php
          $Monyet = new Monyet;
          $Lainnya = new Lainnya;
          echo "<b>Kemampuan Monyet : </b><br/><br>";
          echo $Monyet->Makan();
          echo $Monyet->Berjalan();
          echo $Monyet->Bersuara();
 
          echo "<b><br>Kemampuan Lainnya Apabila Dilatih : </b><br/><br>";
          echo $Monyet->Sepeda();
          ?>
       </p>
    </div>
 </body>
 
 </html>