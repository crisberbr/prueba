<!DOCTYPE html>
<html>
<head>
<title>PET</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<meta charset="utf-8">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <h1>Developer practical questions</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 mx-auto ">
      <form action="comprobar.php" method="post">
        <div class="form-group">
          <label for="name1">Name</label>
          <input type="text" name="name" required class="form-control"/>
        </div>
        <div class="form-group">
          <label for="name1">Owner</label>
          <input type="text" name="owner" required class="form-control"/>
        </div>
        <div class="form-group">
          <label for="name1">Species</label>
          <input type="tex" name="species" required class="form-control"/>
        </div>
		
		<div class="form-group">
          <label for="name1">Sex</label>
          <input type="tex" name="sex" required class="form-control"/>
        </div>
		
		<div class="form-group">
          <label for="name1">Birth</label>
          <input type="date" name="birth" required class="form-control"/>
        </div>
		
		<div class="form-group">
          <label for="name1">Death</label>
          <input type="date" name="death" required class="form-control"/>
        </div>
		
        <div class="form-group">
          <input type="submit"   value="Validar" class="btn btn-primary"/>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="panel-footer">
  <div class="container">
    
  </div>
</div>
</body>
</html>


