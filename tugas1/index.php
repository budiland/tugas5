<!DOCTYPE html>

<html>

<head>
    <title>Home</title>
    <!-- Fungsi Redirect setelah 10 detik -->
    <script src="./jquery.js"></script>
    <script type="text/javascript">
        setTimeout(function() {
            window.location.href = 'https://budiland.github.io/tugas2/index.html';
        }, 10000);
    </script>
</head>
<style>
    /* Tampilan log login */
    div {
        margin-top: 10%;
        margin-right: 60%;
        margin-left: 1cm;
        width: 250px;
        border: 1px solid purple;
    }
</style>

<body>

    <nav>
        <ul>
            <!--link menuju halaman biodata-->
            <li><a href="https://budiland.github.io/tugas2/">Go TO MY PAGE</a></li>
            <li><a href="https://upn-jatim.academia.edu/NurrachmanBudiMulya">Go TO ACADEMIA</a></li>
        </ul>
    </nav>
    <div>
        <?php
        include "account.php"; //Memasukkan account.php untuk menggunakan datanya
        echo "<center>Log Activity</center>", "<br>";
        //menampilkan variabel yang berasal dari account.php
        echo "Nama :" . $username . "<br>";
        echo "Email :" . $email . "<br>";
        //menampilkan waktu login, dengan mengganti timezone terlebih dahulu
        date_default_timezone_set('Asia/Jakarta');
        echo date("d-D-F-Y, h:i:s");
        ?>
        <p>Redirect to my page after 10 seconds</p>
    </div>
</body>

</html>