

<!--
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 -->

<!DOCTYPE html>
    <head>
        <title></title>
        <meta charset utf-8/>
    </head>
    <body>
        <?php
            include('student.php');
            
            $students = array();
            
            $first = new Student();
            $first->surname = "Doe";
            $first->first_name = "John";
            $first->addEmail('home','john@doe.com');
            $first->addEmail('work','jdoe@mcdonalds.com');
            $first->addGrade(65);
            $first->addGrade(75);
            $first->addGrade(55);
            $students['j123'] = $first;
            
            $second = new Student();
            $second->surname = "Einstein";
            $second->first_name = "Albert";
            $second->addEmail('home','albert@braniacs.com');
            $second->addEmail('work1','a_einstein@bcit.ca');
            $second->addEmail('work2','albert@physics.mit.edu');
            $second->addGrade(95);
            $second->addGrade(80);
            $second->addGrade(50);
            $students['a456'] = $second;
            
            
            foreach($students as $student){
                echo $student->toString();
            }
        ?>    
    </body>
</html>    

