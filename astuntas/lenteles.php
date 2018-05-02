<?php

SELECT
//lentelespavadinimas.stulpeliopavadinimas
students.forename,
studnets.surname,
    modules.module_name
FROM marks
LEFT JOIN students
ON mmarks.student_no = students.studnet_no
    LEFT JOIN modules
ON modules.module_code =
    marks.module_code

