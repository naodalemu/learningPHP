<?php 

class Person {

    private $id;
    private $fname;
    private $lname;
    private $salary;

    const RACE = "Human";

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

    public function displayHeading($tag) {
        if (substr($this -> id, 0, 1) == "T") {
            echo "<$tag>Titled Person</$tag>";
        }
    }

    public function __get($propertyRequested) {
        if ($propertyRequested == "id") {
            return "You don't have permission to access id.";
        } else {
            return $this -> $propertyRequested;
        }
    }

    public function __set($propertyToModify, $value) {
        if ($propertyToModify == "salary" && $value < $this -> salary) {
            $this -> salary = $value;
        } else {
            echo "Failed to modify " . $propertyToModify."<br>";
        }
    }

    public function __toString() {
        return
            "Race = " . self::RACE . 
            "<br>Id = " . $this -> id . 
            "<br>First Name = " . $this -> fname . 
            "<br>Last Name = " . $this -> lname . 
            "<br>Salary = " . $this -> salary;
    }

}