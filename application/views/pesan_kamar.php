<?php 
    $this->load->view('header');
?>
    <br><br><br><h2 align="center">Deskripsi Pesanan Kamar</h2><br>
    <div class="container"> <!--container-->

        <div class="card" style="width: 20rem;">

            <div class="card-body">
                <h5 class="card-title"><?php echo $this->session->userdata("nama_kamar"); ?></h5>
                <?php $tn=$this->session->userdata("tgl_cek_in"); 
                 echo date('l', strtotime($tn)).", ".$tn."- ".$this->session->userdata("tgl_cek_out"); ?> 
            </div>
            <div class="card-body">
            <?php
            $in = $this->session->userdata("tgl_cek_out");
            $out = $this->session->userdata("tgl_cek_in"); 
            $a = date_create($in);
            $b = date_create($out);

            $lamainap = date_diff($a,$b);
            $lamainap = $lamainap->days;
            if ($lamainap==0) {
                $lamainap=1;
            }
            echo "Lama Inap : ";
            echo $lamainap;
            echo " hari";

            $tarif_fasilitas = $fasilitas[0]['tarif_fasilitas'];
            $tarif_kamar = $datakamar[0]['tarif_kamar'];
            $total_biaya = ($tarif_kamar * $lamainap) + $tarif_fasilitas;

            ?>
            </div>
            <div class="card-body">
                <p class="card-text">Tarif Kamar : Rp.<?php echo $tarif_kamar;?></p>
                <p class="card-text">Tarif Fasilitas : Rp.<?php echo $tarif_fasilitas;?></p>
                <p class="card-text">Total Bayar : Rp.<?php echo $total_biaya;?></p>
                <div class="row"> <!--row-->
                    <div class="col-6"> <!--col-6-->
                     <form method="post" action="<?php echo base_url()."index.php/WelcomeAlita/edit"; ?>">
                        
                        <button class="btn btn-success" type="submit" name="submit">Edit</button>
                     </form>
                    </div> <!--col-6-->
                    <div class="col-6"> <!--col-6-->
                     <form method="post" action="<?php echo base_url();"index.php" ?>">
                        <button class="btn btn-danger" type="submit" name="submit">Hapus</button>
                     </form>
                    </div> <!--col-6-->
                </div>
                <br>
                <form method="post" action="<?php echo base_url(); ?>index.php/WelcomeAlita/bayar">
                    
                    <button class="btn btn-primary" type="submit">Bayar</button>
                </form>
            </div>
        </div>
    </div> <!--container-->
    <br>
<?php 
    $this->load->view('footer');
?>