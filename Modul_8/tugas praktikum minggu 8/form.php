<html>
    <head>
        <style>
            .form {
                text-align: center;
                border: 1px solid black;
                width: 25%;
                margin: auto;
                border-radius: 10px;
                background-color: #9999ff;
            }
            .header {
                text-align: center;
                margin-top: 5%
            }
            .form input {
                border-radius: 5px;
                background-color: #e6e6ff;
            }
            .form textarea {
                border-radius: 10px;
                background-color: #e6e6ff;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <h2>Latihan Form PHP</h2>
        </div>
        <container>
            <div class="form">
                <form method="post" action="validation.php">
                    <p>Name <br><input type="text" name="name"></p>
                    <p>Email <br><input type="text" name="email"></p>
                    <p>Website <br><input type="text" name="website"></p>
                    <p>Comment <br><textarea name="comment" rows="5" cols="40"></textarea></p>
                    <p>Gender
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="other">Other</p>
                    <br><br>
                    <input type="submit" name="submit" value="submit">
            </div>
        </container>
    </body>
</html>