<?php
include('./includes/functions.php');
$data = getTestimonialInfo($_SESSION['user']['id']);
?>
<div class="flex-grow-1 dashboard">
    <div class="p-5">
        <h5>
            Testimonial Manage
        </h5>
        <a href="./add_testimonial.php" class="btn btn-secondary my-2" >Add a new Testimonial</a>
        <table class="table">
            <thead class="bg-secondary text-white">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Comment</th>
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
                    <td><?= $item['full_name'] ?></td>
                    <td><?= $item['comment'] ?></td>
                    <td>
                        <a href="./edit_testimonial.php?id=<?= $item['id'] ?>"><i class="bi bi-pencil-square"></i></a>
                        <a href="./delete_testimonial.php?id=<?= $item['id'] ?>"><i class="bi bi-trash"></i></a>
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