
<?php

  require_once("libs/template_engine.php");

  function run(){

    $numero = array(
      "num"=>0
    );


    addCssRef("public/css/home.css");
    renderizar("nprdbacklog",$numero);
  }


  run();
?>
