<?php
include "config.php";
//error_reporting(0);
?>

           



<!-- section -->
                 <div class="col-md-12">
                 <div class="profile-nav alt">
                      <section class="panel">
        <header class="panel-heading">


        </header>
        <div class="panel-body">
        <b>SILA PILIH JENIS LAPORAN :</b>
          <form method='get' action='laporan_generate.php' target="_self">

      <br>
      <select style="width: 500px;" name="jenis" onChange='this.form.submit()'>
      <option > <b>------------------ SILA PILIH  ------------------ </b></option>
      <option value='1' <?php if($_GET['jenis'] == '1') echo 'selected'; ?>>(L1) - Laporan Surat Mengikut Kategori </option>
      <option value='2' <?php if($_GET['jenis'] == '2') echo 'selected'; ?>>(L2) - Laporan Surat Mengikut Jenis </option>
      </select>
      
   
      
      </form>

  
          
        </div>
    </section>

    </div>
    </div>
    
    
    
 <!-- section --> 
 

 
 

