<?php
    // so can kiem tra
    $number = 13;
    // gọi đến hàm kiem_tra_so_chan và truyền biến cần kiểm tra vào
    // vì hàm kiem_tra_so_chan trả về true/false nên ta có thể đặt nó trong câu điều
    // kiện if như thế này
    if (kiem_tra_so_chan($number))
    {
        echo $number .' la so chan';
    } 
    else {
        echo $number .' la so le';
    }
    // Hàm kiểm tra số chẵn sẽ trả về true nếu $number là số chẵn và ngược lại.
    // biến $number gọi là biến truyền vào hàm, đó chính là biến cần kiểm tra
    function kiem_tra_so_chan ($number)
    {
        if ($number % 2 == 0)
        {
            return true;
        } 
        else {
            return false;
        }
    }
    
    echo '<br />';

    // Số cần kiểm tra
    $number1 = 13;
    // gọi đến hàm kiem_tra_so_le và truyền biến cần kiểm tra vào
    kiem_tra_so_le($number1);
    // Hàm này có nhiệm vụ xuất ra màn hinh số chẵn nếu biến truyền vào ($number)
    // là Số chẵn, và ngược lại sẽ xuất ra màn hình là Số lẽ
    function kiem_tra_so_le($number1)
    {
        if ($number1 % 2 == 0)
        {
            echo 'Số chẵn';
        }
        else {
            echo 'Số le?';
        }
    }

    echo '<br />';

    // Truyền nhiều biến vào hàm trong php; mục đích của viết khác biến là để các bạn không hiểu nhầm rằng các biến truyền vào hàm phải cùng tên với các biến ở chương trình chính.
    $so1 = 12;
    $so2 = 13;
    echo tinhtong($so1, $so2);
    function tinhtong($a, $b)
    {
        return $a + $b;
    }

    echo '<br />';


    // Gán giá trị mặc định co biến truyền vào

    $so3 = 12;
    $so4 = 13;
    // chỉ truyền 2 đối số vào
    echo tinhtong1($so3, $so4);
    // $c có một giá trị mặc định
    // hàm này tính tổng của 3 số
    function tinhtong1($d, $e, $g = false)
    {
        $tong1 = $d + $e;
        if ($g != false){ // nếu $c được truyền vào (vì false là giá trị mặc định)
            $tong1 = $tong1 + $g; // thì thực hiện cộng thêm $c
        }
        return $tong1;
    }

    echo '<br />';


    // Tham số thực và tham số hình thức: Các biến ta định nghĩa trong hàm gọi là tham số hình thức, còn biến mà ta truyền vào ở chương trình chính gọi là tham số thực.


    // Biến toàn cục và biến cục bộ

    // Biến toàn cục
    $bien_toan_cuc = 12;
    function kiem_tra()
    {
        // Biến cục bộ
        $bien_cuc_bo = 13;
    
        // Lấy biến toàn cục
        global $bien_toan_cuc;
    
        // Lấy số dư biến cục bộ chia cho biến toàn cục và
        // kiểm trả về true nếu số dư = 0, ngược lại trả về false
        if ($bien_cuc_bo % $bien_toan_cuc){
            return true;
        }
        else{
            return false;
        }
    }

    echo '<br />';


    // Biến tĩnh là các biến cố định bên trong các hàm, không giống như các biến toàn cục chúng không được biết đến bên ngoài hàm tức là chỉ biết đến bên trong hàm nhưng giá trị của chúng sẽ lưu lại sau mỗi lần gọi hàm.
    // ham kiem tra
    function kiem_tra1()
    {
        // bien tinh
        static $f = 0;
        $f++;
        echo $f;
    }
    
    kiem_tra1();
    kiem_tra1();
    
    echo '<br />';


    // 3. Các cách gọi hàm trong php: Truyền băng giá trị và truyền bằng tham chiếu
    // Truyền bằng giá trị
    // Biến
    $a = 1;
    
    // Hàm tăng giá trị tham số truyền vào lên 1
    function tang_len_1($a)
    {
        return $a + 1;
    }
    
    // Xuất giá trị trả về của hàm
    echo tang_len_1($a);
    
    // Xuất giá trị của biến
    echo $a;

    // Truyền bằng tham chiếu Khi các đối số được truyền bằng giá trị thì giá trị của các đối số của hàm đang gọi không bị thay đổi. Tuy nhiên đôi khi bạn muốn những giá trị đó thay đổi theo thì lúc này bạn phải truyền biến vào hàm dạng tham chiếu.
    // Biến
    $a = 1;
    
    // Hàm tăng giá trị tham số truyền vào lên 1
    function tang_len_2(&$a)
    {
        $a = $a + 3;
        return $a; 
    }
    
    // Xuất giá trị trả về của hàm
    echo tang_len_2($a);
    
    // Xuất giá trị của biến
    echo $a;

    echo '<br />';

    // Các quy tắc và phạm vi của hàm
    // Danh sách các hàm
    function A()
    {
        B();
    }
    
    function B()
    {
        C();
    }
    
    function C()
    {
        echo 'C';
    }
    
    // Chương trình chính gọi đến hàm A
    A(); // Kết quả xuất ra màn hình là 'C'

?>
