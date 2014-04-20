<h1>Ставок: <?php echo Biznes_bet::$count_bet; ?>!</h1>
<?php for ($i=0;$i<count($data);$i++){ ?>
<div>
     <?php    foreach ($data[$i] as $key => $value){ ?>
    <span> <?php   echo $value; ?> </span>
     <?php   } ?>
</div>
 <?php   } ?>