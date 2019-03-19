<?php
namespace Entity;

class Actor
{
    public $id;
    protected $lastname;
    protected $firstname;
    protected $birthday;

    public function getFullName()
    {
        return $this->firstname .' '. $this->lastname;   
    }
    public function getAge()
    {   
        $birth = new \DateTime($this->birthday);
        $age = date('Y') - $birth->format('Y');
        if(date('n j') >= $birth->format('n j')){
            return $age .' ans';
        }
        return $age-1 .' ans';
    }
    public function hydrate($post)
    {   
        if(empty($post)){return;}
        $this->lastname = trim($post['nom']) ??  null;
        $this->firstname = trim($post['prénom']) ??  null;
        $this->birthday = trim($post['naissance']) ?? null;
    }
    public function isValid()
    {
        $isValid = true;

        if($this->lastname == null || strlen($this->lastname)<2 ){
            $isValid = false;
        }
        if($this->firstname == null || strlen($this->firstname)<2 ){
            $isValid = false;
        }
        if($this->birthday == null){
            $isValid = false;
        }else{
            $temp = explode('-', $this->birthday);
            if(count($temp)!==3 || !checkdate($temp[1], $temp[2], $temp[0])){
                $isValid = false;
            }
        }
        return $isValid;
    }
}

?>