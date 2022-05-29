<!-- About section -->
<section class="about">
    <div class="container">
        <h3 class="heading text-secondary text-capitalize mb-4">about me</h3>
        <p>I’m Arnold Davidson, an award-winning architect and a spatial planner. I now run my own architecture studio in New York, but previously I’ve worked internationally on a wide range of projects. My biggest passion is to marry the highest quality materials with function, achieving not just comfort but also the right aesthetic. </p>
        <p class="mb-0">Over the years, I have developed a reputation for questioning the status quo. Innovation is in my blood. While I do celebrate the classic function of buildings and spaces, I’m not afraid to use materials that would otherwise go unused in spaces that would otherwise go unseen. So, if you want to work together and see more of that, you know where to find me.</p>
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

<!-- Testimonial section -->
<section class="testimonial bg-secondary bg-opacity-75 text-white">
    <div class="container">
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
            <div class="carousel-inner">
                <?php
                foreach($testimonial as $key=>$value) { 
                ?>
                    <div class="carousel-item <?= $value["id"] == 1 ? 'active': ''; ?>">
                        <div class="testimonial-content mx-auto flow">
                            <p class="fs-1 mb-0">“</p>
                            <p class="mb-0"><?= $value['comment']; ?></p>
                            <h6 class="text-uppercase mb-0">- <?= $value['full_name']; ?></h6>
                        </div>
                    </div>
                <?php
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