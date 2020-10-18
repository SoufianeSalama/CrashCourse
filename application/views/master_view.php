<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html>

    <head>
        <title>First Bootstrap Website</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <!-- Brand -->
                <a class="navbar-brand" href="#">CrashCourse</a>
              
                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav mr-auto">
                    </ul>
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="http://google.be">Services</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Portfolio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="#"> <i class="fab fa-linkedin" style="font-size: 25px;"></i> </a>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-github-square" style="font-size: 25px;"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                  </ul>
                </div>
              </nav>
        </header>


        <div class="container">
            <h1>Records</h1>
            <p>These are all records of the DB.</p>
           
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Brand</th>
                    <th>Model</th>
                  </tr>
                </thead>
                <tbody>
                 <?php
                    foreach($aRecords as $aRecord){
                        echo "<tr>";
                        echo "<td>" . $aRecord->brand . "</td>";
                        echo "<td>" . $aRecord->model . "</td>";
                        echo "</tr>";

                    }

                 ?>

                 <!-- <tr>
                     <td>LG</td>
                     <td>59-54668</td>
                </tr> -->
                  
                </tbody>
              </table>

           

        </div>
    
    </body>
</html>