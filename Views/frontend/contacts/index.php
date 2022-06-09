<section class="contact">
    <div class="container">
        <h3 class="heading text-capitalize">contact me</h3>
        <form class="contact-form mx-auto" action="./index.php?controller=contact&id=<?= $id_member ?>&action=send" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name (*):</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Your name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail (*):</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="Your email address">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message:</label>
                <textarea id="message" class="form-control" name="message" placeholder="Your message"></textarea>
            </div>
            <button type="submit" name="send" class="btn btn-outline-secondary fw-bold">Submit</button>
        </form>
    </div>
</section>