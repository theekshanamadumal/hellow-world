<?php

    

    require_once 'controller/request.ctrl.php';
    $reqctrll=new requestCtrl();
    $massege=$reqctrll->requst($variable);
    echo$massege;
    

    

?>