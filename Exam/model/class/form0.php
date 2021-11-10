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
        $a = '<label for="' . $label . '">' . $label . ' : </label> <input type="' . $type . '" name="' . $name . '" id="' . $label . '" value="' . $this->getvalue($name) . '">';
        return $this->surround($a);
    }

    public function submit($name){
        return $this->surround('<button type="submit">' . $name . '</button>');
    }

    private function getHtml($array){
        $data = [];
        $a = 0;

        foreach ($array as $arr) {
            $data[$a] =  $this->input($arr[0], $arr[1], $arr[2]);
            $a ++;
            // var_dump($a);
            // var_dump($data);
        }
        
        return $data;
    }

    public function getForms($array){
        $html = $this->getHtml($array);
        foreach($html as $val){
            // var_dump($html);
            // var_dump($val);
            echo $val;
        }
    }
}
?>