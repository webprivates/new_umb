<div class="content-wrapper">
    <section class="content">
    <?php echo alert('alert-info', 'Selamat Datang', 'Selamat Datang Di Halaman Utama SISTEM INFORMASI UJIAN MASUK MAHASISWA BARU STMIK HANDAYANI MAKASSAR')?>
    <?php 
        $msg = $this->session->userdata('success');
        if (isset($msg)) {
            echo alert('alert-success', 'Terimakasih', $msg);
        }
    ?>

    </section>
</div>


		