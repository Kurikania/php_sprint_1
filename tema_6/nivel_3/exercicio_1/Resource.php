<?php 
require_once __DIR__."/enums/ResourceType.php";
require_once __DIR__."/enums/Theme.php";
class Resource  {
    private string $name;
    private Theme $theme;
    private ResourceType $resourceType;
    private string $uri='';


    public function __construct($name, $theme, $resourceType, $uri) {
        $this->name = $name;
        $this->theme = $theme;
        $this->resourceType = $resourceType;
        $this->uri = $uri;
    }
    public function getResourceInfo() : string {
        return "Name: {$this->name} \nTheme: {$this->theme->name} \nResource Type: {$this->resourceType->name} \nURI: {$this->uri} \n";
    }

}
