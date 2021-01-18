
<?php
// Kỹ thuật lập trình chia bài toán thành các Đối tượng cụ thể để giải quyết 

// Phân biệt Class và Object 
/*
    Class là cái tạo ra nhiều Object có cùng thuộc tính, tính chất của Class đó 
    Object(Đối tượng): Được tạo từ class đó, mang những đặc tính của Class, 
    một Class có thể tạo ra nhiều đối tượng nhưng một đối tượng chỉ thuộc một Class. 

*/
// Class in PHP 
class ClassName {

}

// Object in PHP 
$obj = new ClassName; // Class obj được tạo ra từ class Classname

// Thuộc tính (property)
- Biến được khai báo trong Class và có kèm theo cơ chế (qui định phạm vi truy cập của 1 thuộc tính): public, protected, private

// Phương thức (method)
- Là hàm được khai báo trong Class và có kèm theo cơ chế (public, private, protected)
- Đại diện cho những hành động của đối tượng đó thể hiện trong class như create, edit, delete, get
- Trong 1 Class sẽ có những phương thức có return trả về hoặc không có return trả về.

// How to access property or method
- Ngoài Class
    + Truy xuất (access) thông qua đối tượng
- Trong Class
    + Thông qua từ khóa This.

// Cơ chế
- Public: Access ở mọi nơi (trong, ngoài, class con)
- protected: Access ở mọi nơi (trong và class con)
- private: Access ở mọi nơi (trong Class)
