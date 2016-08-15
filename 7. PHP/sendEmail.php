<!doctype html>
<html>
    <head>
        <title>My first page</title>
        <meta charset="utf-8" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

    </head>
    <body>
        <div>
            <?php

                $emailTo="gill454@gmail.com";
                $subject="I hope this works!";
                $body="I think you're great";
                $headers="From: myself";

                mail($emailTo, $subject, $body, $headers);

            ?>


        </div>
    </body>
</html>
