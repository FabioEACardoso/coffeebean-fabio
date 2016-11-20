<?php
	$token = $_GET['token'];

  $ch = curl_init(); 


  curl_setopt($ch, CURLOPT_URL, "https://api-staging.socialidnow.com/v1/marketing/login/info?api_secret=2d3e42502228f7275099edac6c47702b22cd2f32e65a7da16b594e5b46c9d354&token=".$token); 


  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 


  $output = curl_exec($ch); 


  curl_close($ch);

  $decoded = json_decode($output, true);

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <div class="wrapper">
    <div class="content">

  <h1>Bem-vindo <?=$decoded["name"]?>!</h1>
<div>
  <img src="<?=$decoded["picture_url"]?>" style="float: left; margin-right: 20px" />
  <div>
    
    <br/>
    Email: <?=$decoded["email"]?>
  </div>
  <div class="clear"></div>
</div>

<div class="line"></div>

<div>
  <p><br/><b>Dados do usuário:</b></p>
  <p><br/>ID: <?=$decoded["id"]?>
     <br/>Token do usuário: <?=$decoded["id"]?>
     <br/>Nome: <?=$decoded["name"]?>
     <br/>Localização: <?=$decoded["location"]?>
     <br/>E-mail: <?=$decoded["email"]?>
     <br/>URL da foto: <?=$decoded["picture_url"]?>
     <br/>Conexão: <?=$decoded["connection"]?>
     <br/>ID de Conexão: <?=$decoded["connection_id"]?>
     </p>
  <pre><?=$output?></pre>
</div>



</body>
</html>
