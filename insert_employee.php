<?php
                        

                            if(isset($_POST['id']) && isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['user']) && isset($_POST['email']) && isset($_POST['passwd']) &&  isset($_POST['num']) && isset($_POST['Departement']) &&   isset($_POST['Designations']) && isset($_POST['Joining']) && isset($_POST['photo'])&& isset($_POST['time'])){
                                   if(!empty($_POST['id']) && !empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['user']) && !empty($_POST['email']) && !empty($_POST['passwd']) && !empty($_POST['num']) && !empty($_POST['Departement']) &&  !empty($_POST['Designations']) && !empty($_POST['Joining'])  && !empty($_POST['photo'])&& !empty($_POST['time'])){
                
                                    $Employee_id=$_POST['id'];
                                    $FirstName=$_POST['prenom'];
                                    $LastName=$_POST['nom'];
                                    $UserName=$_POST['user'];
                                    $Email=$_POST['email'];
                                    $Password=$_POST['passwd']; 
                                    $Phone=$_POST['num'];
                                    $Department=$_POST['Departement'];
                                    $Designation=$_POST['Designations'];
                                    $Joining_Date=$_POST['Joining'];
                                    $Picture=$_POST['photo'];
                                    $DateTime=$_POST['time'];
                                }            
                            }              
                            $pdo =new PDO("mysql:host=localhost;dbname=cena","root","");
                            $sql="INSERT INTO employees (Employee_id, FirstName, LastName, UserName, Email, Password, Phone, Department, Designation, Joining_Date, Picture, DateTime) VALUES ('$Employee_id','$FirstName','$LastName','$UserName','$Email','$Password','$Phone','$Department','$Designation','$Joining_Date','$Picture','$DateTime')";
                            $employees = $pdo->query($sql);

                            if($employees)
                            {
                                echo "<script>alert('Un employé a été ajouté');</script>";
                                echo"<script>window.location.href='employees.php';</script>";
                            }
                            else 
                            {
                                echo "<script>alert('Erreur d'ajout');</script>";
                                echo"<script>window.location.href='add_employees.php';</script>";
                            }
                        ?>