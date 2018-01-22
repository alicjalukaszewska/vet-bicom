<!DOCTYPE html>
<html>
<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
	  <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>

<body>
	<div class="page-header" id="header" >
    <ul id="head" class="list-inline row container">
    	<li id="home_" class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    		<a href="<?php bloginfo( 'home' ); ?>"><img class="img-responsive" id="logo" src="<?=get_template_directory_uri(); ?>/img/logo.png" alt="logo Vet-Bicom"></img></a>
    	</li>
      <li class="col-lg-4 col-md-4 hidden-sm hidden-xs ">
    		<img id="dogcat" class="img-responsive" src="<?=get_template_directory_uri(); ?>/img/pik.gif" alt="pies goni kota"></img>
    	</li>
      <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
        <div id="info" >
          <table>
            <tbody>
              <tr>
                <td class="info-tag">tel/fax:</td>
                <td class="info-contact" id="tel"><strong>(22) 702 21 05</strong></td>
              </tr>
              <tr>
                <td class="info-tag">e-mail:</td>
                <td class="info-contact">
			            <script type="text/javascript">
                    // <![CDATA[
                    var uzytkownik = 'mirkowski';
                    var domena = 'orange.pl';
                    var opis = 'mirkowski@orange.pl';
                    document.write('<a hr' + 'ef="mai' + 'lto:' + uzytkownik + '\x40' + domena + '">');
                    if (opis) document.write(opis + '<'+'/a>');
                    else document.write(uzytkownik + '\x40' + domena + '<'+'/a>');
                    // ]]>
                  </script>
	              </td>
              </tr>
              <tr>
                <td class="info-tag" id="adres">adres:</td>
                <td class="info-contact">
                  <p>ul. Krótka 3E<br/>Raszyn 05-090</p>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
    	</li>
    </ul>
        
    <nav id="menu" class="menu navbar navbar-default" role="navigation">
    	<div class="container">
        <div class="navbar-header">
  	      <button type="button" id="menubut" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-3">
            <span class="sr-only">Rozwiń nawigację</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div id="brand" class="visible-xs hidden-sm hidden-md hidden-lg">
            <a href="#home"><h2> Vet-Bicom </h2></a>
          </div>
        </div>

        <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-3">
          <ul id="menulist" class="nav navbar-nav nav-justified">
          	<li><a href="<?php bloginfo( 'home' ); ?>#home"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="<?php bloginfo( 'home' ); ?>#uslugi">Usługi</a></li>
            <li id="biomenu"><a href="<?php bloginfo( 'home' ); ?>#biorezonans">Biorezonans</a></li>
            <li><a href="<?php bloginfo( 'home' ); ?>#laboratorium">Laboratorium</a></li>
            <li><a href="<?php bloginfo( 'home' ); ?>#about">O nas</a></li>
            <li><a href="<?php bloginfo( 'home' ); ?>#galeria">Galeria</a></li>
            <li><a href="<?php bloginfo( 'home' ); ?>/blog/#porady">Porady</a></li>
            <li><a href="<?php bloginfo( 'home' ); ?>#kontakt">Kontakt</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

    <div id="carousel-example-generic2" class="carousel slide auto hidden-xs"  data-ride="carousel">
      <!-- Wskaźniki w postaci kropek -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic2" data-slide-to="2"></li>
      </ol>

      <!-- Slajdy -->
      <div class="carousel-inner">
        <div id="item1" class="item active">
          <!-- Opis slajdu -->
          <div class="carousel-caption">
            <h3>Witamy Cię serdecznie na naszej stronie!</h3>
            <p>Nasz gabinet specjalizuje się w leczeniu małych zwierząt oraz w terapii alergii u ludzi i zwierząt. Znajdziesz tutaj również wiele ciekawych porad dotyczących Twojego pupila oraz dlaczego warto u niego wykonywać profilaktyczne badania kontrolne.<br/>
            Serdecznie zapraszamy!</p>
          </div>
        </div>

        <div id="item2" class="item">
          <!-- Opis slajdu -->
          <div class="carousel-caption">
            <h3>Biorezonans</h3>
            <p>Terapia biorezonansem elektromagnetycznym – alternatywna metoda leczenia schorzeń ludzi i zwierząt</p> <a href="<?php bloginfo( 'home' ); ?>/2017/02/13/terapia-biorezonansem-elektromagnetycznym/">
              <button class="btn btn-success">Poznaj Bicom</button></a>
          </div>
        </div>

        <div id="item3" class="item">
          <!-- Opis slajdu -->
          <div class="carousel-caption">
            <h3>Laboratorium</h3>
            <p>Badanie krwi, moczu oraz kału – czyli dlaczego warto wykonywać badania laboratoryjne u zwierząt?</p> <a href="<?php bloginfo( 'home' ); ?>/2017/02/13/badanie-krwi-moczu-kalu/"><button class="btn btn-success">Czytaj dalej</button></a>
          </div>
        </div>
      </div>

      <!-- Strzałki do przewijania -->
      <a class="left carousel-control" href="#carousel-example-generic2" data-slide="prev">
        <span class="icon-prev"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic2" data-slide="next">
        <span class="icon-next"></span>
      </a>
    </div>