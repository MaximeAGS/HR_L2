<?php
                            

                            if(isset($_POST['identifiant']) && isset($_POST['title']) && isset($_POST['holidays']) && isset($_POST['heure'])){
                                   if(!empty($_POST['identifiant']) && !empty($_POST['title']) && !empty($_POST['holidays']) && !empty($_POST['heure'])) {
                                    $id=$_POST['identifiant'];
                                    $nom=$_POST['title'];
                                    $description=$_POST['holidays'];
                                    $date=$_POST['heure'];
                                }            
                            }              
                            $pdo =new PDO("mysql:host=localhost;dbname=smarthr","root","");
                            $sql="INSERT INTO projets(id, nom, description, date) VALUES  ('$id','$nom','$description','$date')";
                            $projets = $pdo->query($sql);

                            if($projets)
                            {
                                echo "<script>alert('Un projet a été ajouté');</script>";
                                echo"<script>window.location.href='projects.php';</script>";
                            }
                            else 
                            {
                                echo "<script>alert('Erreur d'ajout');</script>";
                                echo"<script>window.location.href='add_projet.php';</script>";
                            }
                        ?>