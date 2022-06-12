<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'vendors/PHPMailer/src/Exception.php';
require_once 'vendors/PHPMailer/src/PHPMailer.php';
require_once 'vendors/PHPMailer/src/SMTP.php';

/**
 * Store contact information
 *
 * @return array
 */
function store_contact_form()
{
    $admin_email = 'manirujjamanakash@gmail.com';

    $response = [
        'errors' => [],
        'success' => false,
        'successMessage' => null
    ];

    try {
        // Validation
        if (empty($_POST['name'])) {
            $response['errors']['name'] = "Please give a valid name.";
            // throw new Exception("Please give a valid name.", 1);
        }

        if (empty($_POST['email'])) {
            $response['errors']['email'] = "Please give an email address.";
        }

        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $response['errors']['email'] = "Please give a valid email.";
        }

        if (empty($_POST['subject'])) {
            $response['errors']['subject'] = "Please give a valid subject.";
        }

        if (empty($_POST['message'])) {
            $response['errors']['message'] = "Please give a message.";
        }

        // Upload file
        $file_name = null;
        if (!empty($_FILES['attachment']['name'])) {

            // Undefined | Multiple Files | $_FILES Corruption Attack
            // If this request falls under any of them, treat it invalid.
            if (
                !isset($_FILES['attachment']['error']) ||
                is_array($_FILES['attachment']['error'])
            ) {
                throw new RuntimeException('Invalid parameters.');
            }

            // Check file size exceeded or not
            $file_size = !empty($_FILES['attachment']['size']) ? intval($_FILES['attachment']['size']) : 0;
            $upto_supported_size = 5 * 1024 * 1000; // 5MB

            if ($file_size > $upto_supported_size) {
                $response['errors']['attachment'] = "File size exceeded. Max upload limit is 5MB";
                throw new Exception($response['errors']['attachment'], 1);
            }

            // Mime type of file
            $finfo = new finfo(FILEINFO_MIME_TYPE);
            $file_ext = array_search(
                $finfo->file($_FILES['attachment']['tmp_name']),
                array(
                    'jpg' => 'image/jpg',
                    'jpg' => 'image/jpeg',
                    'png' => 'image/png',
                    'gif' => 'image/gif',
                    'gif' => 'image/bnf',
                    'pdf' => 'application/pdf'
                ),
                true
            );

            if (false === $file_ext) {
                $response['errors']['attachment'] = "File should be a valid image or PDF file";
                throw new Exception($response['errors']['attachment'], 1);
            }

            // Sanitize file name and make a new name
            $file_name = 'devsenv-' . time() . '.' . $file_ext;

            // Upload file
            if (!move_uploaded_file($_FILES['attachment']['tmp_name'], "uploads/" . $file_name)) {
                $response['errors']['attachment'] = "File uploads fail, please try again.";
                throw new Exception($response['errors']['attachment']);
            }
        }
    } catch (\Exception $e) {
        $response['errors']['global'] = $e->getMessage();
    }


    if (count($response['errors']) > 0) {
        $err_global = "Failed to submit form. Please try again.";

        if (isset($response['errors']['global'])) {
            $err_global .= ' Error: ' . $response['errors']['global'];
        }

        $response['errors']['global'] = $err_global;
    } else {
        if (isset($_POST['contact_form'])) {
            // Sanitization
            $data = [
                'name'          => htmlspecialchars($_POST['name']),
                'email'         => filter_var($_POST['email'], FILTER_VALIDATE_EMAIL),
                'subject'       => htmlspecialchars($_POST['subject']),
                'message'       => htmlspecialchars($_POST['message']),
                'attachment'    => $file_name
            ];

            // Insert into Database
            // DB::insert('contact_us', $data);

            // Send Mail to that email address
            $response['success'] = true;
            $response['successMessage'] = 'Your contact form has been submitted.';

            // Send mail using php
            // mail($data['email'], $data['subject'], $data['message']);

            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Server settings
                // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'manirujjamanakash@gmail.com';                     //SMTP username
                $mail->Password   = 'dszpsbfxxptulvnm';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
                $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('manirujjamanakash@gmail.com', 'Maniruzzaman Akash');

                // Send an email to user [Not necessary for Contact us]
                // $mail->addAddress($data['email'], $data['name']);     //Add a recipient

                // Send an email to admin.
                $mail->addAddress($admin_email);

                // Reply Address
                $mail->addReplyTo($data['email'], $data['name']);

                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');

                //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                // Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = $data['subject'];
                $mail->Body    = "You have got an email from " . $data['name'] . "<br> <h3>Message:</h3>" . $data['message'] . "<h3>Email From:</h3>" . $data['name'] . " (". $data['email'] . ")";


                $mail->send();
                $response['successMessage'] .= " An email also sent to user.";
            } catch (\Exception $e) {
                $response['successMessage'] .= " Email could not be sent, please try again later.";
                // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    }

    return $response;
}
