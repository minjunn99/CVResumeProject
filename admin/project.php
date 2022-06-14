<?php
include('./includes/functions.php');
$data = getProjectInfo($_SESSION['user']['id']);
?>
<div class="flex-grow-1 dashboard">
    <div class="p-5">
        <table class="table">
            <thead class="bg-secondary text-white">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date</th>
                    <th scope="col">Image</th>
                    <th scope="col">Demo</th>
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
                    <td><?= $item['title'] ?></td>
                    <td><?= $item['description'] ?></td>
                    <td><?= $item['date'] ?></td>
                    <td><?= $item['image'] ?></td>
                    <td><?= $item['demo'] ?></td>
                    <td>
                        <i class="bi bi-pencil-square"></i>
                        <i class="bi bi-trash"></i>
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