<!-- Controllers -->
<?php require_once "controllers/portfolio-functions.php"; ?>
<?php require_once "controllers/contact-functions.php"; ?>


<?php require_once "views/header.php"; ?>

<!-- Start Header Banner Section -->
<header>
    <div class="header-banner container-padding">
        <div class="header-info">
            <div class="header-texts">
                <h2>Welcome to My Portfolio Website</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis maiores autem rem, sunt
                    veniam voluptate et culpa! Debitis error nobis cum ea. Quisquam harum quo perspiciatis
                    obcaecati
                    esse laborum tempora.
                </p>

                <div class="header-social">
                    <a href="https://facebook.com/maniruzzaman.akash" class="btn facebook">
                        Facebook
                    </a>
                    <a href="#" class="btn twitter">
                        Twitter
                    </a>
                    <a href="#" class="btn youtube">
                        Youtube
                    </a>
                </div>
            </div>
        </div>
        <div class="header-profile">
            <img src="images/profile.png" alt="Akash">
        </div>

        <!--  -->
    </div>
</header>
<!-- End Header Banner Section -->

<?php require_once "views/partials/portfolio.php"; ?>

<?php require_once "views/partials/contact.php"; ?>

<?php require_once "views/footer.php"; ?>