<?php
    // Truy cập đến file Studen.php
    require 'Student.php';

    // Class objStd01 được tạo ra từ class Student mang tất cả các tính chất của class Student
    $objStd01 = new Student;

    // Truy xuất đến thuộc tính name thông qua đối tượng $objStd01 đứng ngoài Class Student
    // echo $objStd01 ->name;

    // Truy xuất trong Class
    // $objStd01->setName('Nguyễn Văn B');
    // echo $objStd01->getName();

    // Truy xuất trong Class
    echo $objStd01 ->getEmail();
    echo "<br />";
    echo $objStd01 ->getAddress();

?>