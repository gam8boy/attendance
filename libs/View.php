<?php

class View {
    public $title;          // Declare title property
    public $customlibrary;   // Declare customlibrary property
    public $csslibrary;      // Declare csslibrary property
    public $jslibrary;       // Declare jslibrary property
    public $currentEvents; // Declare the property to avoid dynamic creation
    public $upcomingEvents;
    public $menu;
    public $checkIfYearLevelIsUpdatedForCurrentSchoolYear;
    public $courses;
    public $departments;
    public $events;
    public $currentSY;
    public $schoolYears;
    public $submenu;
    public $piegraph;
    public $bargraph; 
    public $selectedSchoolYear; 
    public $backups; 
    public $user;
    public $officer;         // Declare $officer
    public $officerInfo; 
   public array $logs = [];

    function __construct() {
        //echo 'this is the view';
    }

    public function render($name, $noInclude = false)
    {
        require 'views/' . $name . '.php';    
    }
}
