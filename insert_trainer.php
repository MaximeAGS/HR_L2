<?php
                            

                            if(isset($_POST['identifiant']) && isset($_POST['nom'])  && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['contact']) && isset($_POST['formation'])){
                                   if(!empty($_POST['identifiant']) && !empty($_POST['nom'])  && !empty($_POST['prenom'])  && !empty($_POST['email'])  && !empty($_POST['contact'])) {
                                    $id=$_POST['identifiant'];
                                    $nom=$_POST['nom'];
                                    $prenom=$_POST['prenom'];
                                    $email=$_POST['email'];
                                    $contact=$_POST['contact'];
                                    $typetraining=$_POST['formation'];
                                }            
                            }              
                            $pdo =new PDO("mysql:host=localhost;dbname=smarthr","root","");
                            $sql="INSERT INTO trainer(id, nom, prenom , email , contact , typetraining) VALUES   ('$id','$nom','$prenom' , '$email' , '$contact', '$typetraining')";
                            $trainer = $pdo->query($sql);

                            if($trainer)
                            {
                                echo "<script>alert('Un formateur a été ajouté');</script>";
                                echo"<script>window.location.href='trainers.php';</script>";
                            }
                            else 
                            {
                                echo "<script>alert('Erreur d'ajout');</script>";
                                echo"<script>window.location.href='add_trainer.php';</script>";
                            }
                        ?>