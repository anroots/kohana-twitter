<?php foreach ($msgs as $msg_type => $msgs_of_type): ?>
<?php
    foreach ($msgs_of_type as $msg):?>
    <div class="alert-message <?php echo $msg_type; ?>"><?php echo $msg;?></div>
    <?php endforeach ?>
<?php endforeach ?>
