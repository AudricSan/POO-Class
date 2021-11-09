<?php
class Form{

    private $data;
    public $surround = 'p';

    public function __construct($data = array()){
        $this->data = $data;
    }

    private function surround($html){
        return "<{$this->surround}> {$html} </{$this->surround}>";
    }
    
    private function getvalue($index){
        return isset($this->data[$index]) ? $this->data[$index] : null ;
    }

    public function input($label, $type, $name){
        $a = '<label for="' . $label . '">' . $label . '</label> : <input type="' . $type . '" name="' . $name . '" id="' . $label . '" value="' . $this->getvalue($name) . '">';
        return $this->surround($a);
    }

    public function submit($name){
        return $this->surround('<button type="submit">' . $name . '</button>');
    }
}
?>