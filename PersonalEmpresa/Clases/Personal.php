<?php

declare(strict_types=1);

class Personal {

    private string $name;
    private string $role;
    private string $phone;
    private string $address;
    private int $salary;

    private function constructFull(
            string $name,
            string $role,
            string $phone,
            string $address,
            int $salary
    ) {
        $this->name = $name;
        $this->role = $role;
        $this->phone = $phone;
        $this->address = $address;
        $this->salary = $salary;
    }

    private function constructEmpty() {
        $this->name = 'Empty';
        $this->role = 'Empty';
        $this->phone = 'Empty';
        $this->address = 'Empty';
        $this->salary = 0;
    }
    
    public function __construct() {
        $args = func_get_args();
        if (count($args) > 0) {
            $this->constructFull($args[0], $args[1], $args[2], $args[3], $args[4]);
        } else {
            $this->constructEmpty();
        }
    }

    public function printPersonalData() {
        $att = get_object_vars($this);
        foreach ($att as $key => $value) {
            echo "<p>$key: $value</p>";
        }
    }

    public function getName(): string {
        return $this->name;
    }

    public function getRole(): string {
        return $this->role;
    }

    public function getPhone(): string {
        return $this->phone;
    }

    public function getAddress(): string {
        return $this->address;
    }

    public function getSalary(): int {
        return $this->salary;
    }

    public function setArgs($args): void {
        $this->args = $args;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setRole(string $role): void {
        $this->role = $role;
    }

    public function setPhone(string $phone): void {
        $this->phone = $phone;
    }

    public function setAddress(string $address): void {
        $this->address = $address;
    }

    public function setSalary(int $salary): void {
        $this->salary = $salary;
    }

}
