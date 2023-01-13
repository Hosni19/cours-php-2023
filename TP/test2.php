<?php

if (!preg_match("/^[a-zA-Z-' ]/",$_POST['username'])) {
    echo 'Only letters and white space allowed';
  }

echo '<br> Votre adresse mail est : ' .$_POST['email'];
?>
