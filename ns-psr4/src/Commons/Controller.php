<?php
namespace Hai\NsPsr4\Commons;
class Controller 
{
    protected $conn;
    public function _construct()
    {
//thực hiện kết nối tự động khi khởi tạo bất kì 
// class nào liên quan đến model
    }
    public function _destruct()
    {
        $this->conn = null
    }
}