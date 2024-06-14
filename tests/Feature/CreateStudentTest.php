<?php

use App\Models\Student;
use function PHPUnit\Framework\assertTrue;

test('create student', function () {
    $student = Student::create([
        'name' => 'tribmaa',
        'email' => '<tribmaa>@itc.edu.kh',
        'phone' => '012 345 678',
        'dob' => '2003-10-01'
    ]);

    assertTrue($student->exists());
});

