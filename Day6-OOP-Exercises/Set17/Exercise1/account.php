<?php

class account{
    public $balance;
    
    public function __construct($amount){
        if ($amount > 0){
            $this->balance = $amount;
        }
        else{   
            $this->balance = 0;
        }
    }
    
    public function credit($amount){
        $this->balance += $amount;
    }
    
    public function debit($amount){
        if ($amount < $this->balance){
            $this->balance -= $amount;
        }
    }
    
    public function getBalance(){
        return $this->balance;
    }
    
    
}