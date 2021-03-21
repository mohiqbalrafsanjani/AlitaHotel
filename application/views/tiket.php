<?php 
    $this->load->view('header');
?>
    <br><br><br><h2 align="center">Tiket</h2><br>
    <div class="container" id="printableArea"> <!--container-->
    <br>
    <div class="card-deck">
        <?php foreach($data['kursi'] as $kursi){ ?>
        <div class="card"  >
            <div class="card-body">
                <h6 class="card-title">Tiket Bioskop Kampus UDINUS (TIKU)</h6><hr>
                <p class="card-text"><b><?php echo $this->session->userdata("judul"); ?></b> 
                <br>
                <?php $tn=$this->session->userdata("tanggal_nonton");
                echo date('l', strtotime($tn)).", ".$tn."/ ".$this->session->userdata("jadwal"); ?>
                <br> 
                Kursi : <?php echo $kursi; ?></p>
            </div>
            <div class="card-footer">
                 <small class="text-muted">Tiket Bioskop Kampus UDINUS (TIKU)<br><b><?php echo $this->session->userdata("judul"); ?> - <?php echo date('l', strtotime($tn)).", ".$tn."/ ".$this->session->userdata("jadwal"); ?> - <?php echo $kursi; ?></b><br>disobek untuk petugas</small>
            </div>
         </div>
         <?php }?>
        <!-- <div class="card">
            <div class="card-body">
            <h6 class="card-title">Tiket Bioskop Kampus UDINUS (TIKU)</h6><hr>
            <p class="card-text"><b>Aladdin</b> <br>Friday, 2019-06-14/ Siang<br> Kursi : A2</p>
            </div>
            <div class="card-footer">
            <small class="text-muted">Tiket Bioskop Kampus UDINUS (TIKU)<br><b>Aladdin - Friday, 2019-06-14/ Siang - A2</b><br>disobek untuk petugas</small>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
            <h6 class="card-title">Tiket Bioskop Kampus UDINUS (TIKU)</h6><hr>
            <p class="card-text"><b>Aladdin</b> <br>Friday, 2019-06-14/ Siang<br> Kursi : A3</p>
            </div>
            <div class="card-footer">
            <small class="text-muted">Tiket Bioskop Kampus UDINUS (TIKU)<br><b>Aladdin - Friday, 2019-06-14/ Siang - A3</b><br>disobek untuk petugas</small>
            </div>
        </div> -->
    </div>
    <br>
    </div> <!--container-->
    <br>
    <div align="center"><button class="btn btn-primary" onclick="print()">Print</button></div>
    <br>
    <div class="modal fade bd-example-modal-xl" id="modalTiket" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Klik kanan - save image as...</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="modal-body" style="padding: 0rem;">
                    <!-- gambar tiket nanti di sini -->
                </div>
            </div>
        </div>
    </div>
   <script>
        html2canvas(document.querySelector("#printableArea")).then(canvas => {
            // document.body.appendChild(canvas)
            document.getElementById("modal-body").appendChild(canvas);
        });
       function print() { 
            $("#modalTiket").modal();
        }
    </script>
<?php 
    $this->load->view('footer');
?>