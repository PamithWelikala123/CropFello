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

    public function wherenot($data, $data_not = []){
        
        $keys = array_keys($data);
        $keys_not = array_keys($data_not);
        $query = "select * from $this->table where ";

        foreach ($keys as $key){
            $query .= $key . " != :". $key . " && ";
        }

        foreach ($keys_not as $key){
            $query.= $key . " = :". $key . " && ";
        }

        $query = trim($query, " && ");

        $query .= " order by $this->order_column $this->order_type limit $this->limit offset $this->offset";
        $data = array_merge($data, $data_not);
        return  $this->query($query, $data);
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


}