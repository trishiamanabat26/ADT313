<h1>Condition</h1>

<?php 
$age=17;
if ($age >= 18)  { 
    echo "Legal age";
}else of($age) { 

}else { 
    echo "Minor";
}


$ageLabel =($age >=18) ? '18+' :'17-';
echo $ageLabel; 
 
switch ($role) {
    case 'admin':
        #code...
        echo 'you have full access';
        break;
    
        case 'student':
        #code...
        echo 'you can only access...';
        break;
    
        case 'instructor':
        #code...
        echo 'you have limited access to...''
        break;
      
       
}
  

 ?>
