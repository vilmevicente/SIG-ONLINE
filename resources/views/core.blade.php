<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{secure_asset('core.css')}}">
    <title>Core SIG</title>

</head>
<body>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

<div class="menu">
  <input type="checkbox" id="toggle" />
  <label id="show-menu" for="toggle">
    <div class="btn-center">
      <i class="material-icons md-36 toggleBtn menuBtn"> </i>
      <i class="material-icons md-36 toggleBtn closeBtn">close</i>
      <img src="{{secure_asset('core/2.png')}}" alt="">
    </div>
    <a href="/arquivos" class="btn" title="Arquivos e Expediente">
        <img src=" {{secure_asset('core/folder.png')}}" alt="">

    </a>
    <a href="/vendas"  class="btn" title="Vendas">
        <img src="  {{secure_asset('core/shopping-bag 1.png')}}" alt="">

    </a>
    <a  href="compras" class="btn" title="Compras">
        <img src=" {{secure_asset('core/shopping 1.png')}}" alt="">

    </a>
    <a  href="/logística" class="btn" title="Logística">
        <img src="{{secure_asset('core/ready-stock 1.png')}}" alt="">

    </a>
    <a  href="/operacoes" class="btn" title="Gestão de Projetos">
      <img src=" {{secure_asset('core/cw.png')}}" alt="">
    </a>
    <a  href="/financas" class="btn" title="Finanças">
        <img src="{{secure_asset('core/money 1.png')}}" alt="">

    </a>
    <a  href="/qualidade" class="btn" title="Qualidade">
        <img src="{{secure_asset('core/gear 1.png')}}" alt="">

    </a>
    <a href="/recursos" class="btn" title="Recursos Humanos">
        <img src="{{secure_asset('core/shopping-bag 2.png')}}" alt="">

    </a>
  </label>
</div>
<footer>
    <h1>SIG-EC3M</h1>
    <p>Olá seja bem-vindo ao Sistema integrado de gestão da EC3M
    </p>
</footer>
</body>

</html>