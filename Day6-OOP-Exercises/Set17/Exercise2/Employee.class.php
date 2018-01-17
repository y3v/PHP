<?php

class Employee{
    private $fname;
    private $lname;
    private $salary;
    
    public function __construct($name1, $name2, $sal){
        $this->fname = $name1;
        $this->lname = $name2;
        if ($sal > 0) {
            $this->salary = $sal;
        }
        else{
            $this->salary = 0;
        }
    }

    public function getFname()
    {
        return $this->fname;
    }

    public function getLname()
    {
        return $this->lname;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setFname($fname)
    {
        $this->fname = $fname;
    }

    public function setLname($lname)
    {
        $this->lname = $lname;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    

    
    
}