<?php
include_once 'Database.php';
include_once 'BloodTest.php';
include_once 'TestingInterface.php';
 class BloodTest implements Test{
    public $Hameoglobin;
    public $Neutrophilis;
    public $Lymphocytes;
    function AddTesting($X , $Patientid)
    {


        $mysqli = new mysqli("localhost","root","","mydb");

        // Check connection
        if ($mysqli -> connect_errno) {
          echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
          exit();
        }


        // prepare and bind
        $stmt = $mysqli -> prepare("INSERT INTO employees (id , name, address, salary) VALUES (?,?, ?, ?)");
        $stmt -> bind_param("sssi", $name, $address, $salary , $param_id);

        // set parameters and execute

        $name = $X->Hameoglobin;
        $address = $X->Neutrophilis;
        $salary = $X->Lymphocytes;
        $param_id= 4;
        $stmt -> execute();

        echo "New records created successfully";

        $stmt -> close();
        $mysqli -> close();
        }
    }


?>