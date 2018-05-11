<?php

namespace student;

    class Students
    {
        public $student_no;
        public $surname;
        public $forename;

        function __construct($student_no, $surname, $forename)
        {
            $this->student_no = $student_no;
            $this->surname = $surname;
            $this->forename = $forename;
        }

        public function GetStudent()
        {
            return $this->student_no . " " . $this->surname . " " . $this->forename;
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

?>