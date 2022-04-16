<html>
    <body>
        <?php
            if (isset ($_POST["submit"])){
                $name= $_POST["name"];
                $email= $_POST["email"];
                $website= $_POST["website"];
                $comment= $_POST["comment"];
                $gender= $_POST["gender"];
            } else {
                die ("Halaman tidak dapat diakses");
            }

            if (!empty ($name)){
                if (!preg_match("/[a-zA-Z \ - \ . \ '] / ", $name)){
                    echo "Your input name is incorrect! only letters allow <br>";
                } else {
                    echo "Thanks, ". $_POST["name"]."<br>";
                }    
            } else {
                echo "Name Required";
            }

            if (!empty ($email)){
                if (!filter_var ($email, FILTER_VALIDATE_EMAIL)){
                    echo "invalid email format! <br>";
                }else {
                    echo "Your email is, ". $_POST["email"]."<br>";
                }
            } else {
                echo "Email Required"."<br>";
            }

            if (!empty ($website)){
                echo "Your website is, ". $_POST["website"]."<br>";
            } else {
                echo "None"."<br>";
            }

            if (!empty ($comment)){
                echo "comment: ". $_POST["comment"]."<br>";
            } else {
                echo "None"."<br>";
            }

            if (!empty ($gender)){
                echo "Your Gender is ". $_POST["gender"];
            } else {
                echo "Gender is required";
            }
        ?>
    </body>
</html>