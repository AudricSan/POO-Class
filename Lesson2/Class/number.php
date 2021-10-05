
<?php

class Complexe{
    private $reel;
    private $im;

    //constructeur
    public function __construct($r, $im){
        $this->reel = $r;
        $this->im = $im;
    }

    //les getters et les setters
    public function set_reel($reel)
    {
        $this->reel = $reel;
    }
    public function get_reel()
    {
        return $this->reel;
    }
    public function set_im($im)
    {
        $this->im = $im;
    }
    public function get_im()
    {
        return $this->im;
    }
    //La fonction Ajouter
    public function ajouter(Complexe $complexe)
    {
        $reel = $this->reel + $complexe->reel;
        $imagin = $this->im + $complexe->im;
        return new Complexe($reel, $imagin);
    }
    public function soustraire(Complexe $complexe)
    {
        $reel = $this->reel - $complexe->reel;
        $imagin = $this->im - $complexe->im;
        return new Complexe($reel, $imagin);
    }

    public function multiplier(Complexe $complexe)
    {
        $reel = ($this->reel * $complexe->reel) - ($this->im * $complexe->im);
        $imagin = ($this->reel * $complexe->im) + ($this->im * $complexe->reel);
        return new Complexe($reel, $imagin);
    }
    public function diviser(Complexe $complexe)
    {
        $fract = pow($complexe->reel, 2) + pow($complexe->im, 2);
        $reel = (($this->reel * $complexe->reel) + ($this->im * $complexe->im)) / $fract;
        $imagin = ($this->im * $complexe->reel) - ($this->reel * $complexe->im) / $fract;
        return new Complexe($reel, $imagin);
    }

    public function __toString()
    {
        if ($this->im >= 0)
            return $this->reel . "+" . $this->im . "*I";
        else
            return $this->reel . $this->im . "*I";
    }
}
?>