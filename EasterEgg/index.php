<html>
<head>
    <title>
        You Found me!
    </title>
    <link rel="shortcut icon" href="Spongebob.png"/>
</head>
<body>
<style>
    .center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
    }
</style>

<img src="sponge.gif" class="center">
<span id="blinker" class="center" style="font-size: xx-large; ">Als dit geen 10 waard is!</span>
<script>
    var blink_speed = 100;
    var t = setInterval(function () {
        var ele = document.getElementById('blinker');
        ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden');
    }, blink_speed);
</script>
<audio autoplay loop>
    <source src="music.mp3">
</audio>
</body>
</html>
<?php
include "achtergrond.js"
?>