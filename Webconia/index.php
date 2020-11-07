<!DOCTYPE html>
<html>
<head>
    <title>WTC</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <!-- Überschrift -->
    <h1 id="titel"><center>Tragen Sie sich jetzt ein zur Webconia Technology Conference 2021</center></h1>
    
    <!-- Formular zum Eintragen -->
    <form action = "einschreiben.php" method = "post" class="formular">
      <div class="form-group">
        <label for="vorname">Vorname*</label> 
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-address-book"></i>
            </div>  
          </div> 
          <input id="vorname" name="vorname" placeholder="z.B. Max" type="text" aria-describedby="vornameHelpBlock" class="form-control">
        </div> 
        <span id="vornameHelpBlock" class="form-text text-muted">*Pflichtfeld</span>
      </div>
      <div class="form-group">
        <label for="nachname">Nachname*</label> 
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-address-book"></i>
            </div>
          </div> 
          <input id="nachname" name="nachname" placeholder="z.B. Mustermann" type="text" aria-describedby="nachnameHelpBlock" class="form-control">
        </div> 
        <span id="nachnameHelpBlock" class="form-text text-muted">*Pflichtfeld</span>
      </div>
      <div class="form-group">
        <label for="email">Email*</label> 
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-envelope-open-o"></i>
            </div>
          </div> 
          <input id="email" name="email" placeholder="z.B. maxmustermann@gmail.com" type="text" class="form-control" aria-describedby="emailHelpBlock">
        </div> 
        <span id="emailHelpBlock" class="form-text text-muted">*Pflichtfeld</span>
      </div>
      <div class="form-group">
        <label for="firma">Firma</label> 
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fa fa-building"></i>
            </div>
          </div> 
          <input id="firma" name="firma" placeholder="z.B. Webconia" type="text" class="form-control">
        </div>
        <span id="emailHelpBlock" class="form-text text-muted">*Pflichtfeld</span>
      </div> 
      <div class="form-group">
        <button name="submit" type="submit" class="btn btn-primary">Einschreiben</button>
      </div>
    </form>
    
</body>
</html>