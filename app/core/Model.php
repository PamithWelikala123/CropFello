<?php
/**
    Main model trait
*/

trait Model{

    use Database;
    
    protected $limit = 10;
    protected $offset = 0;
    protected $order_type = "desc";
    public $order_column = "post_id";
    public $errors = [];
    
     public function findAll(){
        

        $query = "select * from $this->table order by $this->order_column $this->order_type";
        
        return  $this->query($query);
    }    
    
    public function where($data, $data_not = []){
       
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = "select * from $this->table where ";

        foreach ($keys as $key){
            $query .= $key . " = :". $key . " && ";
        }

        foreach ($keys_not as $key){
            $query.= $key . " != :". $key . " && ";
        }

        $query = trim($query, " && ");

        $query .= " order by $this->order_column $this->order_type limit $this->limit offset $this->offset";
        $data = array_merge($data, $data_not);
        return  $this->query($query, $data);
    }

    public function first($data, $data_not = []){

        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = "select * from $this->table where ";

        foreach ($keys as $key){
            $query .= $key . " = :". $key . " && ";
        }

        foreach ($keys_not as $key){
            $query.= $key . " != :". $key . " && ";
        }

        $query = trim($query, " && ");

        $query .= " limit $this->limit offset $this->offset";
        $data = array_merge($data, $data_not);
        $result = $this->query($query, $data);
        if($result)
            return $result[0];
            
        return false;
    }

    
    public function insert($data){
       
        if(!empty($this->allowedColumns)){

            foreach($data as $key => $value){

                if(!in_array($key, $this->allowedColumns)){
                    unset($data[$key]);
                    
                }
            }
        }

        $keys = array_keys($data);

        $query = "insert into $this->table (".implode(",",$keys).") values (:".implode(",:",$keys).")";
        $this->query($query, $data);
        return false;
    }

    



    public function update($id, $data, $id_column = 'user_id'){

        if(!empty($this->allowedColumns)){

            foreach($data as $key => $value){

                if(!in_array($key, $this->allowedColumns)){

                    unset($data[$key]);
                }
            }
        }

        $keys = array_keys($data);
        
        $query = "update $this->table set ";

        foreach ($keys as $key){
            $query .= $key . " = :". $key . ", ";
        }

        $query = trim($query, ", ");

        $query .= " where $id_column = :$id_column";
        $data[$id_column] = $id;
        $this->query($query, $data);
        return false;
    }

    public function update2($data, $primaryKeys) {

        if (!empty($this->allowedColumns)) {
            foreach ($data as $key => $value) {
                if (!in_array($key, $this->allowedColumns)) {
                    unset($data[$key]);
                }
            }
        }
    
        $keys = array_keys($data);
        $query = "UPDATE $this->table SET ";
    
        foreach ($keys as $key) {
            $query .= "$key = :$key, ";
        }
    
        $query = rtrim($query, ", ");
        $query .= " WHERE ";
    
        $params = array();
        foreach ($primaryKeys as $pk) {
            $query .= "$pk = :$pk AND ";
            $params[":$pk"] = $data[$pk];
            unset($data[$pk]);
        }
    
        $query = rtrim($query, "AND ");
        $params = array_merge($params, $data);
    
        $this->query($query, $params);
    
        return false;
    }
    
    

    public function delete($id, $id_column = 'user_id'){

        $data[$id_column] = $id;
        $query = "delete from $this->table where $id_column = :$id_column";

        $this->query($query, $data);
        return false;
    }

    public function delete1($id1,$id2, $id_column1 = 'user_id',$id_column2='post_id'){

        $data[$id_column1] = $id1;
        $data[$id_column2] = $id2;
        $query = "delete from $this->table where $id_column1 = :$id_column1 and $id_column2= :$id_column2";

        $this->query($query, $data);
        return false;
    }

//sql = "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND (fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%') "


public function chatfunction($outgoing_id,$searchTerm){

        $query = "select * from registerd_user WHERE NOT user_id = {$outgoing_id} AND (first_name LIKE '%{$searchTerm}%' OR last_name LIKE '%{$searchTerm}%')";
        return  $this->query($query);
    }

    public function chatfunction1($outgoing_id,$other_id){

        $query = "SELECT * FROM messages WHERE (incoming_msg_id = {$other_id}
        OR outgoing_msg_id = {$other_id}) AND (outgoing_msg_id = {$outgoing_id} 
        OR incoming_msg_id = {$outgoing_id}) ORDER BY msg_id DESC LIMIT 1";

        return  $this->query($query);
    }

    public function chatfunction2($outgoing_id,$incoming_id){

        $query = "SELECT * FROM messages LEFT JOIN registerd_user ON registerd_user.user_id = messages.outgoing_msg_id
        WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
        OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_id";

        return  $this->query($query);
    }

    public function getmax4(){

        $query = "SELECT * FROM postitem ORDER BY discount DESC LIMIT 4";

        return  $this->query($query);
    }
    public function getchat($id){
        
                // $query = "SELECT DISTINCT outgoing_msg_id,msg
                //             FROM messages
                //             WHERE incoming_msg_id = '$id'
                //             ORDER BY msg_id DESC
                //             LIMIT 4";

                $query = "      SELECT *
                                FROM (
                                SELECT incoming_msg_id AS contact_id, MAX(msg_id) AS last_msg_id
                                FROM messages
                                GROUP BY incoming_msg_id
                                UNION DISTINCT
                                SELECT outgoing_msg_id AS contact_id, MAX(msg_id) AS last_msg_id
                                FROM messages
                                GROUP BY outgoing_msg_id
                                ) AS last_msgs
                                JOIN messages ON last_msgs.last_msg_id = messages.msg_id
                                GROUP BY last_msgs.contact_id
                                ORDER BY messages.msg_id DESC
                                LIMIT 4;
                
                        ";

                return  $this->query($query);
    }


    // public function search($tablename,$id,$searchTerm){

    //     $query = "select * from $tablename WHERE NOT seller_id = {$id} AND (item_id  LIKE '%{$searchTerm}%' OR item_type LIKE '%{$searchTerm}%')";
    //     return  $this->query($query);
    // }
     public function searchitem($tablename,$searchTerm){

        $query = "select * from $tablename WHERE (name  LIKE '%{$searchTerm}%' OR type LIKE '%{$searchTerm}%')";
        return  $this->query($query);
    }

    

    public function bidding($id){

        $query = "SELECT DISTINCT  	post_id 
        FROM bidding
        WHERE buyer_id = {$id} AND time  = (
          SELECT time 
          FROM bidding
          ORDER BY ABS(time  - NOW())
          LIMIT 1
        );
        ";
        return  $this->query($query);
    }



    public function Rank1($post_id){
        
        $query = "SELECT post_id,buyer_id,RANK() OVER (ORDER BY amount DESC) AS rank
        FROM $this->table
        WHERE post_id = {$post_id}
        ORDER BY amount DESC;
        ";
        
        
        return  $this->query($query);
    }


}