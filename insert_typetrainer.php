<?php
                            

                            if(isset($_POST['identifiant']) && isset($_POST['nom'])  && isset($_POST['des'])){
                                   if(!empty($_POST['identifiant']) && !empty($_POST['nom'])  && !empty($_POST['des'])) {
                                    $id=$_POST['identifiant'];
                                    $type=$_POST['nom'];
                                    $description=$_POST['des'];
                                }            
                            }              
                            $pdo =new PDO("mysql:host=localhost;dbname=cena","root","");
                            $sql="INSERT INTO typetrainer(id, type, description ) VALUES   ('$id','$type','$description')";
                            $trainer = $pdo->query($sql);

                            if($trainer)
                            {
                                echo "<script>alert('Une formation a été ajoutée');</script>";
                                echo"<script>window.location.href='training-type.php';</script>";
                            }
                            else 
                            {
                                echo "<script>alert('Erreur d'ajout');</script>";
                                echo"<script>window.location.href='add_typetrainer.php';</script>";
                            }
                        ?>