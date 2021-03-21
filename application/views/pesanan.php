<?php 
    $this->load->view('header');
?>
    <br><br><br><h2 align="center">Pesanan Tiket</h2><br>
    <div class="container"> <!--container-->

        <div class="card" style="width: 20rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $this->session->userdata("judul"); ?></h5>
                <?php $tn=$this->session->userdata("tanggal_nonton"); 
                 echo date('l', strtotime($tn)).", ".$tn."/ ".$this->session->userdata("tanggal_nonton"); ?> 
            </div>
            <ul class="list-group list-group-flush">
                <?php $i=0;foreach($data['kursi'] as $kursi){?> 
                <li class="list-group-item">
                 <form method="post" action="<?php echo base_url()."index.php/WelcomeTIKU/hapusKursi/$i"; ?>">
                    <div class="row"> <!--row-->
                        <div class="col-6"> <!--col-6-->
                            <?php echo $kursi;?>
                            </div> <!--col-6-->
                        <div class="col-6"> <!--col-6-->
                            <button class="btn btn-danger" type="submit" name="submit">Hapus </button>
                        </div> <!--col-6-->
                    </div>
                 </form>
                </li>
                <?php $i++;}?>
                <!-- hapus A2 dan A3 -->
            </ul>
            <div class="card-body">
                <p class="card-text">Total : <?php echo number_format(count($data['kursi'])*60000,2,',','.');?></p>
                <div class="row"> <!--row-->
                    <div class="col-6"> <!--col-6-->
                     <form method="post" action="<?php echo base_url()."index.php/WelcomeTIKU/edit"; ?>">
                        <?php $listkursi = implode(" ", $data['kursi']);  ?>
                        <button class="btn btn-success" type="submit" name="submit">Edit Kursi </button>
                     </form>
                    </div> <!--col-6-->
                    <div class="col-6"> <!--col-6-->
                     <form method="post" action="<?php echo base_url(); ?>">
                        <button class="btn btn-danger" type="submit" name="submit">Hapus Semua</button>
                     </form>
                    </div> <!--col-6-->
                </div>
                <br>
                <form method="post" action="<?php echo base_url(); ?>index.php/WelcomeTIKU/bayar">
                    <?php $listkursi = implode(" ", $data['kursi']);  ?>
                    <button class="btn btn-primary" type="submit">Bayar</button>
                </form>
            </div>
        </div>
    </div> <!--container-->
    <br>
<?php 
    $this->load->view('footer');
?>