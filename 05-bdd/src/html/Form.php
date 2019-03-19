<?php
namespace html;

class Form
{
    private $fields = [];
    private $data;
    private $type;

    public function __construct($data = null, $type = 'post')
    {
        $this->data = $data;
        $this->type = $type;
    }

    // est appelé sur un echo de l'objet.
    public function __toString()
    {
        $html = '<form method="'. $this->type .'">';
        foreach($this->fields as $field){
            $data = $this->data[$field['name']] ?? null;
            $html .= '<div class="form-group">';
            switch($field['tag']){
               case 'input':
                    $html .= '<label for="'.$field['name'].'">'.ucfirst($field['showed']).' : </label>';
                    $html .= '<input type="'.$field['type'].'" id="'.$field['name'].'" name="'.$field['name'].'" class="form-control" value="'. $data .'">';
                    break;
                case 'textarea':
                    $html .= '<label for="'.$field['name'].'">'.ucfirst($field['name']).' : </label>';
                    $html .= '<textarea id="'.$field['name'].'" name="'.$field['name'].'" class="form-control">'. $data .'</textarea>';
                    break;
                case 'select':
                    $html .= '<label for="'.$field['name'].'">'.ucfirst($field['name']).' : </label>';
                    $html .= '<select id="'. $field['name'] .'" name="'.$field['name'].'" class="form-control">';
                    foreach($field['options'] as  $k =>  $op){
                        $html .= '<option value="'.$op.'">'. ucfirst($field['showed'][$k]) .'</option>';
                    }
                    $html .= '</select>';
                    break;
                case 'button':
                    $html .= '<button id="'.ucfirst($field['name']).'" class="form-control btn-success btn btn-block">'. $field['name'] .'</button>';
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
    public function input($name='input', $type='text', $showed=null)
    {
        $this->fields[]= [
            'tag'=> 'input',
            'name' => $name,
            'type' => $type,
            'showed' => ($showed == null ? $name : $showed)
        ];
        return $this;
    }
    public function textarea($name='textarea')
    {
        $this->fields[]= [
            'tag'=> 'textarea',
            'name' => $name
        ];
        return $this;
    }
    public function select($name='select', $values=[], $showed =[])
    {
        $this->fields[]= [
            'tag' => 'select',
            'name' => $name,
            'options' => $values,
            'showed' =>  (count($values) == count($showed)? $showed : $values)
        ];
        return $this;
    }
    public function button($name='button')
    {
        $this->fields[]= [
            'tag'=> 'button',
            'name' => $name
        ];
        return $this;
    }
}

?>