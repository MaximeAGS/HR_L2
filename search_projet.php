

								<?php
                                       include('includes/config.php');
 
										if(isset($search) && !empty($_POST['projet']))
                                            {
                                               $projet=$_POST['projet'];
                                               $Rechercher=$_POST['search'];
                                            }
                                            $pdo =new PDO("mysql:host=localhost;dbname=smarthr","root","");
                                            $sql = "SELECT * from projets where nom='projet' ";
                                            $query = $dbh->prepare($sql);
                                            $query->execute();
										    $results=$query->fetchAll(PDO::FETCH_OBJ);
										    $cnt=1;
										    if($query->rowCount() > 0)
										        {
											        foreach($results as $row)
										        {
								?>
                                                <?php echo htmlentities($row->projet) ?>
                                                <?php $cnt+=1;
										}
													
										}?>