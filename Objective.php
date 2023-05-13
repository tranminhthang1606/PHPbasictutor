<?php
echo "Object in PHP" . '<br>';

class User
{ //khai báo kiểu class
    public $name; // private and protected must have set-get to use;
    public $age;
    public $email;
    public $password;
    //constructor : Hàm chạy khi có một object dựa theo (user1) đc khởi tạo
    public function __construct($name, $age, $email, $password)
    {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
        $this->password = $password;
    }
    // cacs method phục vụ nội bộ
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
}

$user1 = new User('Deptrai', 100, 'buoito@gmail.com', 30000); //dùng lại kiểu class
//truy xuất thuộc tính của class bằng mũi tên 
/*
$user1->name = "Thắng" ;//truy xuất bằng mũi tên
$user1->age = 20;
$user1->email = 'thangtmph29942@fpt.edu.vn';
$user1->password = 123456
*/
;
//$user1->set_name("deptrai");
$user2 = new User('buoito', 10000, 'buoinho@gmail.com', 123456789);
//$user2->set_name("Cawcj to");
//print_r($user1);
//echo $user1->email . '<br>';
//echo $user2->email;

// Kế thừa
class Nhanvien extends User
{
    public $title;
    public function __construct($name, $age, $emai, $password, $title)
    {
        parent::__construct($name, $age, $emai, $password);
        $this->title = $title;

    }
    public function get_title(){
        return $this->title;
    }
}

$nhanvien1=new Nhanvien('BigdickHP', 30, 'bigdickhp@gmail.com', 123456789,"boss");
echo $nhanvien1->get_title();
?>