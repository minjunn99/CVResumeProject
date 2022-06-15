<?php
include('./includes/functions.php');
$data = getEducationInfo($_SESSION['user']['id']);
?>
<div class="flex-grow-1 dashboard">
    <div class="p-5">
        <h5>
            Education Manage
        </h5>
        <a href="./add_education.php" class="btn btn-secondary my-2" >Add a new education</a>
        <table class="table">
            <thead class="bg-secondary text-white">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Detail</th>
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
                    <td><?= $item['name'] ?></td>
                    <td><?= $item['detail'] ?></td>
                    <td><?= $item['date_start'] ?></td>
                    <td><?= $item['date_end'] ?></td>
                    <td>
                        <a href="./edit_education.php?id=<?= $item['id'] ?>"><i class="bi bi-pencil-square"></i></a>
                        <a href="./delete_education.php?id=<?= $item['id'] ?>"><i class="bi bi-trash"></i></a>
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