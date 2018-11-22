       <aside>
        <div id="sidebar"  class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="index.php"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
            <h5 class="centered">Hoşgeldin <br> <br>  <?php echo $_SESSION['kullanici_ad']; ?></h5>




            <li class="mt">

              <a href="index.php">
                <i class="fa fa-dashboard"></i>
                <span>Anasayfa</span>
              </a>
               <a href="projeler.php">
             <i class="fa fa-info-circle"></i>
                <span>Proje İşlemleri</span>
              </a>
            </li>
             <li>
              <a href="kadro.php">
               <i class="fa fa-users" aria-hidden="true"></i>
               <span>Kadro Bilgisi</span>
             </a>
           </li>
            <li>
              <a href="hakkımızda.php">
              <i class="fa fa-question"></i>
               <span>Hakkımızda</span>
             </a>
           </li>
            <li>
              <a href="slider.php">
               <i class="fa fa-picture-o" aria-hidden="true"></i>
               <span>Slider İşlemleri</span>
             </a>
           </li>
             <li>
              <a href="menu.php">
               <i class="fa fa-list" aria-hidden="true"></i>
               <span>Menü İşlemleri</span>
             </a>
           </li>
           <li>
              <a href="haberler.php">
           <i class="fa fa-list-alt"></i>
               <span>Haber İşlemleri</span>
             </a>
           </li>

           <li class="sub-menu">
            <a href="javascript:;" >
              <i class="fa fa-desktop"></i>
              <span>Ayarlar</span>
            </a>
            <ul class="sub">
              <li><a  href="genel-ayar.php">Genel Ayarlar</a></li>
              <li><a  href="sosyal-ayar.php">Sosyal Ayarlar</a></li>
              <li><a  href="iletisim-ayar.php">İletişim Ayarları</a></li>
              <li><a  href="api-ayar.php">Api Ayarları</a></li>
              <li><a  href="mail-ayar.php">Mail Ayarları</a></li>
            </ul>
          </li>





        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>