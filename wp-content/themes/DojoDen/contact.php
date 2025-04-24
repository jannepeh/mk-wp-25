<?php
/* Template Name: Contact Page */
get_header();
?>
    <main class="contact-page">
        <section>
            <h1>Contact Us</h1>
            <p>Feel free to reach out to us using the form below.</p>
            <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                <button type="submit">Send</button>
            </form>
        </section>
    </main>
<?php
get_footer();