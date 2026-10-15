<?php
                                    
                            if(isset($_POST['formation']) && isset($_POST['formateur'])  && isset($_POST['employé'])){
                                   if(!empty($_POST['formation']) && !empty($_POST['formateur'])  && !empty($_POST['employé'])) {
                                    $idtypetrainer=$_POST['formation'];
                                    $idtrainer=$_POST['formateur'];
                                    $Employee_id=$_POST['employé'];
                                }            
                            }              
                            $pdo =new PDO("mysql:host=localhost;dbname=smarthr","root","");
                            $sql="INSERT INTO suivre(id, `idtypetrainer`, `Employee_id`) VALUES ('3','$idtypetrainer','$Employee_id' )";
                            $sql2="INSERT INTO former(`idtypetrainer`, `idtrainer`) VALUES ('$idtypetrainer','$idtrainer')";
                            $former=$pdo->query($sql2);
                            $departments = $pdo->query($sql);

                            if($departments && $former)
                            {
                                
                                echo "<script>alert('une formationa été ajoutée');</script>";
                                echo"<script>window.location.href='training.php';</script>";
                            }
                            else 
                            {
                                echo "<script>alert('Erreur d'ajout');</script>";
                                echo"<script>window.location.href='ad_formation.php';</script>";
                            }
                        ?>