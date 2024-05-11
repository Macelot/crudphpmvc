<?php

namespace Sts\Controllers;

class Home {

    public $Data;
    
    public function index() {
        $listArticle = new \Sts\Models\Article();
        $this->Data = $listArticle->list();
        
        $loadView = new \Core\ConfigView("sts/Views/blog/listArticle", $this->Data);
        $loadView->render();

        $loadViewTools = new \Core\ConfigView("sts/Views/blog/botoes");
        $loadViewTools->render();
    }

    public function form_new() {
        $listArticle = new \Sts\Models\Article();
        $this->Data = $listArticle->list();
        $loadView = new \Core\ConfigView("sts/Views/blog/insert", $this->Data);
        $loadView->render();

    }

    public function insert($dados) {
        $listArticle = new \Sts\Models\Article();
        $listArticle->insert($dados);
        
        //$loadView = new \Core\ConfigView("sts/Views/blog/insert", $this->Data);
        //$loadView->render();

    }

    public function delete($id) {
        $listArticle = new \Sts\Models\Article();
        $listArticle->delete($id);
        
        $this->index();

    }

    public function form_edit($id) {
        $listArticle = new \Sts\Models\Article();
        $article = $listArticle->getArticle($id);
        $loadView = new \Core\ConfigView("sts/Views/blog/edit", $article);
        $loadView->render();
    }

    public function update($dados) {
        $listArticle = new \Sts\Models\Article();
        $listArticle->update($dados);
    }
}
