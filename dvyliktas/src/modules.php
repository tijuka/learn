<?php
namespace modules;

Class Modules
{
    public $module_code;
    public $module_name;

    function __construct($module_code, $module_name)
    {
        $this->module_code = $module_code;
        $this->module_name = $module_name;
    }

function printNewModel()
{

        if (isset($this->module_code, $this->module_name)):
            echo "Mano naujas modelis " .$this->module_code ." ," .$this->module_name;
        endif;
}

    function saveModule()
    {
        //if(isset($module)): kodel neveikia man jeigu su if parasau?

        $sql = "INSERT INTO modules (module_code, module_name) VALUES (:module_code, :module_name)";
        $sth = $this->getDb()->prepare($sql);

        $sth->execute([
            'module_code' => $this->module_code,
            'module_name' => $this->module_name,
        ]);
        //endif;
    }
}

?>