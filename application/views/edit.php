<?php 
    $this->load->view('header');
?>
    <br>
    <br>
    <br><h2 align="center">Edit Pemesanan</h2><br>
    <div class="container"> <!--container-->
    <form id="pesan" class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/WelcomeAlita/proses_edit">
        <div class="row"> <!--row-->
              
              <div class="row"> <!--row-->
            <div class="col-2">
                <b>Tanggal Cek-In</b>
            </div> <!--col-2-->
            <div class="col-10">
                <input type="date" name="tgl_cek_in" value="<?php echo $this->session->userdata("tgl_cek_in"); ?>" required>
            </div> <!--col-10-->
        
            <div class="col-2">
                <b>Tanggal Cek-Out</b>
            </div> <!--col-2-->
            <div class="col-10">
                <input type="date" name="tgl_cek_out" value="<?php echo $this->session->userdata("tgl_cek_out"); ?>" required>
            </div> <!--col-10-->
        </div> <!--row-->
        <br>

            <div class="row"> <!--row-->
            <div class="col-2">
                <b>Type Kamar</b>
            </div> <!--col-2-->
            <!--<div class="col-10"> -->
                <?php $no1=1; 
                foreach ($datakamar as $kmr){ ?>
                <div class="row">
                <div class="card">
                <div class="col-auto col-sm-auto">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline<?php echo $no1; ?>" name="id_kamar" class="custom-control-input" value="<?php echo $kmr['id_kamar']; ?>" required>
                    <label class="custom-control-label" for="customRadioInline<?php echo $no1; ?>">
                        <?php echo $kmr['nama_kamar'];
                            echo '</br>';
                            echo '</br>';
                            echo $kmr['deskripsi'];
                            echo '</br>';
                            echo 'Rp. ';
                            echo $kmr['tarif_kamar']; ?></label>
                </div>
                </div>
                </div>
                </div>
                <?php $no1++;} ?>


            
            <div class="col-2">
                <b>Fasilitas Tambahan</b>
            </div> <!--col-2-->
            <!--<div class="col-10"> -->
                <?php $no=11; 
                foreach ($fasilitas as $fsl){ ?>
                <div class="row">
                <div class="card">
                <div class="col-auto col-sm-auto">
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline<?php echo $no; ?>" name="id_fasilitas" class="custom-control-input" value="<?php echo $fsl['id_fasilitas']; ?>" required>
                    <label class="custom-control-label" for="customRadioInline<?php echo $no; ?>">
                        <?php echo $fsl['nama_fasilitas'];
                            echo '</br>';
                            echo '</br>';
                            echo $fsl['deskripsi'];
                            echo '</br>';
                            echo 'Rp. ';
                            echo $fsl['tarif_fasilitas']; ?></label>
                </div>
                </div>
                </div>
                </div>
                <?php $no++;} ?>
                </div>
<div class="col-10"> <!--col-10-->
                <button class="btn btn-primary" type="submit">Submit</button>
            </div> <!--col-10-->
        </div>
        </div> <!--row-->
        </form>
    </div> <!--container-->
    <br>
<?php 
    $this->load->view('footer');
?>