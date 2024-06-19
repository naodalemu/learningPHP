<?php 

class Person {

    private $id;
    public $fname;
    public $lname;
    private $salary;

    public function __construct($pId, $pFName, $pLName, $pSalary) {
        $this -> id = $pId;
        $this -> fname = $pFName;
        $this -> lname = $pLName;
        $this -> salary = $pSalary;
    }

    public function nativeSalary($country = "USA") {
        $rate = 1;

        if ($country == "Japan") {
            $rate = 110;
        } else if ($country == "Canada") {
            $rate = 0.9;
        } else if ($country == "UK") {
            $rate = 0.7;
        } else if ($country == "USA") {
            $rate = 1;
        }

        return $this -> salary * $rate;
    }

    public function __get($propertyRequested) {
        if ($propertyRequested == "id" && $propertyRequested == "salary") {
            return "You don't have permission to access id.";
        } else {
            return $this -> $propertyRequested;
        }
    }

    public function __set($propertyToModify, $value) {
        if ($propertyToModify == "salary" && $value > $this -> salary) {
            $this -> salary = $value;
        } else {
            echo "Failed to modify" . $propertyToModify."<br>";
        }
    }

}