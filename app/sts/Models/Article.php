<?php

namespace Sts\Models;

use PDO;

class Article {
    
    public $Result;

    public function list() {
        $listArticle = new \Sts\Models\Conn();
        
        $limit = 10;
        $result_article = "SELECT * FROM article LIMIT :limit";
        $result_article = $listArticle->getConn()->prepare($result_article);
        $result_article->bindParam(':limit', $limit, PDO::PARAM_INT);
        $result_article->execute();
        $result_article->fetch(PDO::FETCH_ASSOC);
        $this->Result['article'] = $result_article->fetchAll();
        return $this->Result;
    }

    public function insert($data = array()){
        $insertArticle = new \Sts\Models\Conn();
        $cmd_article = "INSERT INTO article (title, content, created)
        VALUES (?,?,?)";

        //if conn

        $result = $insertArticle->getConn()->prepare($cmd_article)->execute([
            $data['title'], $data['content'], date("y-m-d H:i:s")
        ]);

        return $result;
    }

    public function delete($id){
        $insertArticle = new \Sts\Models\Conn();
        $cmd_article = "DELETE FROM article WHERE id = ?";

        //if conn

        $result = $insertArticle->getConn()->prepare($cmd_article)->execute([
            $id
        ]);

        return $result;
    }
    public function update($data = array()){
        $insertArticle = new \Sts\Models\Conn();
        $cmd_article = "UPDATE article set title=?, content=?, modified = ? WHERE id = ?";

        //if conn

        $result = $insertArticle->getConn()->prepare($cmd_article)->execute([
            $data['title'], $data['content'], date("y-m-d H:i:s"), $data['id']
        ]);

        return $result;
    }

    public function getArticle($id) {
        $listArticle = new \Sts\Models\Conn();
        $sql        = "SELECT * FROM article WHERE id = ".$id;
        $resource   = $listArticle->getConn()->query($sql);
        $result     = $resource->fetchAll(PDO::FETCH_ASSOC);
        $this->Result['article'] =  $result[0]; 
        return $result;
        
    }
}
