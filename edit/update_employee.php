<?php
                        

                            if(isset($_POST['identifiant']) && isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['user']) && isset($_POST['email']) && isset($_POST['passwd']) &&  isset($_POST['num']) && isset($_POST['Departement']) &&   isset($_POST['Designations']) && isset($_POST['salaire']) && isset($_POST['Joining']) && isset($_POST['time'])){
                                   if(!empty($_POST['identifiant']) && !empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['user']) && !empty($_POST['email']) && !empty($_POST['passwd']) && !empty($_POST['num']) && !empty($_POST['Departement']) &&  !empty($_POST['Designations'])  && !empty($_POST['salaire']) && !empty($_POST['Joining']) && !empty($_POST['time'])){
                
                                    $Employee_id=$_POST['identifiant'];
                                    $FirstName=$_POST['prenom'];
                                    $LastName=$_POST['nom'];
                                    $UserName=$_POST['user'];
                                    $Email=$_POST['email'];
                                    $Password=$_POST['passwd']; 
                                    $Phone=$_POST['num'];
                                    $Department=$_POST['Departement'];
                                    $Designation=$_POST['Designations'];
                                    $salary=$_POST['salaire'];
                                    $Joining_Date=$_POST['Joining'];
                                    $DateTime=$_POST['time'];
                                    $id=$_GET['id'];
                                }            
                            }              
                            $pdo =new PDO("mysql:host=localhost;dbname=smarthr","root","");
                            $sql="UPDATE  employees SET  Employee_id='$Employee_id', FirstName='$FirstName', LastName='$LastName', UserName='$UserName', Email='$Email', Password='$Password', Phone='$Phone', Department='$Department', Designation='$Designation', salary='$salary', Joining_Date='$Joining_Date', DateTime='$DateTime' where Employee_id='$id' ";
                            $edit = $pdo->query($sql);

                            if($edit)
                            {
                                echo "<script>alert('Un employé a été modifié');</script>";
                                echo"<script>window.location.href='../employees.php';</script>";
                            }
                            else 
                            {
                                echo "<script>alert('Erreur d'ajout');</script>";
                                echo"<script>window.location.href='../edit_employé.php';</script>";
                            }
                        ?>