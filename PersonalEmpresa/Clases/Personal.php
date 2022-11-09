<?php

declare(strict_types=1);

class Personal {

    private $name;
    private $role;
    private $phone;
    private $address;
    private $salary;
    
    public function __construct($name, $role, $phone, $address, $salary) {
        $this->name = $name;
        $this->role = $role;
        $this->phone = $phone;
        $this->address = $address;
        $this->salary = $salary;
    }
    
    public function printPersonalData() {
        $att = get_object_vars($this);
        foreach ($att as $key => $value) {
            echo "<p>$key: $value</p>";
        }
    }
    
    public function getName() {
        $name = trim($name);
        
        if ($name == '') {
            return false;
        }
        $this->name = $name;
        
        return true;
    }

    public function getRole() {
        return $this->role;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getAddress() {
        return $this->direction;
    }
    
    public function getSalary() {
        return $this->salary;
    }

    public function setName($name): void {
        $this->name = $name;
    }

    public function setRole($role): void {
        $this->role = $role;
    }

    public function setPhone($phone): void {
        $this->phone = $phone;
    }

    public function setAddress($address): void {
        $this->address = $address;
    }
    
    public function setSalary($salary): void {
        $this->salary = $salary;
    }
}
