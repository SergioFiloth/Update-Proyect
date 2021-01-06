<table class="tableO">
    <tbody class="bodyT">
        <tr class="trH">
            <th>Orders</th>
        </tr>
        <?php
						include "../../../php/db.php";

						$query = mysqli_query($conexion, "SELECT * FROM buyer");
						$result = mysqli_num_rows($query);
						if ($result > 0) {
							while ($data = mysqli_fetch_assoc($query)) { ?>
        <tr>
            <td><?php echo $data['orden']; ?></td>
            <td><?php echo $data['item']; ?></td>
            <td><?php echo $data['price']; ?></td>
            <td><?php echo $data['date']; ?></td>
            <td><?php echo $data['duedate']; ?></td>
            <td><?php echo $data['status']; ?></td>
            <?php }
                        } ?>
        </tr>
    </tbody>
</table>