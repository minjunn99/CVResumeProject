<!-- Hero Section -->
<section class="hero py-0">
    <div class="hero-content text-white">
        <h3 class="hero-heading text-center text-capitalize">let's hire</h3>
        <p class="fs-3 text-capitalize">We are the Team of Amazing Creative People</p>
    </div>
</section>

<!-- Team Section -->
<section class="team">
    <div class="team-container container">
        <h3 class="hero-heading text-center text-capitalize">members of our team</h3>
        <?php
        foreach($member as $key => $value) {
        ?>
        <div class="member row py-4">
            <div class="member-info col-md-6">
                <h6 class="fs-4 fw-semibold text-capitalize mb-3"><?= $value["full_name"] ?></h6>
                <p class="fs-6"><?= $value["description"] ?></p>
                <a href="./index.php?controller=about&id=<?= $value["id"] ?>" class="btn btn-info text-white text-capitalize">
                    about me
                </a>
                <a href="./index.php?controller=contact&id=<?= $value["id"] ?>" class="btn btn-primary text-capitalize">
                    hire me
                </a>
            </div>
            <div class="member-img col-md-6">
                <img src="<?= $value["image"] ?>" alt="" />
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</section>