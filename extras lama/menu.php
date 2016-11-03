<?php
include "config.php";
//error_reporting(0);
?>

           
  
 <!-- JS CALENDAR Start -->
    <!-- calendar stylesheet -->
    <link rel="stylesheet" type="text/css" media="all" href="extras/jscalendar/style.css" title="Blue">
    <!-- main calendar program -->
    <script type="text/javascript" src="extras/jscalendar/calendar.js"></script>
    <script type="text/javascript" src="extras/jscalendar/calendar-en.js"></script>
    <!-- the following script defines the Calendar.setup helper function, which makes
           adding a calendar a matter of 1 or 2 lines of code. -->
    <script type="text/javascript" src="extras/jscalendar/calendar-setup.js"></script>
<!-- JS CALENDAR COMPLETE -->


  


<!-- section -->
                 <div class="col-md-12">
                 <div class="profile-nav alt">
                      <section class="panel">
        <header class="panel-heading">


        </header>
        <div class="panel-body">

          <form method='get' action='laporan_generate.php' target="_self">
      
      

      PILIH JENIS LAPORAN :
      <br>
      <select name="jenis" onChange='this.form.submit()'>
      <option value='a' <?php if($_GET['jenis'] == 'a') echo 'selected'; ?> >Laporan Senarai Surat</option>
      <option value='b' <?php if($_GET['jenis'] == 'b') echo 'selected'; ?>>Laporan Bilangan Surat</option>
      <option value='c' <?php if($_GET['jenis'] == 'c') echo 'selected'; ?>>Laporan Kemasukkan Sistem Surat</option>
      <option value='d2'<?php if($_GET['jenis'] == 'd2') echo 'selected'; ?>>Laporan Keseluruhan Pendaftaran Surat PTGS Mengikut Tahun</option>
      <option value='d' <?php if($_GET['jenis'] == 'd') echo 'selected'; ?>>Laporan Penerima Surat Mengikut Tahun</option>
      <option value='e' <?php if($_GET['jenis'] == 'e') echo 'selected'; ?>>Laporan Penerima Surat Mengikut Tarikh</option>
      </select>
      <br>  <br>  
   
      
      


      </form>

      <br>
          
        </div>
    </section>

    </div>
    </div>
    
    
    
 <!-- section --> 
 

 
 

