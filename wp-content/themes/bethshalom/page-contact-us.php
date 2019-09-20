<?php

//response generation function
$response = "";

//function to generate response
function my_contact_form_generate_response($type, $message)
{

    global $response;

    if ($type == "success") $response = $message;
    else $response = $message;
}

//response messages
$not_human       = "Human verification incorrect.";
$missing_content = "Please supply all information.";
$email_invalid   = "Email Address Invalid.";
$message_unsent  = "Message was not sent. Try Again.";
$message_sent    = "Thanks! Your message has been sent.";
$verification_failed = "Robot verification failed, please try again.";

//user posted variables
$name = $_POST['message_name'];
$email = $_POST['message_email'];
$website = $_POST['message_website'];
$phone = $_POST['message_phone'];
$subject = $_POST['message_subject'];
$message = $_POST['message_text'];
$recaptcha = $_POST['g-recaptcha-response'];

//php mailer variables
$to = 'romoran1@outlook.com';
$subject = "Contact form: " . $subject;
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n";
$message_text = "Name: " . $name . "\n Website: " . $website . "\n Phone: " . $phone . "\n\nMessage: " . strip_tags($message);

if ($_POST['contact-form-submit']) {
    //validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", $email_invalid);
    else //email is valid
    {
        //validate presence of name and message
        if (empty($name) || empty($message)) {
            my_contact_form_generate_response("error", $missing_content);
        } else //ready to go!
        {
            if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
                $secret = getenv("RECAPTCHA_SECRET");
                $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
                $responseData = json_decode($verifyResponse);
                if ($responseData->success) {
                    $sent = wp_mail($to, $subject, $message_text, $headers);
                    if ($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
                    else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
                } else {
                    my_contact_form_generate_response("error", $verification_failed); //message wasn't sent
                }
            } else {
                my_contact_form_generate_response("error", $verification_failed); //message wasn't sent
            }
        }
    }
}

?>
<?php get_header(); ?>
<?php
/* Start the Loop */
while (have_posts()) :
    the_post();
    the_content();
    ?>
    <section id="respond" class="section contact-section">
        <div class="contact-heading">Please fill out this form to reach us with any questions you may have. We will get back to you as quick as we can. Simply fill out the required fields below.</div>
        <form class="contact-form" action="<?php the_permalink(); ?>" method="post">
            <div class="contact-form-input">
                <label><span>*</span>Name: </label>
                <input type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>" />
            </div>

            <div class="contact-form-input">
                <label><span>*</span>Email: </label>
                <input type="text" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>" />
            </div>

            <div class="contact-form-input">
                <label>Website: </label>
                <input type="text" name="message_website" value="<?php echo esc_attr($_POST['message_website']); ?>" />
            </div>

            <div class="contact-form-input">
                <label><span>*</span>Phone: </label>
                <input type="text" name="message_phone" value="<?php echo esc_attr($_POST['message_phone']); ?>" />
            </div>

            <div class="contact-form-input">
                <label><span>*</span>Subject: </label>
                <input type="text" name="message_subject" value="<?php echo esc_attr($_POST['message_subject']); ?>" />
            </div>

            <div class="contact-form-input">
                <label><span>*</span>Message: </label>
                <textarea type="text" rows="20" name="message_text"><?php echo esc_textarea($_POST['message_text']); ?></textarea>
            </div>

            <div class="contact-form-input" style="align-self: flex-end;">
                <div class="g-recaptcha" data-sitekey="6LfJMrkUAAAAAIeTPWMVOCCPKdoCTOKtMm6Mol4r"></div>
            </div>

            <div class="contact-form-input">
                <input type="submit" id="contact-form-submit" name="contact-form-submit" />
            </div>

            <div class="contact-form-input" style="align-self: flex-end;">
                <?php echo $response; ?>
            </div>

        </form>
    </section>
<?php



endwhile; // End of the loop.
?>

<?php get_footer(); ?>