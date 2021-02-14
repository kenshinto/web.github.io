<?php
          $elements = isset($_GET['elements']) ? $_GET['elements'] : 'home';
          $path = "elements/{$elements}.php";
          if(file_exists($path)){
                    if($elements == 'login'){
                              require "{$path}";
                          }else{
                                        require 'inc/header.php';
                                        require "{$path}";
                                         require 'inc/footer.php';
                              }
          }else{
                    require 'element/404.php';
          }

?>