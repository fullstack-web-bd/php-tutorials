<!-- Start Content Section -->
<section id="contact-me" class="content container-padding">
    <h2 class="section-title">Contact Me</h2>
    <div class="contact-box">
        <form action="" method="post">
            <?php
            if (isset($_POST['contact_form'])) {
                $response = store_contact_form();

                if (!empty($response['errors']['global'])) {
                    echo "<p style='color:red; border: 1px solid #ccc; padding: 10px;'>" . $response['errors']['global'] . "</p>";
                }

                if ($response['success']) {
                    echo "<p style='color:green'>" . $response['successMessage'] . "</p>";
                }
            }
            ?>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="input" id="name" name="name" placeholder="Please enter your name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="input" id="email" name="email" placeholder="Please enter your email">
            </div>
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="input" id="subject" name="subject" placeholder="Please enter your message subject">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="input" id="message" name="message" placeholder="Please enter your message" rows="4"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-outline" name="contact_form">
                    <i class="fas fa-paper-plane"></i>
                    Send Message
                </button>
            </div>
        </form>
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.3739542709354!2d90.4081659150484!3d23.769694393955646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c778de98c2f3%3A0x1ab5c9579bb766a1!2sAkij%20Group!5e0!3m2!1sen!2sbd!4v1646941619623!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>
<!-- End Content Section -->