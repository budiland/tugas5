<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <style>
        /* Memberi style pada kotak */
        .kotak {
            width: 400px;
            border: 1px solid purple;
            margin: 15% auto;
            background-color: gray;
        }

        /* Mengatur font judul */
        .judul {
            color: wheat;
            text-align: center;
            font-size: 28px;
            padding: 4px;
        }

        /* Mengatur margin dan padding table*/
        .khusus {
            margin: auto;
            padding: 4px;
        }

        /*mengatur style button*/
        .submit,
        .reset {
            padding: 8px 10px;
            background: wheat;
            color: #4d3f52;
            border: 1px solid purple;
            border-radius: 2px
        }
    </style>
</head>

<body>
    <div class="kotak">
        <h1 class="judul">LOGIN</h1>
        <!--menggunakan mthod post untuk mengirimkan inputan kelogin_check.php untuk dicek-->
        <form method="POST" action="login_check.php">
            <table class="khusus">
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username"></input></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email"></input></td>
                </tr>
                <tr>
                    <!-- Tombol untuk mengirim -->
                    <td colspan="3">
                        <input type="submit" class="submit" name="btnlogin" value="LOGIN">
                    </td>
                    <!-- tombol untuk reset -->
                    <td colspan="3">
                        <input type="reset" class="reset" name="reset" value="RESET">
                    </td>

                </tr>
    </div>
</body>

</html>