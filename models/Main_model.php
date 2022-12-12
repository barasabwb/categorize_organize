<?php


class MainModel extends BaseModel
    {

        private $conn = 'Some model.';

        function __construct()
        {   
            $this->conn = $this->connect();
        }

        public function parse_where($sql,$where){
            $sql_where='';
            $i=0;
            foreach($where as $key=>$value){
                if($i!==0){
                    $sql_where.=" AND "; 
                }
                $sql_where.= " $key = '$value'";
                $i++;
            }
            $sql.=" WHERE ".$sql_where;
            return $sql;
        }

        public function retrieve_all($table, $columns, $where=null){
            $sql = "SELECT $columns FROM $table";
            if($where!=null){
                $sql = $this->parse_where($sql, $where);
            }
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $rows = $stmt->fetchAll();
            return (object)$rows;
        }

        public function retrieve_row($table, $columns, $where=null){
            $sql = "SELECT $columns FROM $table";
            if($where!=null){
                $sql = $this->parse_where($sql, $where);
            }
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $rows = $stmt->fetch();
            return (object)$rows;
        }

        public function insert_data($table, $data){
            $keys = [];
            $table_data=[];
            foreach($data as $key => $value){
                $keys[]= ':'.$key;
                $table_data[':'.$key] =  $value;
            }
            $sql = "INSERT INTO $table(".implode(', ',array_keys($data)).") values(".implode(', ',$keys).")";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($data);
            return true;
        }

        public function update_row($table, $data, $where=null){
            $set= [];
            foreach($data as $key => $value){
                $value= str_replace("'","''", $value);
                $set[]=$key.'='."'$value'";
            }
            $sql = "UPDATE $table set ".implode(', ',$set);

            if($where!=null){
                $sql = $this->parse_where($sql, $where);
            }
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return true;

        }

        public function delete($table,$where){
            $sql = "DELETE FROM $table";
            $sql = $this->parse_where($sql, $where);
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return true;


        }

        public function check_if_exists($table, $columns,  $where){
            $sql = "SELECT $columns FROM $table";
            $sql = $this->parse_where($sql, $where);
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $rows = $stmt->fetch();
            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        }



    }