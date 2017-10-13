<?php

function replacefile($origin)
{
  file_put_contents('config.txt', file_get_contents($origin));
}

if (isset($_GET['onwithip'])) {
  file_put_contents('config.txt', strtr(file_get_contents('onwithip.txt'), array('##IP##'=>$_GET['onwithip'])) );
} elseif (isset($_GET['on'])) {
  replacefile('on.txt');
} elseif(isset($_GET['off'])) {
  replacefile('off.txt');
}



echo file_get_contents('config.txt');