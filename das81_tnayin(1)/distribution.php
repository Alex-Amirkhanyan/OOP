<?php
    require_once "For_SQL.php";
    class distribution {
        use For_SQL;
        public function get_to_distribute($arr, $action) {
            $keys = [];
            $values = [];
            foreach($arr as $key => $value) {
                array_push($keys, $key);
                array_push($values, $value); 
            }
            switch($action) {
                case 'insert' : $this->insertion($keys, $values);
                    break;
                case 'delete' : $this->del($keys, $values);
                    break;
                case 'select' : $this->select($keys, $values);
                    break;
                case 'update' : $this->update($keys, $values);
                    break;
            }
        }
    } 
    $obj = new distribution();
    $arr = ['email' => 'aaa2@gmail.com', 'name' => 'Alex2', 'login' => 'Kokushibo2', 'password' => '123456aa2'];
    $obj->get_to_distribute($arr, 'select');