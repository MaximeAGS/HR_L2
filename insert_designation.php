                    <?php
                            if(isset($_POST['identifiant']) && isset($_POST['title']) && isset($_POST['depart']) && isset($_POST['heure'])){
                                   if(!empty($_POST['identifiant']) && !empty($_POST['title']) && !empty($_POST['depart']) && !empty($_POST['heure'])) {
                                    $id=$_POST['identifiant'];
                                    $Designation=$_POST['title'];
                                    $Department=$_POST['depart'];
                                    $Date=$_POST['heure'];
                                }            
                            }              
                            $pdo =new PDO("mysql:host=localhost;dbname=smarthr","root","");
                            $sql="INSERT INTO designations(id, Designation, Department, Date) VALUES  ('$id','$Designation', '$Department','$Date')";
                            $department = $pdo->query($sql);

                            if($department)
                            {
                                echo "<script>alert('Une Désignatin a été ajoutée');</script>";
                                echo"<script>window.location.href='designations.php';</script>";
                            }
                            else 
                            {
                                echo "<script>alert('Erreur d'ajout');</script>";
                                echo"<script>window.location.href='add_designation.php';</script>";
                            }
                        ?>