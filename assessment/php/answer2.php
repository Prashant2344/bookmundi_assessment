<?php
class arrayAnser
{
    public $filerList = [];

    public function filterList()
    {
        $arrPrices = [100,152,200,222,500];
        $threshold  = 500;
        for ($x = 0; $x < count($arrPrices); $x++) {
            if($arrPrices[$x] < $threshold){
                array_push($filerList,$arrPrices[$x]);
            }
        }
        print_r($filerList);
    }

    public function filterListSum(){
        $filterSum = 0;
        $filerList = $this->filerList;
        for ($x = 0; $x < count($filerList); $x++) {
            $filterSum += $filerList[$x];
        }
        print_r($filterSum);
    }
}
