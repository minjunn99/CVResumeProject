<?php
    include("../includes/header.php");
    // include __DIR__ '/cvresume/includes/header.php';
?>

<main>
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
                <div class="education-item flow">
                    <h4 class="education-major mb-0">BA in Architecture & Design</h4>
                    <p class="education-info mb-0">2006-2010</p>
                    <p class="education-name fst-italic mb-0">University of Woodbury</p>
                </div>
                <div class="education-item flow">
                    <h4 class="education-major mb-0">MA in Architecture</h4>
                    <p class="education-info mb-0">2010-2012</p>
                    <p class="education-name fst-italic mb-0">University of Chicago</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Employment section -->
    <section class="employment">
        <div class="container">
            <h3 class="heading text-capitalize mb-4">employment</h3>
            <div class="employment-list">
                <div class="employment-item row">
                    <div class="employment-content col-md-6 flow">
                        <h4 class="employment-pos mb-0">Head of Architecture</h4>
                        <p class="employment-info text-secondary mb-0">2018-2020</p>
                        <p class="employment-address text-secondary fst-italic">Arnold Davidson Architecture, New York, USA</p>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-0">
                            Over the last few years, I’ve built my own architecture studio up. From just one person to a team of 12 now, Arnold Davidson Architecture stands for balance, integrity, and quality. We never compromise on two things: durability and comfort. Working with high-quality materials helps us achieve both. Spaces are meant for people, and not vice-versa – that’s our guiding principle whatever project we work on.
                        </p>
                    </div>
                </div>
                <div class="employment-item row">
                    <div class="employment-content col-md-6 flow">
                        <h4 class="employment-pos mb-0">Design architect</h4>
                        <p class="employment-info text-secondary mb-0">2012-2014</p>
                        <p class="employment-address text-secondary fst-italic">UNTStudio, Shanghai, China</p>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-0">
                            In my role at the highly progressive UNTStudio in Shanghai, I had the best chance to learn about the architectural principles that my colleagues in China used. This has influenced my work greatly. I now strive to strike the right balance between form and function even harder. Projects I worked on included the Shanghai Great Theater and the D.O. Architects new office building in the city center. 
                        </p>
                    </div>
                </div>
                <div class="employment-item row">
                    <div class="employment-content col-md-6 flow">
                        <h4 class="employment-pos mb-0">Senior Industrial Architect</h4>
                        <p class="employment-info text-secondary mb-0">2014-2018</p>
                        <p class="employment-address text-secondary fst-italic">LCArchitects, New York, USA</p>
                    </div>
                    <div class="col-md-6">
                        <p class="mb-0">
                            LCArchitects is one of the most innovative officers in New York and I was ecstatic to be part of it. It has shaped my spatial planning career as I got to work with not only industrial spaces, but also public ones. Figuring out the flows of people, while challenging at first, is now one of my absolute strongpoints. At LCArchitects, I worked on the TXK’s new neighborhood planning and Ohio Wood Company’s headquarters.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial section -->
    <section class="testimonial bg-secondary bg-opacity-75 text-white">
        <div class="container">
            <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                       <div class="testimonial-content mx-auto flow">
                            <p class="fs-1 mb-0">“</p>
                            <p class="mb-0">Arnold is relentless in his approach. Once he has a plan, he will work at it until exact precision is achieved. Form his blueprints, to the renders and then the actual results – the consistency he and his team is able to achieve is just remarkable.</p>
                            <h6 class="text-uppercase mb-0">- Adjaye Associates</h6>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial-content mx-auto flow">
                            <p class="fs-1 mb-0">“</p>
                            <p class="mb-0">It has been a delight working with Arnold and his studio team on our latest residential complex build. From start to finish, he was professional and made sure that the final result is of the highest quality. Our unreserved recommendation goes out to Arnold.</p>
                            <h6 class="text-uppercase mb-0">- eca</h6>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial-content mx-auto flow">
                            <p class="fs-1 mb-0">“</p>
                            <p class="mb-0">It has been a delight working with Arnold and his studio team on our latest residential complex build. From start to finish, he was professional and made sure that the final result is of the highest quality. Our unreserved recommendation goes out to Arnold.</p>
                            <h6 class="text-uppercase mb-0">- eca 2</h6>
                        </div>
                    </div>
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
</main>

<?php include("../includes/footer.php"); ?>