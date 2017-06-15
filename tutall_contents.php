<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
		<title>TUT-ALL "Una red social de tutoriales"</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
  </head>
<body>
  <div class="contenedor">


  <header>
    <div id="logo">
      <a href="tutall.html">
        <img src="img/logo_.png" width=200 id="imglogo">
      </a>
    </div>

    <?PHP
      require_once('session.php');

      if (!isLogged()) {
        ?>
          <div class="registro">
            <ul>
              <li>
                <a href="login.php">Iniciar Sesión</a>
              </li>

              <li>
                <a href="register.php">Registrate</a>
              </li>

          </div>
        <?PHP
      } else {
        ?>
          <div class="bienvenida">
            <ul>
              <li>
                <p>Bienvenido <?PHP require_once('session.php'); echo getMail();?>!<p>
              </li>
              <li>
                <a href="/logout.php">Cerrar sesion</a>
              </li>
          </div>
        <?PHP
      }
    ?>

    <input type="checkbox" id="btn-menu">
    <label for="btn-menu"><img src="img/menu-icon.png" width=27px id="toggle"/></label>

    <nav class="menu">
        <ul>
  				<li>
  					<a href="tutall.html">Inicio</a>
  				</li>

  				<li>
            <a href="#">Destacados</a>
  				</li>

          <li>
            <a href="#">Categorías</a>
  				</li>
  			</ul>

  		</nav>

  </header>


  <section class="Recomendados">
    <h2>Recomendados</h2>
    <article class="r01">
      <iframe width=90% height="137" src="https://www.youtube.com/embed/EB4BG3QZn3o" frameborder="0" allowfullscreen></iframe>
      <h3>Como hacer un menú de navegación adaptable a dispositivos móviles (Responsive Design)</h2>
      <p>Lorem ipsum dolor sit amet</p>
    </article>

    <article class="r02">
      <iframe width=90% height="137" src="https://www.youtube.com/embed/WvYsIGYsgJQ" frameborder="0" allowfullscreen></iframe>
      <h3>METALLICA - Nothing Else Matters (HD) español traducida subtitulado</h2>
      <p>Lorem ipsum dolor sit amet</p>
    </article>

    <article class="r03">
      <iframe width=90% height="137" src="https://www.youtube.com/embed/yv6jiqVmmSI" frameborder="0" allowfullscreen></iframe>
      <h3>Cristina Ramos - Got Talent 2016 Opera Rock - Highway to hell</h2>
      <p>Lorem ipsum dolor sit amet</p>
    </article>

    <article class="r04">
      <iframe width=90% height="137" src="https://www.youtube.com/embed/9GbjYS2k24U" frameborder="0" allowfullscreen></iframe>
      <h3>The Voice Ukraine Pierre Edel Whole Lotta Love 'Led Zeppelin' High Quality</h2>
      <p>Lorem ipsum dolor sit amet</p>
    </article>

    <article class="r05">
      <iframe width=90% height="137" src="https://www.youtube.com/embed/ZHrfO7mbIRs" frameborder="0" allowfullscreen></iframe>
      <h3>Como hacer un Menu Vertical estilo Acordeón con HTML, CSS y Jquery (Parte 1)</h2>
      <p>Lorem ipsum dolor sit amet</p>
    </article>
  </section>

  <section class="Destacados">
    <h2>Destacados</h2>
    <article class="d01">
      <iframe width=90% height="137" src="https://www.youtube.com/embed/EB4BG3QZn3o" frameborder="0" allowfullscreen></iframe>
      <h3>Como hacer un menú de navegación adaptable a dispositivos móviles (Responsive Design)</h2>
      <p>Lorem ipsum dolor sit amet</p>
    </article>

    <article class="d02">
      <iframe width=90% height="137" src="https://www.youtube.com/embed/WvYsIGYsgJQ" frameborder="0" allowfullscreen></iframe>
      <h3>METALLICA - Nothing Else Matters (HD) español traducida subtitulado</h2>
      <p>Lorem ipsum dolor sit amet</p>
    </article>

    <article class="d03">
      <iframe width=90% height="137" src="https://www.youtube.com/embed/yv6jiqVmmSI" frameborder="0" allowfullscreen></iframe>
      <h3>Cristina Ramos - Got Talent 2016 Opera Rock - Highway to hell</h2>
      <p>Lorem ipsum dolor sit amet</p>
    </article>

    <article class="d04">
      <iframe width=90% height="137" src="https://www.youtube.com/embed/9GbjYS2k24U" frameborder="0" allowfullscreen></iframe>
      <h3>The Voice Ukraine Pierre Edel Whole Lotta Love 'Led Zeppelin' High Quality</h2>
      <p>Lorem ipsum dolor sit amet</p>
    </article>

    <article class="d05">
      <iframe width=90% height="137" src="https://www.youtube.com/embed/ZHrfO7mbIRs" frameborder="0" allowfullscreen></iframe>
      <h3>Como hacer un Menu Vertical estilo Acordeón con HTML, CSS y Jquery (Parte 1)</h2>
      <p>Lorem ipsum dolor sit amet</p>
    </article>
  </section>

  <section class="MasVistos">
    <h2>Mas Visto</h2>
    <article class="m01">
      <iframe width=90% height="137" src="https://www.youtube.com/embed/EB4BG3QZn3o" frameborder="0" allowfullscreen></iframe>
      <h3>Como hacer un menú de navegación adaptable a dispositivos móviles (Responsive Design)</h2>
      <p>Lorem ipsum dolor sit amet</p>
    </article>

    <article class="m02">
      <iframe width=90% height="137" src="https://www.youtube.com/embed/WvYsIGYsgJQ" frameborder="0" allowfullscreen></iframe>
      <h3>METALLICA - Nothing Else Matters (HD) español traducida subtitulado</h2>
      <p>Lorem ipsum dolor sit amet</p>
    </article>

    <article class="m03">
      <iframe width=90% height="137" src="https://www.youtube.com/embed/yv6jiqVmmSI" frameborder="0" allowfullscreen></iframe>
      <h2>Cristina Ramos - Got Talent 2016 Opera Rock - Highway to hell</h2>
      <p>Lorem ipsum dolor sit amet</p>
    </article>

    <article class="m04">
      <iframe width=90% height="137" src="https://www.youtube.com/embed/9GbjYS2k24U" frameborder="0" allowfullscreen></iframe>
      <h3>The Voice Ukraine Pierre Edel Whole Lotta Love 'Led Zeppelin' High Quality</h2>
      <p>Lorem ipsum dolor sit amet</p>
    </article>

    <article class="m05">
      <iframe width=90% height="137" src="https://www.youtube.com/embed/ZHrfO7mbIRs" frameborder="0" allowfullscreen></iframe>
      <h3>Como hacer un Menu Vertical estilo Acordeón con HTML, CSS y Jquery (Parte 1)</h2>
      <p>Lorem ipsum dolor sit amet</p>
    </article>
  </section>

<footer>
        <div class="redes">
            <a href="https://www.facebook.com/" ><img src="img/facebook.png"></a>
            <a href="https://twitter.com/" ><img src="img/twitter.png"></a>
            <a href="https://www.instagram.com/" ><img src="img/instagram.png"></a>
            <a href="https://www.youtube.com/" ><img src="img/youtube.png"></a>
            <a href="https://ar.pinterest.com/" ><img src="img/pinterest.png"></a>
            <a href="https://plus.google.com/" ><img src="img/googleplus.png"></a>
        </div>

        <div class="copyright">
            <p class="copyright"> ©Copyright - Todos los derechos Reservados- Diseño Profesional Miguel - José - Damián y Andrea </p>
        </div>
        </div>
</footer>
</body>
</html>
