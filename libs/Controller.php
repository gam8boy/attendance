<?php

class Controller {
    protected $view; // Declare the property
    protected $model; // Declare the model property

    function __construct() {
        $this->view = new View();
    }

    /**
     * 
     * @param string $name Name of the model
     * @param string $path Location of the models
     */
    public function loadModel($name, $modelPath = 'models/') {
        
        $path = $modelPath . $name.'_model.php';
        
        if (file_exists($path)) {
            require $path; // Load the model file
            
            $modelName = $name . '_Model';
            $this->model = new $modelName();
        }        
    }
}
