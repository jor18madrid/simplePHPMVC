<?php
/* Home Controller
 * 2014-10-14
 * Created By OJBA
 * Last Modification 2014-10-14 20:04
 */
  require_once("libs/template_engine.php");

  function run(){

    $datosPersonales =array(
      "nombre"=>"Orlando J",
      "correo"=>"@gmail.com"
    );
    addCssRef("public/css/home.css");
    renderizar("prdbacklog",$datosPersonales);
  }


  run();
?>
