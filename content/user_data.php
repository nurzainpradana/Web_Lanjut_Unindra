<?php 
require '../koneksi.php';
?>

<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Level</th>
            <th>#</th>
        </tr>
    </thead>

    <tbody>
        <?php 
            $sql = 'SELECT * FROM users';
            $data = mysqli_query($conn, $sql);
            $no = (int) 1;
            foreach ($data as $row) {
            ?>
            <tr>
                <td><?php $no++; ?></td>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo $row['level'] ?></td>
                <td>#</td>
            </tr>
            <?php
            }
        ?>
    </tbody>
</table>