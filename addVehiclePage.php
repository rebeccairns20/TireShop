<?php
 include '../view/header.php';
?>
<div id="addVForm">
<form action="../view/incertVehicle.php" method="post">
   <h3>Add Vehicle</h3>
   <label>Vin Number:</label><input type="text" name="vin"></br>
   <label>Mileage:</label><input type="number" name="mile"></br>
   <label>Year:</label><input type="number" name="year"></br>
   <label>Model:</label><input type="text"name="model"></br>
   <label>Make:</label><input type="text" name="make"></br>
   <input type="hidden" value="<?php echo $cusId  ?>" name="customID">
   <input type="submit"></br>

</form>
</div>
<?php
 include '../view/footer.php';
?>
