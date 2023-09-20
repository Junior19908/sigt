<?php
require('fpdf.php');


class PDF_Rotate extends FPDF
{
var $angleL=0;

function Rotate($angleL,$xL=-1,$yL=-1)
{
    if($xL==-1)
        $xL=$this->xL;
    if($yL==-1)
        $yL=$this->yL;
    if($this->angleL!=0)
        $this->_out('Q');
    $this->angleL=$angleL;
    if($angleL!=0)
    {
        $angleL*=M_PI/180;
        $c=cos($angleL);
        $s=sin($angleL);
        $cxL=$xL*$this->k;
        $cyL=($this->h-$yL)*$this->k;
        $this->_out(sprintf('q %.5F %.5F %.5F %.5F %.2F %.2F cm 1 0 0 1 %.2F %.2F cm',$c,$s,-$s,$c,$cxL,$cyL,-$cxL,-$cyL));
    }
}

function _endpage()
{
    if($this->angleL!=0)
    {
        $this->angleL=0;
        $this->_out('Q');
    }
    parent::_endpage();
}
}
?>