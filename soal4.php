<?php 
class person
{
    public $name = "eko";       
    public $age = 59;
    

    public function name($name) {
        $this->name = $name;     
    }
    public function age($age) {            
        $this->age = $age;
    }

    public function tampilkan() {    
        echo "Seseorang dengan nama " . $this->name . " berumur " . $this->age . " tahun";
    }

}