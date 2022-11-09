<?php

declare(strict_types=1);

class Programador extends Personal {

    private $areaOfWork;
    private $currentProject;

    public function __construct(
            $name,
            $role,
            $phone,
            $direction,
            $salary,
            $areaOfWork,
            $currentProject
    ) {
        parent::__construct($name, $role, $phone, $direction, $salary);
        $this->areaOfWork = $areaOfWork;
        $this->currentProject = $currentProject;
    }

    public function getAreaOfWork() {
        return $this->areaOfWork;
    }

    public function getCurrentProject() {
        return $this->currentProject;
    }

    public function setAreaOfWork($areaOfWork): void {
        $this->areaOfWork = $areaOfWork;
    }

    public function setCurrentProject($currentProject): void {
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
