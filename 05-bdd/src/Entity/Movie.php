<?php
namespace Entity;

class Movie
{
    public $id;
    public $title;
    protected $synopsis;
    protected $released_at;
    public $category;

    public function getSynopsis($m = 15)
    {
        return (strlen($this->synopsis)>$m ? substr($this->synopsis, 0, $m).'...' : $this->synopsis);   
    }
    public function getReleasedAt()
    {
        $date = new \DateTime($this->released_at);
        return $date->format('d F Y');
    }
    public function hydrate($post)
    {
        if(empty($post)){return;}
        $this->title = trim($post['titre']) ??  null;
        $this->synopsis = trim($post['synopsis']) ??  null;
        $this->released_at = trim($post['sortie']) ?? null;
        $this->category = trim($post['categorie']) ?? null;
    }
    public function isValid()
    {
        $isValid = true;

        if($this->title == null || strlen($this->title)<2 ){
            $isValid = false;
        }
        if($this->synopsis == null || strlen($this->synopsis)<2 ){
            $isValid = false;
        }
        if($this->released_at == null){
            $isValid = false;
        }else{
            $temp = explode('-', $this->released_at);
            if(count($temp)!==3 || !checkdate($temp[1], $temp[2], $temp[0])){
                $isValid = false;
            }
        }
        if($this->category == null || strlen($this->category)<2 ){
            $isValid = false;
        }
        return $isValid;
    }
}

?>