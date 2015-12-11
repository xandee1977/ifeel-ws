<?php
include_once 'configs/WS_CONFIG.php';
include_once 'db.class.php';
//include_once 'GCM.class.php';

class Comments extends Database {
    private $error_message = null;

    public function __construct($user_id=null){
        parent::__construct();
        $this->user_id = $user_id;
    }

    
    public function listComments($parent=false, $start=0, $limit=20) {
        $result = false;
        try {
            $where = "";
            if($parent) {
                $where =  sprintf(" WHERE parent=%s ", $parent);
            } else {
                $where =  " WHERE parent IS NULL OR parent=0 ";
            }
            
            $sql = sprintf("SELECT * FROM comments %s ORDER BY date DESC, id DESC LIMIT %s,%s", $where, $start, $limit);
            
            $this->query($sql);
            $stmt = $this->resultset();
            if(count($stmt) == 0) {                
                throw new Exception("Error listing comments.");
            } else {
                foreach($stmt as $k => $v) {
                    $stmt[$k]["num_comments"] = $this->countComment($stmt[$k]["id"]);
                }
            }
            $result = $stmt;
        } catch(Exception $e){
            $this->error_message = $e->getMessage();
        }
        return $result;
    }

    public function showComment($comment_id) {
        $result = false;
        try {
            $sql = sprintf("SELECT * FROM comments WHERE id=%s", $comment_id);
            
            $this->query($sql);
            $stmt = $this->resultset();
            if(count($stmt) == 0) {                
                throw new Exception("Error show comment.");
            }
            $stmt[0]["num_comments"] = $this->countComment($stmt[0]["id"]);
            $result = $stmt[0];
        } catch(Exception $e){
            $this->error_message = $e->getMessage();
        }
        return $result;
    }

    // Get the parent comment
    public function getParent($comment_id) {
        $result = false;
        try {
            $sql = sprintf("SELECT parent FROM comments WHERE id=%s", $comment_id);            
            $this->query($sql);
            $stmt = $this->resultset();
            if(count($stmt) == 0) {
                throw new Exception("Error show comment.");
            }
            $parent_id = (int) $stmt[0]["parent"];
            if($parent_id == 0) {
                throw new Exception("This comment has no parent.");
            }
            $result = $this->showComment($parent_id);
        } catch(Exception $e){
            $this->error_message = $e->getMessage();
        }
        return $result;
    }

    // Getting the all filiation
    public function getParents($comment_id, &$parent_list) {
        $parent = $this->getParent($comment_id);
        if($parent) {
            $parent_list[] = $parent;
            $this->getParents($parent["id"], $parent_list);
        }
    }

    public function countComment($parent_id) {
        $result = 0;
        try {
            $sql = sprintf("SELECT COUNT(*) as num_comments FROM comments WHERE parent=%s", $parent_id);
            
            $this->query($sql);
            $stmt = $this->resultset();
            if(count($stmt) == 0) {                
                throw new Exception("Error show comment.");
            }
            $result = $stmt[0]["num_comments"];
        } catch(Exception $e){
            $this->error_message = $e->getMessage();
        }
        return $result;
    }

    public function saveComment($array_data) {
        $result = false;
        try {
            if(!is_array($array_data)) {
               throw new Exception("Erro de parser (param JSON -> array_data).");
            }
            // Saving on database
            $sql = sprintf("
            INSERT INTO
                comments
            SET
                ip='%s',
                text='%s',
                parent='%s',
                gcm='%s',
                date=NOW()",
                $_SERVER['REMOTE_ADDR'],
                $array_data["text"],
                $array_data["parent"],
                $array_data["gcm"]

            );

            $this->query($sql);
            $this->execute();

            $result = $this->lastInsertId();
        } catch(Exception $e){
            $this->error_message = $e->getMessage();
        }
        return $result;        
    }

    public function getError()   {
        return $this->error_message;
    }
}