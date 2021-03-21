<?php 
    $this->load->view('header');
?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="<?php echo base_url(); ?>assets/images/splash/Untitled-1.jpg" class="d-block w-100" alt="Untitled-1">
            </div>
            <div class="carousel-item">
            <img src="<?php echo base_url(); ?>assets/images/splash/Untitled-2.jpg" class="d-block w-100" alt="Untitled-2">
            </div>
            <div class="carousel-item">
            <img src="<?php echo base_url(); ?>assets/images/splash/Untitled-3.jpg" class="d-block w-100" alt="Untitled-3">
            </div>
            <div class="carousel-item">
            <img src="<?php echo base_url(); ?>assets/images/splash/Untitled-4.jpg" class="d-block w-100" alt="Untitled-4">
            </div>
            <div class="carousel-item">
            <img src="<?php echo base_url(); ?>assets/images/splash/Untitled-5.jpg" class="d-block w-100" alt="Untitled-5">
            </div>
            <div class="carousel-item">
            <img src="<?php echo base_url(); ?>assets/images/splash/Untitled-6.jpg" class="d-block w-100" alt="Untitled-6">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    <br><h2 align="center">Tersedia Kamar</h2><br>
    <div class="container"> <!--container-->
    <form method="post" action="<?php echo base_url();?>index.php/WelcomeAlita/pesan">
        <div class="card-deck"> <!--card-deck-->
            <?php foreach ($data as $kamar){ ?>
            <div class="card">
                <img src="<?php echo base_url(); ?>assets/images/vimage/<?php echo $kamar['foto']; ?>" class="card-img-top" alt="aladin">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $kamar['nama_kamar']; ?></h5>
                    <p class="card-text"><?php echo $kamar['deskripsi']; ?></p>
                    
                    <!--
                        DATA dikirim dengan button
                        name = untuk variabel
                        value = isi datanya
                     -->
                     
                    <button class="btn btn-primary" name="id_kamar" value="<?php echo $kamar['id_kamar'];?>" type="submit">Pesan</button>
                


                </div>
                <div class="card-footer">
                    <small class="text-muted"><b>Rp.<?php echo $kamar['tarif_kamar']; ?> / malam</b></small>
                </div>
            </div>
            <?php } ?>
            <!-- <div class="card">
                <img src="<?php //echo base_url(); ?>assets/images/aladdin.jpg" class="card-img-top" alt="aladdin">
                <div class="card-body">
                    <h5 class="card-title">Aladdin</h5>
                    <p class="card-text">Aladdin, seorang anak jalanan yang jatuh cinta pada seorang putri. Dengan perbedaan kasta dan harta, Aladdin pun berusaha mencari jalan agar bisa mejadi seorang pangeran, tak disangka ia menemukan lampu dengan jin di dalamnya. Aladdin pun menggunakan lampu untuk mengubah dirinya menjadi seorang pangeran untuk memenangkan hatiPutri Jasmine, tapi Wazir jahat juga mengejar lampu tersebut untuk menguasai kerajaan.</p>
                    <button class="btn btn-primary" name="id_film" value="#" type="submit">Pesan</button>
                </div>
                <div class="card-footer">
                    <small class="text-muted">2 jam 10 menit</small>
                </div>
            </div>
            <div class="card">
                <img src="<?php //echo base_url(); ?>assets/images/john_wick_3.jpg" class="card-img-top" alt="john wick 3">
                <div class="card-body">
                    <h5 class="card-title">John Wick: Chapter 3 - Parabellum</h5>
                    <p class="card-text">Seri ketiga "John Wick" ini akan mengisahkan kelanjutan nasib si pembunuh bayaran usai menghabisi nyawa anggota High Table dalam The Continental. Ia sendiri diburu dan hidupnya dihargai sebesar USD 14 juta (sekitar Rp 201 miliar). Diburu oleh berbagai pembunuh bayaran hebat, John akan dibantu oleh karakter baru yang misterius bernama Sofia (Halle Berry)</p>
                    <button class="btn btn-primary" name="id_film" value="#" type="submit">Pesan</button>
                </div>
                <div class="card-footer">
                <small class="text-muted">2 jam 10 menit</small>
                </div>
            </div> -->
        </div> <!--card-deck-->
    </div> <!--container-->
    <br>

<?php 
    $this->load->view('footer');
?>