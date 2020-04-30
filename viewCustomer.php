<?php
  include '../view/header.php';
?>


<div id="mainCustomer">
<h3>Customer Info</h3>
<?php foreach ($customers as $cust) : ?>
<p>Name: <?php echo $cust['cusFName'];?> <?php echo $cust['cusLName'];?></p>
<p>Phone: <?php echo $cust['cusPhone'];?></p>
<p>Email: <?php echo $cust['cusEmail'];?></p>
<p>ID: <?php echo $cust['cusId'];?></p>
<?php endforeach; ?>

<table>
            <tr>
                <th>Year</th>
                <th>Model</th>
                <th>Make</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>



            <?php foreach ($vehicles as $vehicle) : ?>
            <tr>
                <td><?php echo $vehicle['vYear']; ?></td>
                <td><?php echo $vehicle['vModel']; ?></td>
                <td><?php echo  $vehicle['vmake']; ?></td>
                <td><form action="../view/deletVeh.php" method="post">
                    <input type="hidden" name="vDelete"
                           value="<?php echo $vehicle['vId']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
                <td><form action="../view/getTireInfo.php" method="post">
                    <input type="hidden" name="vTires"
                           value="<?php echo $vehicle['vId']; ?>">
                    <input type="submit" value="View More">
                </form></td>
            </tr>
            <?php endforeach; ?>
</table>
<?php foreach ($customers as $cus) : ?>
<form action="../view/addVehicle.php" method="post">
     <input type="hidden" name='cusId' value="<?php echo $cus['cusId']; ?>">
     <input type="submit" value="Add Vehicle">
</form>
<?php endforeach; ?>
</div>


<?php
include '../view/footer.php';
?>
