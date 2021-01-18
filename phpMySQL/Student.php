<?php

class Student 
{
    public $name = 'Đỗ Trọng Tuyên'; 

    protected $email = 'aaa@gmail.com';

    private $address = 'Hà Nội';

    public function getName()
    {
        return $this ->name;
    }
    // $value là tham số truyền vào VD: 'Nguyễn Văn B'
    public function setName($value)
    {
        // Trong Class khi truy xuất đến một thuộc tính hoặc một phương thức luôn sử dụng từ khóa "this"
        $this ->name = $value;
    }

    public function getAddress()
    {
        return $this ->address;
    }
    public function getEmail()
    {
        return $this ->email;
    }
}

?>