<section class="project">
    <div class="container">
        <div class="project-grid d-grid">
            <?php
            foreach($projects as $key => $value) {
            ?>
                <div class="project-item row">
                    <div class="project-img col-md-6">
                        <img src="<?= $value['image'] ?>" alt="project image">
                    </div>
                    <div class="project-content flow col-md-6">
                        <h2 class="mb-0">
                            <span class="project-id d-block"><?= $value['id'] < 10 ? "0${value['id']}" : $value['id']; ?></span>
                            <span class="project-title d-block fs-2"><?= $value['title'] ?></span>
                        </h2>
                        <h3 class="project-date heading fst-italic text-secondary mb-0">2018 / 07 / 07</h3>
                        <p class="mb-0">
                            <?= $value['description'] ?>
                        </p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>