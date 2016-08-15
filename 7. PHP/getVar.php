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
            $arr=["Ada", "Lani", "Jay"];

            if ($_GET["submit"]) {

                if ($_GET["name"]) {

                    // check if name in array
                    foreach ($names as $name) {
                        if ($_POST["name"] == $name) {
                            echo "I know you! Your name is ".$name;
                            $knowYou = 1;
                        }

                    }

                    if (!$knowYou) {
                        echo "I don't know you, ".$_POST['name'];
                    }


                } else {
                    echo "Please enter your name";
                }
            }

        ?>


        <form method="post">
            <label for="name">Name</label>
            <input name="name" type="text" />
            <input type="submit" name="submit" value="Submit Your Name" />
        </form>



        </div>
    </body>
</html>
