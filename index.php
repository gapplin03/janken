<?php
  $name = htmlspecialchars($_POST['name'],ENT_QUOTES);
  $opinion = htmlspecialchars($_POST['opinion'],ENT_QUOTES);

  echo "お名前は".$name."さん<br>".$opinion."<br>上記の意見で賜りました。"
  ?>