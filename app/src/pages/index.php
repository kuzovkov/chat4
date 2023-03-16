<?php require_once('_header.php') ?>

    <p>Hello,
        <span id="nicname"><?=(isset($_COOKIE['nicname']))? $_COOKIE['nicname'] : ''?></span>&nbsp;
        <span id="room"><?=(isset($_COOKIE['room']))? $_COOKIE['room'] : ''?></span>&nbsp;
        <a class="exit-icon" href="/logout" id="exit-btn"></a> <!--<span style="cursor:pointer" id="test">test</span>-->
    </p>


<?php //require_once('_dialog.php')?>
<?php require_once('_footer.php')?>

