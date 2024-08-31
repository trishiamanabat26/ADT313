
<h1> Hands-on Activity</h1>
<?php
$StudentID=0;
$table= array(
    "header"=> array(
        "StudentID",
        "Firstname",
        "Middlename",
        "Lastname",
        "Section",
        "Course",
        "YearLevel"
    ),
    "Body" =>[
                array(
                    "Firstname" => "Trishia",
                    "Middlename" => "Landicho",
                    "Lastname" => "Mañabat",
                    "Section" => "3A",
                    "Course" => "BSIT",
                    "YearLevel" => "3"
                ),
                array(
                    
                    "Firstname" => "Cristan",
                    "Middlename" => "Pardilla",
                    "Lastname" => "Legaspi",
                    "Section" => "3A",
                    "Course" => "BSIT",
                    "YearLevel" => "3"
                ),
                array(
                    
                    "Firstname" => "Sebastian",
                    "Middlename" => "Palomique",
                    "Lastname" => "Porciuncula",
                    "Section" => "3A",
                    "Course" => "BSIT",
                    "YearLevel" => "3"
                ),
                array(
                    
                    "Firstname" => "Sebastian",
                    "Middlename" => "Palomique",
                    "Lastname" => "Porciuncula",
                    "Section" => "3A",
                    "Course" => "BSIT",
                    "YearLevel" => "3"
                ),
                array(
                    
                    "Firstname" => "Trishia",
                    "Middlename" => "Landicho",
                    "Lastname" => "Mañabat",
                    "Section" => "3A",
                    "Course" => "BSIT",
                    "YearLevel" => "3"
                ),
                array(
                    
                    "Firstname" => "Trishia",
                    "Middlename" => "Landicho",
                    "Lastname" => "Mañabat",
                    "Section" => "3A",
                    "Course" => "BSIT",
                    "YearLevel" => "3"
                ),
                array(
                    
                    "Firstname" => "Trishia",
                    "Middlename" => "Landicho",
                    "Lastname" => "Mañabat",
                    "Section" => "3A",
                    "Course" => "BSIT",
                    "YearLevel" => "3"
                ),
                array(
                    
                    "Firstname" => "Trishia",
                    "Middlename" => "Landicho",
                    "Lastname" => "Mañabat",
                    "Section" => "3A",
                    "Course" => "BSIT",
                    "YearLevel" => "3"
                ),
                array(
                   
                    "Firstname" => "Trishia",
                    "Middlename" => "Landicho",
                    "Lastname" => "Mañabat",
                    "Section" => "3A",
                    "Course" => "BSIT",
                    "YearLevel" => "3"
                ),
                array(
                    
                    "Firstname" => "Trishia",
                    "Middlename" => "Landicho",
                    "Lastname" => "Mañabat",
                    "Section" => "3A",
                    "Course" => "BSIT",
                    "YearLevel" => "3"
                )
        ]
                );
$StudentID=0;


echo "<table border= '5'>";
echo "<tr>";

            foreach($table["header"] as $header){ 
            echo "<th>$header</th>";
        } 
        echo "</tr>";

    
     foreach ($table["Body"] as $row){
         echo "<tr>";
         echo "<td>".($StudentID + 1)."</td>"; 
            $StudentID++;
         foreach ($table["header"] as $header){ 
         if($header !== "StudentID"){
           $x = str_replace('','',$header);
           echo "<td>{$row[$x]}</td>";
         }
   }
            echo "</tr>";
      }
            ?>

        