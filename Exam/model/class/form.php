<?php

require('../model/interface/formInterface.php');

class Form implements formInterface{
    //declare Variable
    private $data;
    public $surround = 'p';

    //Constructy can take an array to set default input value. if not set array create an empty array.
    //Construcor is Public
    public function __construct($data = array()){
        $this->data = $data;
    }

    //Function to surrond input in as other Balise ==> only visual effect.
    //Surrond is Private cuz it's can be only call from Imself. => No need to be call from outside.
    private function surround($html){
        return "<{$this->surround}> {$html} </{$this->surround}>";
    }
    
    //Function to get value in POST array for input default value
    //GetValue is Private cuz it's can be only call from Imself. => No need to be call from outside.
    private function getvalue($index){
        return isset($this->data[$index]) ? $this->data[$index] : null ;
    }

    //Function to create an input with 3 value array
    //Input is public finction cuz it's can be call from outsife to create only one input.
    public function input($label, $type, $name){
        $a = '<label for="' . $label . '">' . $label . ' : </label> <input type="' . $type . '" name="' . $name . '" id="' . $label . '" value="' . $this->getvalue($name) . '">';
        return $this->surround($a);
    }

    //Function to create a submit button with a Variable Name
    //Submit is a Public function cuz it's only call by outside.
    public function submit($name){
        return $this->surround('<button type="submit">' . $name . '</button>');
    }

    //Function to get HTML from array of information gived by devlopers in Object
    //GetHTML is Private cuz it's can be only call from Imself. => No need to be call from outside.
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

    //Function to return several different inputs
    //getForms is public function cuz it's can be call from outsife to create a several different inputs
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