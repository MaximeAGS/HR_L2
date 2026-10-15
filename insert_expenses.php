<?php
                            if(isset($_POST['title']) && isset($_POST['depart']) && isset($_POST['prix']) && isset($_POST['person'])){
                                   if(!empty($_POST['title']) && !empty($_POST['depart']) && !empty($_POST['prix']) && !empty($_POST['person'])) {
                                    $id='';
                                    $title=$_POST['title'];
                                    $date_achat=$_POST['depart'];
                                    $prix=$_POST['prix'];
                                    $personnel=$_POST['person'];
                                }            
                            }              
                            $pdo =new PDO("mysql:host=localhost;dbname=cena","root","");
                            $sql="INSERT INTO expenses(id, title, date_achat, prix, personnel) VALUES  ('','$title','$date_achat', '$prix','$personnel')";
                            $expense = $pdo->query($sql);

                            if($expense)
                            {
                                echo "<script>alert('Une dépense a été ajoutée');</script>";
                                echo"<script>window.location.href='expenses.php';</script>";
                            }
                            else 
                            {
                                echo "<script>alert('Erreur d'ajout');</script>";
                                echo"<script>window.location.href='add_expenses.php';</script>";
                            }
                        ?>