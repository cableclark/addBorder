<?php
function addBorder($picture) {
    $addon="";
    $size = strlen($picture[0])+2;
    $arr= [];
    
    for ($i=0; $i<$size;$i++) {
        $addon .= "*";     
    }
    
   foreach ($picture as $element) {
        $arr[] = "*" .$element . "*";
       
   }
    array_unshift($arr,$addon );
    array_push($arr,$addon);
    print_r($arr);
    
}


addBorder(["wzy**"]);


//["*******", 
// "*wzy***", 
// "*******"]
