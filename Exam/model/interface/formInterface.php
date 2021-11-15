<?php
interface formInterface{
    public function input($label, $type, $name);
    public function submit($name);
    public function getForms($array);
}