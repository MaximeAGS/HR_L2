<?php
                            if(isset($_POST['title']) && isset($_POST['montant']) && isset($_POST['date'])){
                                   if(!empty($_POST['title']) && !empty($_POST['montant']) && !empty($_POST['date'])) {
                                    $id='';
                                    $title=$_POST['title'];
                                    $montant=$_POST['montant'];
                                    $date=$_POST['date'];
                                }            
                            }              
                            $pdo =new PDO("mysql:host=localhost;dbname=cena","root","");
                            $sql="INSERT INTO budget(id, title, montant, date) VALUES  ('','$title','$montant', '$date')";
                            $budget = $pdo->query($sql);

                            if($budget)
                            {
                                echo "<script>alert('Un budget a été ajoutée');</script>";
                                echo"<script>window.location.href='budget.php';</script>";
                            }
                            else 
                            {
                                echo "<script>alert('Erreur d'ajout');</script>";
                                echo"<script>window.location.href='add_budget.php';</script>";
                            }
                        ?>