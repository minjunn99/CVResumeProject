<!-- About section -->
<section class="about">
    <div class="container">
        <h3 class="heading text-secondary text-capitalize mb-4">about me</h3>
        <div class="row">
            <div class="col-md-4">
                <img class="about-img" src="<?= $member['image'] ?>" alt="">
            </div>
            <div class="col-md-8">
                <h5 class="fs-3 fw-semibold text-uppercase"><?= $member['full_name'] ?></h5>
                <p class="mb-0"><?= $member['description'] ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Education section -->
<section class="education bg-secondary bg-opacity-75 text-white">
    <div class="container">
        <h3 class="heading text-capitalize mb-4">education</h3>
        <div class="education-list">
            <?php
            foreach($education as $key=>$value) { 
            ?>
                <div class="education-item flow">
                    <h4 class="education-major mb-0"><?= $value['detail'] ?></h4>
                    <p class="education-info mb-0">
                        <?= $value['date_start'] ?>-<?= $value['date_end'] ?>
                    </p>
                    <p class="education-name fst-italic mb-0"><?= $value['name'] ?></p>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>

<!-- Employment section -->
<section class="employment">
    <div class="container">
        <h3 class="heading text-capitalize mb-4">employment</h3>
        <div class="employment-list">
            <?php
            foreach($employment as $key=>$value) { 
            ?>
                <div class="employment-item row">
                    <div class="employment-content col-md-6 flow">
                        <h4 class="employment-pos mb-0"><?= $value['undertake'] ?></h4>
                        <p class="employment-info text-secondary mb-0">
                            <?= $value['date_start'] ?>-<?= $value['date_end'] ?>
                        </p>
                        <p class="employment-address text-secondary fst-italic">
                            <?= $value['detail'] ?>
                        </p>
                    </div>
                    <div class="col-md-6">
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

<!-- Project section -->
<section class="project bg-secondary bg-opacity-75 text-white">
    <div class="container">
        <h3 class="heading text-capitalize mb-4">projects</h3>
        <div class="project-grid d-grid">
            <?php
            $index = 1;
            foreach($projects as $key => $value) {
            ?>
                <div class="project-item row">
                    <div class="project-img col-md-6">
                        <img src="<?= $value['image'] ?>" alt="project image">
                    </div>
                    <div class="project-content flow col-md-6">
                        <h2 class="mb-0">
                            <span class="project-id d-block"><?= $index < 10 ? "0${index}" : $index; ?></span>
                            <span class="project-title d-block fs-2"><?= $value['title'] ?></span>
                        </h2>
                        <h3 class="project-date heading fst-italic mb-0"><?= $value['date'] ?></h3>
                        <p class="mb-0">
                            <?= $value['description'] ?>
                        </p>
                        <?php
                        if($value['demo']) {
                        ?>
                            <a class="btn btn-dark text-capitalize" href="<?= $value['demo'] ?>" target="_blank">
                                source code
                            </a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            <?php
                $index++;
            }
            ?>
        </div>
    </div>
</section>

<!-- Testimonial section -->
<section class="testimonial bg-secondary text-white">
    <div class="container">
        <h3 class="heading text-capitalize text-center mb-4">testimonial</h3>
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
            <div class="carousel-inner">
                <?php
                $id = 1;
                foreach($testimonial as $key=>$value) { 
                ?>
                    <div class="carousel-item <?= $id == 1 ? 'active': ''; ?>">
                        <div class="testimonial-content mx-auto flow">
                            <p class="fs-1 mb-0">“</p>
                            <p class="mb-0"><?= $value['comment']; ?></p>
                            <h6 class="text-uppercase mb-0">- <?= $value['full_name']; ?></h6>
                        </div>
                    </div>
                <?php
                    $id++;
                }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>