<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield("titulo")</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
      nav, footer {
        background-color: #2f3237;
        color: white;
      }

      nav ul {
        display: flex;
        justify-content: center;
      }

      nav li {
        margin: 0.5em 2em;
        list-style: none;
      }

      footer {
        width: 100%;
        text-align: center;
        position: fixed;
        bottom: 0;
      }
    </style>
  </head>
  <body>
    <nav>
      <ul>
        <li><a href="{{action('GamesController@index')}}">Minijuegos</a></li>
        <li><input type="text" name="name" placeholder="Buscar juegos"></li>
        <li><a href="#">Entrar</a></li>
      </ul>
    </nav>

    <main class="container">
      @yield("main")
    </main>

    <footer>
      Todos los derechos reservados. Proyecto Fin de Ciclo.
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
