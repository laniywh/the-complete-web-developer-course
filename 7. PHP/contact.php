<?php

    if ($_POST["submit"]) {

        $result = '<div class="alert alert-success">Form submitted</div>';

        if (!$_POST["name"]) {
            $error = "<br />Please enter your name";
        }

        if (!$_POST["comment"]) {
            $error = $error."<br />Please enter a comment";
        }

        if (!$_POST["email"]) {
            $error = $error."<br />Please enter your Email address";
        }
        else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error = $error."<br />Please enter a valid Email address";
        }

        if ($error) {
            $result = '<div class="alert alert-danger">There were error(s) in your form:'.$error'</div>';
        } else {
            // send email to notice me
            $emailTo="gill454@gmail.com";
            $subject=$_POST['name']." sent you a message on Skylani.tk";
            $body=$_POST["comment"];
            $headers="From: ".$_POST['email'];

            if(mail($emailTo, $subject, $body, $headers)) {
                $result = '<div class="alert alert-success">Thank you!</div>';
            } else {
                $result = '<div class="alert alert-danger">Sorry, there ware an error sending you message. Please try again later.</div>';
            }


        }
    }

?>

<!doctype html>
<html>
    <head>
        <title>My first page</title>
        <meta charset="utf-8" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <style type="text/css">
        </style>

    </head>
    <body>


    <div class="container">

        <h1>Email Form</h1>

        <?php echo $result; ?>


        <form method="post">
            <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" name="name" type="text" value="<?php $_POST['name']; ?>" />
            <br />


            <label for="email">Email</label>
            <input class="form-control" name="email" type="text"  value="<?php $_POST['email']; ?>"/>
            <br />

            <label for="comment">Comment</label>
            <textarea class="form-control" id="commentBox" name="comment" type="text" value="<?php $_POST['comment']; ?>"></textarea>
            <br />
            <input class="btn btn-success" type="submit" name="submit" value="Submit Your Message" />
            </div>
        </form>


    </div>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    </body>
</html>
