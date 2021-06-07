<?php


class Order
{

    public $db = null;
    public function __construct(DBController  $db){
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    //insert into order-his table
    public function insertIntoOrder($params = null, $table = 'history'){
        if($this->db->con != null){
            if($params != null){
                //insert into cart
                //get table column
                $col = implode(',',array_keys($params));


                $vals = implode(',', array_values($params));
                print($vals);

                $query = sprintf('INSERT INTO %s(%s) VALUES(%s)', $table, $col, $vals);

                //execute query
                $result = $this->db->con->query($query);
                if($result){
                    print('query successful');
                }else{
                    print('failed');
                }
                return $result;
            }
        }

    }
    public function addToOrder($userid, $itemid){
        print($userid);
        print($itemid);
        if(isset($userid) && isset($itemid)){
            $params = array(
                "user_id" => $userid,
                "item_id" => $itemid
            );

            //insert data into cart
            $result = $this->insertIntoOrder($params);

            if($result){
                //reload page
                header('Location:'.$_SERVER["PHP_SELF"]);
            }else{
                print('could not insert data');
            }
        }

    }
}