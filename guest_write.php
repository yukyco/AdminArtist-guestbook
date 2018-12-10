<?php
$file = fopen('guest.dat', 'ab');
flock($file, LOCK_EX);
fputs($file, date('Y/ m/ d/ H:i:s')."\t");
fputs($file, $_POST['name']."\t");
fputs($file, $_POST['contents']."\n");
flock($file, LOCK_UN);
fclose($file);
header('Location: http://yukycohamabe.ciao.jp/ArtistAdmin/guestbook/guest_input.php');
