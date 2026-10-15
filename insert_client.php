<?php
                            

                            if(isset($_POST['id']) && isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['user']) && isset($_POST['email']) && isset($_POST['passwd']) &&  isset($_POST['num']) && isset($_POST['Departement']) &&   isset($_POST['Designations']) && isset($_POST['status']) && isset($_POST['photo'])&& isset($_POST['date'])){
                                   if(!empty($_POST['id']) && !empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['user']) && !empty($_POST['email']) && !empty($_POST['passwd']) && !empty($_POST['num']) && !empty($_POST['Departement']) &&  !empty($_POST['Designations']) && !empty($_POST['status'])  && !empty($_POST['photo'])&& !empty($_POST['date'])){
                
                                    $id_client=$_POST['id'];
                                    $FirstName=$_POST['prenom'];
                                    $LastName=$_POST['nom'];
                                    $UserName=$_POST['user'];
                                    $Email=$_POST['email'];
                                    $Password=$_POST['passwd'];
                                    $Phone=$_POST['num'];
                                    $Company=$_POST['Departement'];
                                    $Address=$_POST['Designations'];
                                    $Status=$_POST['status'];
                                    $Picture=$_POST['photo'];
                                    $date=$_POST['date'];
                                }            
                            }              
                            $pdo =new PDO("mysql:host=localhost;dbname=cena","root","");
                            $sql="INSERT INTO clients(id_client, FirstName, LastName, UserName, Email, Password, Phone, Company, Address, Status, Picture, date)  VALUES ('$id_client','$FirstName','$LastName','$UserName','$Email','$Password','$Phone','$Company','$Address','$Status','$Picture','$date')";
                            $clients = $pdo->query($sql);

                            if($clients)
                            {
                                echo "<script>alert('Un client a été ajouté');</script>";
                                echo"<script>window.location.href='clients.php';</script>";
                            }
                            else 
                            {
                                echo "<script>alert('Erreur d'ajout');</script>";
                                echo"<script>window.location.href='add_client.php';</script>";
                            }
                        ?>