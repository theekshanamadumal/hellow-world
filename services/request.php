<?php

    

    require_once 'controller/request.ctrl.php';
    
    $reqctrll=new requestCtrl();
    list($massege,$status)=$reqctrll->requst($variable);

    require_once 'alert.view.php';

    $alertView=new alert();

    echo $alertView->showAlert($massege,$status);
    

    

    

?>
