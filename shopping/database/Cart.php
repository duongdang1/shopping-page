<?php

//php cart class
class  Cart
{
    public $db = null;
    public function __construct(DBController  $db){
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    //insert into cart table
    public function insertIntoCart($params = null, $table = 'cart'){
        if($this->db->con != null){
            if($params != null){
                //insert into cart
                //get table column
                $columns = implode(',',array_keys($params));

                $values = implode(',', array_values($params));


                $query = sprintf('INSERT INTO %s(%s) VALUES(%s)', $table, $columns, $values);

                //execute query
                $result = $this->db->con->query($query);
                return $result;
            }
        }

    }
    public function addToCart($userid, $itemid){
        if(isset($userid) && isset($itemid)){
            $params = array(
                "user_id" => $userid,
                "item_id" => $itemid
            );

            //insert data into cart
            $result = $this->insertIntoCart($params);
            if($result){
                //reload page
                header('Location:'.$_SERVER["PHP_SELF"]);
            }else{
                print('cannot add data');
            }
        }

    }

    public function getSum($arr){
        if(isset($arr)){
            $sum = 0;
            foreach($arr as $item){
                $sum += floatval($item[0]);
            }
            return sprintf('%s', $sum);
        }
    }

    public function deleteCart($item_id = null, $table = 'cart'){
        if($item_id != null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
            if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }
}