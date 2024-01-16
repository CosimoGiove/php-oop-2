<?php
class ProdottiAnimali{
    public $mangiare;
    public $cuccia;
    public $giochi;
    public $razza_animale;
    public $dimensione_animale;
    function __construct($_mangiare,$_cuccia,$_giochi,$_dimensione_animale,$_razzaanimale)
    {
        $this->mangiare = $_mangiare;
        $this->cuccia = $_cuccia;
        $this->giochi = $_giochi;
        $this->razza_animale = $_razzaanimale;
        $this->dimensione_animale = $_dimensione_animale;

    }
}

?>