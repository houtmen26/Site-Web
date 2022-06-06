<?php
       
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                   
    function get_data() {
        $file_name='gfg'. '.json';
   
        if(file_exists("$file_name")) { 
            $current_data=file_get_contents("$file_name");
            $array_data=json_decode($current_data, true);
                               
            $extra=array(
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'],
                'email' => $_POST['email'],
                'motdepasse' => $_POST['motdepasse'],
                'numero' => $_POST['numero'],
                'role' => 1,
            );
            $array_data[]=$extra;
            return json_encode($array_data);
        }
    }
  
    $file_name='gfg'. '.json';
      
    if(file_put_contents("$file_name", get_data())) {
        header("Location:../php/login.php");exit();

        
    }                
    
}
       
?>