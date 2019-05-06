<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="site-section-heading text-center">Form Booking</h2>
          </div>
        </div><br>
        <div class="alert alert-info">
            Halaman untuk melakukan booking / Menyewa Lapangan Futsal
            </div>
        <div class="card">
        <div class="card-header bg-dark text-white"> Form Booking / Pemesanan</div>
        <div class="card-body">

            <?php

            //menampilkan alert
            if(isset($status)){
                ?>
           <div class="alert alert-<?php echo $status; ?>">
                <?php echo $message; ?>
            </div>
            <?php
            }
            ?>

        <form method="post">
            <div class="row">
                <div class="col-sm-6"><div class="form-group">
                <label for="no"><b>No.Booking:</b></label>
                <input type="number" class="form-control" name="no_booking" placeholder="Ex : 1" >
            </div></div>
            <div class="col-sm-6"><div class="form-group">
                <label for="no"><b>Nama Pemesan:</b></label>
                <input type="text" class="form-control" name="nama_pemesan" placeholder="Ex : Dinda Wulandari">
            </div></div>
            <div class="col-sm-6"><div class="form-group">
                <label for="no"><b>Jenis Lapangan:</b></label>
                <select class="form-control" id="jl" name="jl">
                    <option>Lapangan Futsal 1</option>
                    <option>Lapangan Futsal 2</option>
                    <option>Lapangan Futsal 3</option>
                    <option>Lapangan Futsal 4</option>
                    <option>Lapangan Futsal 5</option>
                    <option>Lapangan Futsal 6</option>
                    <option>Lapangan Futsal 7</option>
                    <option>Lapangan Futsal 8</option>
                    <option>Lapangan Futsal 9</option>
                </select>
            </div></div>
            <div class="col-sm-6"><div class="form-group">
                <label for="no"><b>Tanggal Pesan:</b></label>
                <input type="date" class="form-control" name="tglpesan">
            </div></div>
            <div class="col-sm-6"><div class="form-group">
                <label for="no"><b>Tanggal Main:</b></label>
                <input type="date" class="form-control" name="tglmain">
            </div></div>
            <div class="col-sm-6"><div class="form-group">
                <label for="no"><b>Nama Tim:</b></label>
                <input type="text" class="form-control" name="namatim" placeholder="Ex: Sunday Futsal">
            </div></div>
            <div class="col-sm-6"><div class="form-group">
                <label for="no"><b>Jam Mulai:</b></label>
                <input type="time" class="form-control" name="jammulai">
            </div></div>
            <div class="col-sm-6"><div class="form-group">
                <label for="no"><b>Jam Selesai:</b></label>
                <input type="time" class="form-control" name="jamselesai">
            </div></div>
        </div>
        
        <button type="submit" class="btn btn-info">Save Booking</button>
        </form>

        </div> 
        
        </div> 


            </div>
          </div>
        </div>
      </div>
    </div>