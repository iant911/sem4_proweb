<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href ="style.css">
  <title>BMI CALCULATOR</title>
</head>

<body>
<div class="container">
  <h1>BMI CALCULATOR</h1>

  <form action="hasil.php" id="formBMI" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="species">Species:</label>
    <label for="male">Male</label>
    <input type="radio" id="Male" name="species" value="male" <?php echo (isset($species) && $species == 'male') ? 'checked' : ''; ?>>
    <label for="female">Female</label>
    <input type="radio" id="female" name="species" value="female" <?php echo (isset($species) && $species == 'female') ? 'checked' : ''; ?>>

    <label for="height">Tinggi Badan (cm):</label>
    <input type="number" id="height" name="height" required value="<?php echo isset($height) ? $height : ''; ?>">

    <label for="weight">Weight (kg):</label>
    <input type="number" id="weight" name="weight" required value="<?php echo isset($weight) ? $weight : ''; ?>">

    <button type="submit" name="BMIcount">COUNT</button>
  </form>

