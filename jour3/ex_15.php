<?php

function teacher() {
    echo "I am a Teacher\n";
}

function student($name = "Toto") {
    echo "I am a student and my name is ".$name;
}

$func_teacher = 'teacher';
$func_student = 'student';