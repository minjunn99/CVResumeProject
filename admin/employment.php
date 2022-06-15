<?php
include('./includes/functions.php');
$data = getEmploymentInfo($_SESSION['user']['id']);
?>
<div class="flex-grow-1 dashboard">
    <div class="p-5">
        <h5>
            Employment Manage
        </h5>
        <a href="./add_employment.php" class="btn btn-secondary my-2" >Add a new employment</a>
        <table class="table">
            <thead class="bg-secondary text-white">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Undertake</th>
                    <th scope="col">Detail</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date Start</th>
                    <th scope="col">Date End</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $index=1;
                foreach ($data as $item) {
                ?>
                <tr>
                    <th scope="row"><?= $index ?></th>
                    <td><?= $item['undertake'] ?></td>
                    <td><?= $item['detail'] ?></td>
                    <td><?= $item['description'] ?></td>
                    <td><?= $item['date_start'] ?></td>
                    <td><?= $item['date_end'] ?></td>
                    <td>
                        <a href="./edit_employment.php?id=<?= $item['id'] ?>"><i class="bi bi-pencil-square"></i></a>
                        <a href="./delete_employment.php?id=<?= $item['id'] ?>"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                <?php
                    $index++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>