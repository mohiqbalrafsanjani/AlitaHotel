<?php 
    $this->load->view('header');
?>
    <br>
    <br>
    <br><h2 align="center">Login</h2><br>
    <div class="container"> <!--container-->
    <form id="pesan" class="form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/WelcomeAlita/proses_login">
        <div class="row"> <!--row-->
                    <div class="col-5"> <!--col-10-->
       <div class="container">

      
        <center>
        <input type="text" class="form-control" placeholder="Username" name="username" required autofocus>
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        </center>
        <button class="btn btn-primary" type="submit">Submit</button>
        
      

    </div> <!-- /container -->
                
            </div> <!--col-10-->
        </div> <!--row-->
        </form>
    </div> <!--container-->
    <br><br><br>
<?php 
    $this->load->view('footer');
?>