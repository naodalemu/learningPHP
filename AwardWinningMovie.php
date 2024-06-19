<?php

include "movies.php";
class PersonTitle extends Person {
    private $title;

    public function __construct($pId, $pFName, $pLName, $pSalary, $pTitle) {
        parent::__construct($pId, $pFName, $pLName, $pSalary);
        $this->title = $pTitle;
    }

    public function recommended($country) {
        switch ($this -> award) {
            case "Honorable":
                $others = "Brian Jung";
                break;
            case "Master":
                $others = "Tim Berlin";
                break;
            case "Sir":
                $others = "Alex Firgusen";
                break;
            default:
                $others = "Arnold Shwarzniger";
        }

        return "You might also like: " . $others . " (" . $this -> nativeSalary($country) . ")";
    }

    public function displayHeading($tag) {
        $baseMsg = parent::displayHeading($tag);
        return $baseMsg . $this->title;
    }
}