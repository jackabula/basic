<?php

class postalcode
{
    public function findPrefix($area)
    {
        $postal = array(
            '新店區'=>'231',
            '中和區'=>'235',
            '永和區'=>'234',
            '文山區'=>'116',
        );

        return $this->handle($postal,$area);
    }
 
    private function handle($postal,$area)
    {
        foreach ($postal as $area => $postcalcode) {
            echo $area .'郵遞區號是'.$postcalcode;
            echo '<br>';
        }
    }
}