<?php
    $message = $this->session->flashdata('message');
    $alert;$alert_icon;

    if(!empty($message)){

      if($message['sts']==1){$alert = "alert-success"; $alert_icon="fa-check";}
      else {$alert = "alert-danger";$alert_icon="fa-ban";}

      echo '              
          <div class="alert '.$alert.' alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fa '.$alert_icon.'"></i>
            '.$message['msg'].'
          </div>                        
      ';
    }  
?> 