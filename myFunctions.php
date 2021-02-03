<?php

function datumokIntervallumban($start, $end, $format = 'Y-m-d') {   
    // egy üres tömböt hozunk létre
    $tomb = array(); 
    //ebben a változóban tároljuk, hogy 1 naponként akarunk lépkedni
    $step = new DateInterval('P1D'); 
    //print_r($step);
    $end->add($step); 
    $period = new DatePeriod($start, $step, $end); 
    foreach($period as $date) {                  
        $tomb[] = $date->format($format);  
    } 
    return $tomb; 
} 

function ido($perc){
    $ora=intdiv($perc,60);
    $perc=fmod($perc,60);//maradék
    $idoIntervallum=new DateInterval("PT{$ora}H{$perc}M");
    return $idoIntervallum->format('%H:%I');
}
//visszatéríti az összes datumot egy hónapon belül tömbként:
function getDateArr($datum){
    $kezdoDatum=new DateTime($datum);
    $vegsoDatum=new DateTime($kezdoDatum->format( 'Y-m-t' ));//a hónap utolsó napja
    return datumokIntervallumban($kezdoDatum,$vegsoDatum); 
}
?>