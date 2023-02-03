<?php 

function runtime_prettier($lungime = 0){
    $hours = 0;
    if($lungime == 0){
        return 'No runtime';
    }else if( $lungime == 1){
        return $lungime. 'minut';
    }else if( $lungime > 1 && $lungime <60){
        return $lungime. 'minute';
    }else {
        $hours = floor($lungime / 60);
        $minutes = $lungime%60;

        return $hours. ( ($hours ==1)? ' ora ' : ' ore '). $minutes . (($minutes == 1)? ' minut ' : ' minute ');
    }
   
}


?>