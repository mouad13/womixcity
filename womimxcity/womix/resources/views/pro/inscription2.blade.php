<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="">
  <meta name="author" content="">
  <title>Blue Wash</title>

  <!-- Bootstrap core CSS -->
  <link href="../css/bootstrap/sbcss/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- Plugin CSS -->
  <link href="../css/bootstrap/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/sb-admin.css" rel="stylesheet">

</head>

  <body>
    <div class="container">
      <div class="row">

      <div class="col-sm-4">

      </div>
      <div class="col-sm-4">
        <img class="logo-bw" src="../img/bluewash.png" alt="logo bluewash">


        <form method='post' id="form" enctype="multipart/form-data" action='http://127.0.0.1:8000/admin/users/add-save'>
          {{csrf_field()}}

          <div class="form-group">
            <label for="InputName">Name: </label>
            <input name="name" type="text" class="form-control" id="InputName" placeholder="name">
          </div>
          <div class="form-group">
            <label for="InputEmail1">Email: </label>
            <input name="email" type="email" class="form-control" id="InputEmail1" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="InputPassword1">Password: </label>
            <input name="password" type="password" class="form-control" id="InputPassword1" placeholder="Password">
          </div>

          <div class="form-group">
            <!-- <input name="id_cms_privileges" type="hidden" id="" value="2"> -->
            <label for="Input">vous etes: </label>
            <select id="Input" class="form-control" name="id_cms_privileges">
              <option disabled selected> vous etes</option>
              <option value="3">commercants</option>
              <option value="4">centre de revalorisation</option>
              <option value="5">port/collectivité</option>
            </select>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>

        </form>
      </div>
      <div class="col-sm-4">

      </div>
    </div>

    </div>

  </body>
</html>
