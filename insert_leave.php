<?php
                            if(isset($_POST['emp']) && isset($_POST['dated']) && isset($_POST['datef'])&& isset($_POST['nbre'])&& isset($_POST['raison'])){
                                   if(!empty($_POST['emp']) && !empty($_POST['dated']) && !empty($_POST['datef']) && !empty($_POST['nbre']) && !empty($_POST['raison'])) {
                                    $id='';
                                    $Employee=$_POST['emp'];
                                    $Starding_At=$_POST['dated'];
                                    $Ending_On=$_POST['datef'];
                                    $Days=$_POST['nbre'];
                                    $Reason=$_POST['raison'];
                                }            
                            }              
                            $pdo =new PDO("mysql:host=localhost;dbname=smarthr","root","");
                            $sql="INSERT INTO leaves (id, Employee, Starting_At, Ending_On, Days, Reason) VALUES  ('','$Employee','$Starding_At', '$Ending_On' , '$Days' , '$Reason')";
                            $leave = $pdo->query($sql);
                            if($leave)
                            {
                                echo "<script>alert('Un conge a été ajouté');</script>";
                                echo"<script>window.location.href='leaves-employee.php';</script>";
                            }
                            else 
                            {
                                echo "<script>alert('Erreur d'ajout');</script>";
                                echo"<script>window.location.href='add_leave.php';</script>";
                            }
                        ?>