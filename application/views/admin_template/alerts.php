<?php 
if(isset($alertActive) && $alertActive == TRUE){
?>
<div class="w3-twothird w3-panel w3-top w3-animate-zoom w3-mobile w3-right <?=$className?>">
    <span onclick="this.parentElement.style.display='none'"
    class="w3-button w3-large w3-display-topleft">&times;</span>
    <div class="w3-padding-24">
    <h3><?=$alertHead?></h3>
    <p><?=$alertData?></p>
    </div>
</div>

<?php } ?>
            