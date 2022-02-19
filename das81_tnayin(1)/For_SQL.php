<?php
    trait For_SQL {
        function connect(){
            $mysql = mysqli_connect("localhost", "root", "", "my_db");
            return $mysql;
        }
        function insertion($keys, $values) {
            $mysql = $this->connect();
            $eml = $values[0];
            for($i = 0; $i < count($keys); $i++) {
                if($i != 0) {
                    $mysql->query("UPDATE `users` SET `$keys[$i]`='$values[$i]' WHERE `email` = '$eml'");
                }else {
                    $mysql->query("INSERT INTO `users` (`$keys[$i]`) VALUES('$values[$i]')");
                }
            }
        }
        function del($key, $value) {
            $mysql = $this->connect();
            $mysql->query("DELETE FROM `users` WHERE `$key[0]` = '$value[0]'");
        }
        function select($key, $value) {
            $mysql = $this->connect();
            $arr = $mysql->query("SELECT * FROM `users` WHERE `$key[0]` = '$value[0]' and `$key[1]` = '$value[1]'");
            $arr2 = $arr->fetch_all();
            $res = $arr2[0];
            echo '<pre>';
            var_dump($res);
        }
        function update($keys, $values) {
            $mysql = $this->connect();
            for($j = 1; $j < count($keys); $j++) {
                    $mysql->query("UPDATE `users` SET `$keys[$j]` = '$values[$j]' WHERE `$keys[0]` = '$values[0]'");
            }
        }

    }