<?php
                            

                            if(isset($_POST['identifiant']) && isset($_POST['title']) && isset($_POST['holidays']) && isset($_POST['heure'])){
                                   if(!empty($_POST['identifiant']) && !empty($_POST['title']) && !empty($_POST['holidays']) && !empty($_POST['heure'])) {
                                    $id=$_POST['identifiant'];
                                    $Holiday_Name=$_POST['title'];
                                    $Holiday_Date=$_POST['holidays'];
                                    $DateTime=$_POST['heure'];
                                }            
                            }              
                            $pdo =new PDO("mysql:host=localhost;dbname=cena","root","");
                            $sql="INSERT INTO holidays(id, Holiday_Name, Holiday_Date, DateTime) VALUES  ('$id','$Holiday_Name','$Holiday_Date','$DateTime')";
                            $holidays = $pdo->query($sql);

                            if($holidays)
                            {
                                echo "<script>alert('Un congé a été ajouté');</script>";
                                echo"<script>window.location.href='holidays.php';</script>";
                            }
                            else 
                            {
                                echo "<script>alert('Erreur d'ajout');</script>";
                                echo"<script>window.location.href='add_holidays.php';</script>";
                            }
                        ?>