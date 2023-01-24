<?php
 $fieldName = $_POST["name"];
 $fieldNumber = $_POST["number"];
 $fieldOE = $_POST["ombro_esquerdo"];
 $fieldOD = $_POST["ombro_direito"];
 $fieldCE = $_POST["cotovelo_esquerdo"];
 $fieldCD = $_POST["cotovelo_direito"];
 $fieldDE = $_POST["dedo_esquerdo"];
 $fieldDD = $_POST["dedo_direito"];

 $fname = 'data.csv'; //NAME OF THE FILE

 //Only when the file doesnt exist
 if(!file_exists($fname)){
    $fcon = fopen($fname,'a');
    $header = ['name', 'age', 'left_s' , 'right_s', 'left_elb', 'right_elb', 'left_fing', 'right_fing'];
    fputcsv($fcon, $header);
    fclose($fcon);
 }

 //Adds the data
 $fcon = fopen($fname,'a');
 $csv_line = array($fieldName, $fieldNumber, $fieldOE, $fieldOD, $fieldCE, $fieldCD, $fieldDE, $fieldDD); //THIS IS WHERE YOU PUT THE FORM ELEMENTS ex: array('$fieldA','$fieldB',etc)
 fputcsv($fcon, $csv_line);
 fclose($fcon);

 echo("Sucesso!!");
 ?>