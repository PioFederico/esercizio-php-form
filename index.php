<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Hello</title>
  </head>
  <body>
    <div class="container">
      <h1>Inserisci i tuoi dati qui</h1>
      <form>
        <div class="form-group">
          <label for="name">Nome</label>
          <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Il tuo nome">
          <small id="nameHelp" class="form-text text-muted">Scrivi il tuo nome</small>
        </div>
        <div class="form-group">
          <label for="surname">Cognome</label>
          <input type="text" class="form-control" id="surname" placeholder="Il tuo cognome">
          <small class="form-text text-muted">Scrivi il tuo cognome</small>
        </div>
        <button type="submit" class="btn btn-primary">Iscriviti</button>
      </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"> </script>
    <script src="js/popper.min.js"> </script>
    <script src="js/bootstrap.min.js"> </script>
  </body>
</html>