<?php
include_once('dbcon.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Student Marksheet</title>
  <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-6">
        <form class="mx-auto" method="post" action="add_data.php">
          <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" placeholder="Full Name" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="mil" class="form-label">Odia</label>
            <input type="number" class="form-control" id="mil" placeholder="M.I.L mark" name="mil" required>
          </div>
          <div class="mb-3">
            <label for="english" class="form-label">English</label>
            <input type="number" class="form-control" id="english" placeholder="English Mark" name="eng" required>
          </div>
          <div class="mb-3">
            <label for="hisa" class="form-label">Hindi/Sanskrit</label>
            <input type="number" class="form-control" id="pwd" placeholder="Hindi/Sanskrit mark" name="tlhs" required>
          </div>
          <div class="mb-3">
            <label for="math" class="form-label">Math</label>
            <input type="number" class="form-control" id="math" placeholder="Math mark" name="math" required>
          </div>
          <div class="mb-3">
            <label for="gsc" class="form-label">GSC</label>
            <input type="number" class="form-control" id="gsc" placeholder="G.Sc. mark" name="gsc" required>
          </div>
          <div class="mb-3">
            <label for="ssc" class="form-label">SSC</label>
            <input type="number" class="form-control" id="ssc" placeholder="S.Sc. mark" name="ssc" required>
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Save</button>
        </form>
      </div>
      <div class="col-12 col-md-6">
        <table class="table text-white text-center table-bordered my-3">
          <thead>
            <tr>
              <th class="bg-dark">Name</th>
              <th class="bg-info">MIL</th>
              <th class="bg-primary">SLE</th>
          <th class="bg-success">TLH/S</th>
         <th class="bg-warning">Math</th>
              <th class="bg-danger">GSC</th>
              <th class="bg-success">SSC</th>
              <th class="bg-primary">Mark</th>
            </tr>
          </thead>
          <tbody>
  <?php
$sql = "SELECT * FROM  marksheet";
$result = mysqli_query($dbcon, $sql);
    // output data of each
    
while($row = mysqli_fetch_assoc($result)) {
    ?>
  <tr>
<td class="bg-dark"><?php echo $row['name']; ?></td>
<td class="bg-info"><?php echo $row['mil']; ?></td>
    <td class="bg-primary"><?php echo $row['eng']; ?></td>
    <td class="bg-success"><?php echo $row['tlhs']; ?></td>
    <td class="bg-warning"><?php echo $row['math']; ?></td>
    <td class="bg-danger"><?php echo $row['gsc']; ?></td>
    <td class="bg-success"><?php echo $row['ssc']; ?></td>
    <td class="bg-primary"><?php echo $row['mark']; ?></td>
  </tr>
<?php
}
 ?>
      </tbody>
    </table>
  </div>
  </div>
  </div>

  <script src="bootstrap.min.js"></script>
</body>
</html>
