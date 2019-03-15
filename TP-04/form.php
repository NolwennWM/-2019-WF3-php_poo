<?php

class Form
{
    private $fields = [];
    private $data;

    public function __construct($data = null)
    {
        $this->data = $data;
    }

    // est appelé sur un echo de l'objet.
    public function __toString()
    {
        $html = '<form method="post">';
        foreach($this->fields as $field){
            $data = $this->data[$field['name']] ?? null;
            $html .= '<div class="form-group">';
            switch($field['tag']){
               case 'input':
                    $html .= '<label for="'.$field['name'].'">'.ucfirst($field['name']).' : </label>';
                    $html .= '<input type="'.$field['type'].'" id="'.$field['name'].'" name="'.$field['name'].'"class="form-control" value="'. $data .'">';
                    break;
                case 'textarea':
                    $html .= '<label for="'.$field['name'].'">'.ucfirst($field['name']).' : </label>';
                    $html .= '<textarea id="'.$field['name'].'" name="'.$field['name'].'"class="form-control">'. $data .'</textarea>';
                    break;
                case 'button':
                    $html .= '<button id="'.$field['name'].'" class="form-control btn-success btn btn-block">'. $field['name'] .'</button>';
                    break;
            }
            $html .= '</div>';
        }
        $html .= '</form>';
        return $html;
    }
    public function getData()
    {
        return $this->data;
    }
    public function input($name, $type='text')
    {
        $this->fields[]= [
            'tag'=> 'input',
            'name' => $name,
            'type' => $type
        ];
        return $this;
    }
    public function textarea($name)
    {
        $this->fields[]= [
            'tag'=> 'textarea',
            'name' => $name
        ];
        return $this;
    }
    public function button($name)
    {
        $this->fields[]= [
            'tag'=> 'button',
            'name' => $name
        ];
        return $this;
    }
}

?>