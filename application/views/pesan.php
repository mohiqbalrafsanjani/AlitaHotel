<?php 
    $this->load->view('header');
?>
    <br>
    <br>
    <br><h2 align="center">Pesan Kamar</h2><br>
    <div class="container"> <!--container-->
    <form id="pesan" class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/WelcomeAlita/pesan_kamar">
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                


                <img src="<?php echo base_url(); ?>assets/images/vimage/<?php echo $datakamar[0]['foto']; ?>" class="card-img" alt="<?php echo $datakamar[0]['foto']; ?>">
                </div>
                <div class="col-md-4">
                <div class="card-body">

                    <h5 class="card-title"><?php echo $datakamar[0]['nama_kamar']; ?></h5>

                    <p class="card-text"><?php echo $datakamar[0]['deskripsi']; ?></p>
                    
                    <p class="card-text"><small class="text-muted">Rp. <?php echo $datakamar[0]['tarif_kamar']; ?></small></p> 

                </div>





                </div>
            </div>
        </div>
        
        <div class="row"> <!--row-->
            <div class="col-2">
                <b>Tanggal Cek-In</b>
            </div> <!--col-2-->
            <div class="col-10">
                <input type="date" name="tgl_cek_in" required>
            </div> <!--col-10-->
        
            <div class="col-2">
                <b>Tanggal Cek-Out</b>
            </div> <!--col-2-->
            <div class="col-10">
                <input type="date" name="tgl_cek_out" required>
            </div> <!--col-10-->
        </div> <!--row-->
        <br>
        <div class="row"> <!--row-->
            <div class="col-2">
                <b>Fasilitas Tambahan</b>
            </div> <!--col-2-->
            <!--<div class="col-10"> -->
                <?php $no=1; 
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
                <!-- <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline2" name="jadwal" class="custom-control-input" value="sore">
                    <label class="custom-control-label" for="customRadioInline2">Sore</label>
                </div> -->
           <!-- </div> --><!--col-10-->
        </div> <!--row-->
        <br>
        <div class="row"> <!--row-->
            <div class="col-2"> <!--col-2-->
            </div> <!--col-2-->
            <div class="col-10"> <!--col-10-->
                <button class="btn btn-primary" type="submit">Submit</button>
            </div> <!--col-10-->
        </div> <!--row-->
        </form>
    </div> <!--container-->
    <br><br><br>
<?php 
    $this->load->view('footer');
?>