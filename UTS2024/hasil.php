
<?php
  if (isset($_POST['BMIcount'])) {
    $species = $_POST['species'];
    $height = floatval($_POST['height']);
    $weight = floatval($_POST['weight']);
    $name = $_POST['name'];

    if (empty($height) || empty($weight)) {
      $error = "ENTER VALID HEIGHT OR WEIGHT PLEEK!";
    } else {
      $bmi = $weight / (($height / 100) * ($height / 100));
      $BMIstatus;
      if ($species === "male") {
        if ($bmi < 18.5) {
          $BMIstatus = "YOU ARE UNDERWEIGHT!";
        } else if ($bmi < 25) {
          $BMIstatus = "YOU ARE FIT!";
        } else if ($bmi < 30) {
          $BMIstatus = "YOU ARE PLUS SIZE!";
        } else {
          $BMIstatus = "YOU ARE OBCD";
        }
      } else if ($species === "female") {
        if ($bmi < 18.5) {
          $BMIstatus = "YOU ARE UNDERWEIGHT!";
        } else if ($bmi < 23) {
          $BMIstatus = "YOU ARE FIT!";
        } else if ($bmi < 25) {
          $BMIstatus = "YOU ARE PLUS SIZE!";
        } else {
          $BMIstatus = "YOU ARE OBCD";
        }
      }
    }
  }
  ?>

  <?php if (isset($error)): ?>
    <p style="color: red;"><?php echo $error; ?></p>
  <?php elseif (isset($bmi)): ?>
    <div class="result" id="BMIresult">
      <?php if (isset($name)): ?>
        <p>Nama: <?php echo $name; ?></p>
      <?php endif; ?>
      <p>Your BMI: <?php echo number_format($bmi, 2); ?></p>
      <p class="status">Status: <?php echo $BMIstatus; ?></p>
    </div>
  <?php endif; ?>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">

        
        </form>
    </div>
</body>
</html>