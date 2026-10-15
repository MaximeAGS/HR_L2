<?php
                            

                            if(isset($_POST['identifiant']) && isset($_POST['title'])  && isset($_POST['heure'])){
                                   if(!empty($_POST['identifiant']) && !empty($_POST['title'])  && !empty($_POST['heure'])) {
                                    $id=$_POST['identifiant'];
                                    $Department=$_POST['title'];
                                    $Date=$_POST['heure'];
                                }            
                            }              
                            $pdo =new PDO("mysql:host=localhost;dbname=smarthr","root","");
                            $sql="INSERT INTO departments(id, Department, Date) VALUES   ('$id','$Department','$Date')";
                            $departments = $pdo->query($sql);

                            if($departments)
                            {
                                echo "<script>alert('Un departement a été ajouté');</script>";
                                echo"<script>window.location.href='departments.php';</script>";
                            }
                            else 
                            {
                                echo "<script>alert('Erreur d'ajout');</script>";
                                echo"<script>window.location.href='add_departments.php';</script>";
                            }
                        ?>