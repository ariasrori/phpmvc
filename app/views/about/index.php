    <h1>About Me</h1>
    <h1>Selamat datang <?= $data['nama'] ?></h1>
    <?php
        foreach($data as $isi){
            echo $isi."<br>";
        }
    ?>