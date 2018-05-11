<?php
abstract class GetDataBase
{
    public function getDb()
    {
        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "tijosbaze";
        $dsn = "mysql:host=$host;dbname=$db";
        return new PDO($dsn, $user, $password);
    }

}

class Students extends GetDataBase
{
  public $student_no;
  public $surname;
  public $forename;

  function __construct($student_no,$surname,$forename)
     {
      $this->student_no=$student_no;
      $this->surname=$surname;
      $this->forename=$forename;
      }

  public function GetStudent()
     {
     return $this->student_no ." ".$this->surname ." " .$this->forename;
     }

  public function saveStudent()
     {
                 $sql = "INSERT INTO students (student_no, surname, forename) VALUES (:student_no, :surname, :forename)";
                 $sth = $this->getDb()->prepare($sql);

                 $sth->execute([
                     'student_no' => $this->student_no,
                     'surname' => $this->surname,
                     'forename' => $this->forename
                 ]);

     }
}

$student = new Students ('45', 'Ramcamcam','Ruta');
echo "Cia yra studentas:" .$student->GetStudent();
$student->getDb();
$student->saveStudent();


Class Modules extends GetDataBase
{
    public $module_code;
    public $module_name;

    function __construct($module_code, $module_name)
    {
        $this->module_code = $module_code;
        $this->module_name = $module_name;
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

$module = new Modules('125555', 'meditacija');
    $module->saveModule();
    echo "Duomenu baze atnaujinta";

    Class Marks extends GetDataBase
    {
        public $student_no;
        public $module_code;
        public $mark;

        function __construct($student_no, $module_code, $mark)
        {
            $this->student_no=$student_no;
            $this->module_code=$module_code;
            $this->mark=$mark;
        }

        public function SaveMark()
        {
            $sql = "INSERT INTO marks (student_no, module_code, mark) VALUES (:student_no, :module_code, :mark)";
            $sth = $this->getDb()->prepare($sql);

            $sth->execute([
                'student_no' => $this->student_no,
                'module_code' => $this->module_code,
                'mark' =>$this->mark
            ]);
        }
    }

    $mark = new Marks('345555','454545','10');
    $mark->SaveMark();
    echo "<br>" ."Marks table is updated" ."</br>";