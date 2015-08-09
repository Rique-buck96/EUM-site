<?php /* Set e-mail recipient */ $myemail="ebuck@edms-consultants.com" ; /* Check all form inputs using check_input function */ $yourname=c heck_input($_POST[ 'company_name']); $email=c heck_input($_POST[ 'email']); $phone=c heck_input($_POST[ 'phone']); $address=c heck_input($_POST[ 'address']); $fax=c heck_input($_POST[ 'fax']); $contact=c heck_input($_POST[ 'contact']); $comments=c heck_input($_POST[ 'comments']); /* Let 's prepare the message for the e-mail */ $mobile=c heck_input($_POST['mobile']); $subject=c heck_input($_POST['subject']);
$message = "Hello!

Your contact form has been submitted by:

Company Name: $yourname
E-mail: $email
Phone: $phone
Mobile: $mobile
Fax: $fax
Contact Person: $contact
Subject: $subject
Comments:
$comments

End of message
";

/* Send the message using mail() function */
mail($myemail, $message);

/* Functions we used */
function check_input($data, $problem=' ')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
?>
    <html>
    <body>

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>