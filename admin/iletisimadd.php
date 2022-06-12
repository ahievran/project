<?php 
require_once '../baglanti.php';
session_start();
                            $link=$_POST['link'];
                            $adres=$_POST['adres'];
                            $telefon=$_POST['telefon'];
                            $mail=$_POST['email'];
                            
                            
                            if(isset($_POST['submit'])){ 
                              
                                $insert = $db->query ("UPDATE iletisim SET maps_url='".$link."', iletisim_adres='".$adres."', iletisim_telefon='".$telefon."', iletisim_email='".$mail."' WHERE iletisim_id=1");
                               
                                    if($insert){
                                        echo '<script type="text/javascript">alert("Güncelleme Başarılı");</script>';
                                        echo '<meta http-equiv="refresh" content="0;URL=iletisim.php">';
                                    }
                                        else{
                                            echo '<script type="text/javascript">alert("Güncelleme Başarısız, Verilerinizi Kontrol Ediniz");</script>';
                                            echo '<meta http-equiv="refresh" content="0;URL=iletisim.php">';
                                        }            
                                
                            }
                            ?>
