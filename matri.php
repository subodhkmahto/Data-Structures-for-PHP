<?php

$matrix=[[1,2,3],[4,5,6],[7,8,9]];

for($i=0;$i<count($matrix);$i++){
    for($j=0;$j<count($matrix[$i]);$i++){
        if($i==$j){
            continue;
        }else{
            $matrix[$j][$i]=$matrix[$i][$j];
        }
    }
}
print_r($matrix);

?>