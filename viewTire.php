
<?php include '../view/header.php';?>


<div id="mainCustomer">
<h3>Vehicle Info</h3>
<?php foreach ($vehicles2 as $veh) : ?>
<p>Model/Make: <?php echo $veh['vModel'];?> <?php echo $veh['vmake'];?></p>
<p>Vin: <?php echo $veh['vVin'];?></p>
<p>Milage: <?php echo $veh['vMilage'];?></p>
<p>ID: <?php echo $veh['vId'];?></p>
<p>Year: <?php echo $veh['vYear'];  ?></p>
<?php endforeach; ?>

<table>
    <tr>
       <th>ID</th>
       <th>Position</th>
       <th>Code</th>
       <th>Name</th>
       <th>Install</th>
       <th>Repair#</th>
       <th>&nbsp;</th>
       <th>&nbsp;</th>
    </tr>

    <?php foreach ($tires as $tire) : ?>
        <tr>
           <td><?php echo $tire['tId']; ?></td>
           <td><?php echo $tire['tPos']; ?></td>
           <td><?php echo  $tire['tCode']; ?></td>
           <td><?php echo  $tire['tName']; ?></td>
           <td><?php echo  $tire['tInstall']; ?></td>
           <td><?php echo  $tire['tRepairNum']; ?></td>
           <td><form action="../view/deleteTire.php" method="post">
           <input type="hidden" name="tDelete"
                           value="<?php echo $tire['tId']; ?>">
           <input type="submit" value="Delete">
           </form></td>
           <td><form action="../Control/tireUpdateForm.php" method="post">
           <input type="hidden" name="tTires"
                           value="<?php echo $tire['tId']; ?>">
           <input type="submit" value="Edit">
           </form></td>
         </tr>
     <?php endforeach; ?>

</table>
<?php foreach ($vehicles2 as $vehicle) : ?>
           <form action="../Control/addTirePage.php" method="post">
                <input type="hidden" name='carId2' value="<?php echo $vehicle['vId']; ?>">
                <input type="submit" value="Add Tire">
        </form>
           <?php endforeach; ?>
</div>


<?php
  include '../view/footer.php';
?>
