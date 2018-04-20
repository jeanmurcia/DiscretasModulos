<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jean Murcia Matematicas Discretas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid" style="background-color: green">
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" >Matematicas Discretas</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
      
    </div>
  </div>
</nav>
<div id="content">
<div class="row">
<div class="col-sm-6">
<form class="form-horizontal" method="post" onsubmit="submit.action">
<fieldset>

<!-- Form Name -->
<legend></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="base">Base</label> 
  <div class="col-md-2">
  <input id="base" name="base" placeholder="Base" class="form-control input-md" required="" type="text">
  <span class="help-block">Base</span> 
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="exponente">Exponente</label> 
  <div class="col-md-2">
  <input id="exponente" name="exponente" placeholder="Exponente" class="form-control input-md" required="" type="text">
  <span class="help-block">Exponente</span> 
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="modulo">Modulo</label> 
  <div class="col-md-2">
  <input id="modulo" name="modulo" placeholder="Modulo" class="form-control input-md" required="" type="text">
  <span class="help-block">Modulo</span> 
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="calcular"></label>
  <div class="col-md-4">
    <button id="calcular" name="calcular" class="btn btn-danger">Calcular</button>
  </div>
</div>

</fieldset>
</form>
</div>
<div class="col-sm-6">
  <h2>
    <div id="contenModal">
      <div id="baseNew" style="display: inline-block;">x</div><sup id="exponenteNew">y</sup>Mod<div id="moduloNew" style="display: inline-block;">z</div>
    </div>
  </h2>
  <div>
    <?php

$entradas_post = filter_input_array(INPUT_POST);
if (!empty($entradas_post)) {
    extract($entradas_post);
    $binario = decbin($exponente);
    $arrayBinario = array_reverse(preg_split('//', $binario, -1, PREG_SPLIT_NO_EMPTY));
    $x = 1;
    $potencia = $base;
      echo $exponente. " En Numero Binario = ".$binario;
      echo "<br>";
      echo "<br>";
      foreach ($arrayBinario as $key ) {
       if ($key==1) {
         
         echo "Binario =".$key;
         echo "<br>";
         echo "x=".$base." * ".$x."(mod ".$modulo .")";
         echo "<br>";
         $x= ($base*$x)% $modulo; 
         echo "x=".$x;
         echo "<br>";
         echo "<br>";
       }elseif ($key==0) {
         
         echo "Binario = ".$key;
         echo "<br>";
         echo "Potencia = ".$potencia."*".$base."(mod ".$modulo .")";
         $potencia = ($potencia*$base)% $modulo;
         echo "<br>";
         echo "Potencia = ".$potencia;
         echo "<br>";
         echo "<br>";
       }
      }
      
      //$modulo
}

?>
</div>
</div>
</div>
</div>

<script type="text/javascript">

    $("#base").keyup(function(){
        newvar = $("#base").val()
    $('#baseNew').empty();  
    $('#baseNew').html(newvar);
    });

    $("#exponente").keyup(function(){
        newvar = $("#exponente").val()
    $('#exponenteNew').empty();  
    $('#exponenteNew').html(newvar);
    });


    $("#modulo").keyup(function(){
        newvar = $("#modulo").val()
    $('#moduloNew').empty();  
    $('#moduloNew').html(newvar);
    });

</script>

<footer class="container-fluid text-center" style="background-color: green">
  <p>Jean Murcia Torres - UMB</p>
</footer>

</body>
</html>
