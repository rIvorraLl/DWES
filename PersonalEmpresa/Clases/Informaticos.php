<?php

declare(strict_types=1);

class Informaticos extends Personal {

    private string $areaOfWork;
    private string $currentProject;

    function constructFull(
            string $name,
            string $role,
            string $phone,
            string $address,
            int $salary,
            string $areaOfWork,
            string $currentProject
    ) {
        parent::__construct($name, $role, $phone, $address, $salary);
        $this->areaOfWork = $areaOfWork;
        $this->currentProject = $currentProject;
    }

    function constructEmpty() {
        parent::__construct();
        $this->areaOfWork = 'Empty';
        $this->currentProject = 'Empty';
    }

    function __construct() {
        $args = func_get_args();
        if (count($args) > 0) {
            $this->constructFull(
                    $args[0],
                    $args[1],
                    $args[2],
                    $args[3],
                    $args[4],
                    $args[5],
                    $args[6]
            );
        } else {
            $this->constructEmpty();
        }
    }

    public function getAreaOfWork(): string {
        return $this->areaOfWork;
    }

    public function getCurrentProject(): string {
        return $this->currentProject;
    }

    public function setAreaOfWork(string $areaOfWork): void {
        $this->areaOfWork = $areaOfWork;
    }

    public function setCurrentProject(string $currentProject): void {
        $this->currentProject = $currentProject;
    }

    public function printPersonalData() {
        echo '<div id=prettyPrint>';
        parent::printPersonalData();
        $att = get_object_vars($this);
        foreach ($att as $key => $value) {
            echo "<p>$key: $value</p>";
        }
        echo '</div>';
    }

}
