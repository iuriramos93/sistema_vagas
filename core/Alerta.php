<?php
    if(isset($_SESSION['alerta'])):
?>
        <br>
                <div class="alert <?= $_SESSION['alerta']['tipo']; ?>  alert-block" >
                    <a class="close" data-dismiss="alert" aria-label="Close" href="#"><span aria-hidden="true">×</span></a>
                       <h4 class="alert-heading"><?= $_SESSION['alerta']['mensagem']; ?></h4>
                </div>
<?php
        unset($_SESSION['alerta']);
       endif;
?>