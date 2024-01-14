<?php   
                                include "config.php";
                                
                                $email = $_POST['email'];
                                  $password = mysqli_real_escape_string($conn,md5($_POST['password']));
                                  if($email==""||$password==""){
                                      echo 0;
                                  }else{
                                      $sql="SELECT * FROM registration  WHERE email = '{$email}' AND password= '{$password}' ";
                                      $result = mysqli_query($conn, $sql) or die("Query Failed.");
                                      
                                      if(mysqli_num_rows($result) > 0){
                                    
                                       while($row = mysqli_fetch_assoc($result)){
                                             session_start();
                                            $_SESSION["id"] = $row['id'];
                                            $_SESSION["name "] = $row['name'];
                                            $_SESSION["email"] = $row['email'];
                                            $_SESSION["roll"] = $row['roll'];
                                          }
                                       echo "<script>alert('you log in succesfuly');</script>";
                                      }else{
                                       echo 2;
                                     }
   
   
                                   }
                        ?>