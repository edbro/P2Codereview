<?php

class listitem extends Item  {
      var $quantity;
    
    function __constructor ($name, $desc, $price, $q)
    {
        
        $this->name = $name;
        $this->description = $desc;
        $this->price = $price;
        $this->quantity = $q;
    }
    
    function listit() {
        
        echo '<br>' . $this->name . '
        <br />
    <br/>Description: ' . $this->description   . '.<br/>
    <br/>Price: $' . $this->price   . '<br/><br/>
    <select name="' . $this->name .'">
    <option value="0">zero</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
    </select><br />';
        
    }
    
    function printit() {
        if ($this->quantity == 0) {return;}
        
        echo $this->quantity;
        
        if ($this->quantity == 1) {
            echo ' side of ';
        } else {
            echo ' sides of ';
        }
        echo $this->name . '<br><br/>';
    }
    
    function total() {
        return ($this->quantity * $this->price);
    }
    
}