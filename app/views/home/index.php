<section >
         <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#main_slider" data-slide-to="0" class="active"></li>
               <li data-target="#main_slider" data-slide-to="1"></li>
               <li data-target="#main_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-caption ">
                              <h1>Welcome To The <strong class="color">Greenify</strong></h1>
                              <p>Situs peduli lingkungan terbesar di Indonesia, anda dapat mengikuti kegiatan kegiatan kami yang tentunya demi kesehatan lingkungan di negara Indonesia.</p>
                              <a class="btn btn-lg btn-primary" href="#" role="button">About</a>
                              <a class="btn btn-lg btn-primary" href="#" role="button">Contact US</a>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="images/gyufyufyu.png" alt="img"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-caption ">
                              <h1>Sayangi <strong class="color"> Lingkungan Anda</strong></h1>
                              <p>Anda sedang hidup di lingkungan yang akan merubah hidup anda dan kesehatan anda. Sudah saatnya anda memberikan kontribusi untuk lingkungan sekitar anda.</p>
                              <a class="btn btn-lg btn-primary" href="#" role="button">About</a>
                              <a class="btn btn-lg btn-primary" href="#" role="button">Contact US</a>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box ">
                              <figure><img src="images/gyufyufyu.png" alt="img"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-caption ">
                              <h1>Satu Aksi<strong class="color"> Untuk Indonesia</strong></h1>
                              <p>Kegiatan yang luas nan tersebar membuat anda mudah mencari kami. Ayo ikuti kegiatan kami dan donasikan sedikit harta anda untuk lingkungan yang lebih baik.</p>
                              <a class="btn btn-lg btn-primary" href="#" role="button">About</a>
                              <a class="btn btn-lg btn-primary" href="#" role="button">Contact US</a>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="images/gyufyufyu.png" alt="img"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i></a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
            </a>
         </div>
      </section>
      <!-- plant -->
      <div id="plant" class="plants">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2>Jadwal Kegiatan</h2>
                     <span>Secara rutin kegiatan akan selalu terlaksana, pastikan anda mengikutinya.</span>
                  </div>
               </div>
            </div>
         </div>
                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Dana</th>
                        <th scope="col">Progress</th>
                        <th scope="col">Dokumentasi</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=1?>
                    <?php foreach($data['kegiatan'] as $data) :?>
                    <tr>
                      <td><?= $i?></td>
                      <td><?= $data['nama'];?></td>
                      <td><?= $data['dana'];?></td>
                      <td><?= $data['progress'];?>%</td>
                      <td><a class="btn btn-primary" href="<?= $data['dokumentasi'];?>" role="button">Link</a></td>
                      <td><a class="btn btn-info" href="https://kitabisa.com/campaign/patunganpohon" role="button">Donasi</a></td>
                      </tr>
                      <?php $i++?>
                    <?php endforeach;?>
                    </tbody>
                  </table>
      </div>
      <!-- end plant -->
      <!-- about -->
      <div id="about" class="about">
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     <div class="about-box">
                        <h2>50 Ribu</h2>
                        <div class="white-bg">
                           <span>Pohon</span> 
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     <div class="about-box">
                        <h2>261</h2>
                        <div class="white-bg">
                           <span>Relawan</span> 
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                     <div class="about-box">
                        <h2>63</h2>
                        <div class="white-bg">
                           <span>Lokasi Terhijaukan</span> 
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="about-box">
                     <div class="titlepage">
                        <h2>About US</h2>
                        <span> <b>Greenify.com</b> adalah situs peduli Lingkungan buatan anak bangsa yang berdedikasi untuk kebaikan alam. Dengan lingkungan yang nyaman diharapkan Indonesia akan lebih baik.</span> 
                        <div class="read-more">
                           <a  href="#">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!--Gallery -->
      <div id="gallery" class="Gallery">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Our Gallery </h2>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid margin-r-l">
         <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 thumb">
               <div class="Gallery-box">
                  <figure>
                     <a href="images/1.jpg" class="fancybox" rel="ligthbox">
                     <img  src="images/1.jpg" class="zoom img-fluid "  alt="">
                     </a>
                     <span class="hoverle">
                     <a href="images/1.jpg" class="fancybox" rel="ligthbox">View</a>
                     </span>  
                  </figure>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 thumb">
               <div class="Gallery-box">
                  <figure>
                     <a href="images/2.jpg" class="fancybox" rel="ligthbox">
                     <img  src="images/2.jpg" class="zoom img-fluid "  alt="">
                     </a>
                     <span class="hoverle">
                     <a href="images/1.jpg" class="fancybox" rel="ligthbox">View</a>
                     </span>
                  </figure>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 thumb">
               <div class="Gallery-box">
                  <figure>
                     <a href="images/3.jpg" class="fancybox" rel="ligthbox">
                     <img  src="images/3.jpg" class="zoom img-fluid "  alt="">
                     </a>
                     <span class="hoverle">
                     <a href="images/3.jpg" class="fancybox" rel="ligthbox">View</a>
                     </span>
                  </figure>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 thumb">
               <div class="Gallery-box">
                  <figure>
                     <a href="images/4.jpg" class="fancybox" rel="ligthbox">
                     <img  src="images/4.jpg" class="zoom img-fluid "  alt="">
                     </a>
                     <span class="hoverle">
                     <a href="images/4.jpg" class="fancybox" rel="ligthbox">View</a>
                     </span> 
                  </figure>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 thumb">
               <div class="Gallery-box">
                  <figure>
                     <a href="images/5.jpg" class="fancybox" rel="ligthbox">
                     <img  src="images/5.jpg" class="zoom img-fluid "  alt="">
                     </a>
                     <span class="hoverle">
                     <a href="images/5.jpg" class="fancybox" rel="ligthbox">View</a>
                     </span> 
                  </figure>
               </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
               <div class="Gallery-box">
                  <figure>
                     <a href="images/6.jpg" class="fancybox" rel="ligthbox">
                     <img  src="images/6.jpg" class="zoom img-fluid "  alt="">
                     </a>
                     <span class="hoverle">
                     <a href="images/6.jpg" class="fancybox" rel="ligthbox">View</a>
                     </span>
                  </figure>
               </div>
            </div>
         </div>
      </div>
      <!-- end Gallery -->
      <!--contact -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Contact Us</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 paddimg-right">
                  <div class="row">
                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <form>
                           <div class="row">
                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                 <input class="form-control" placeholder="Name" type="text" name="Name">
                              </div>
                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                 <input class="form-control" placeholder="Email" type="text" name="Email">
                              </div>
                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                 <input class="form-control" placeholder="Phone" type="text" name="Phone">
                              </div>
                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                 <textarea class="textarea>" placeholder="Message" type="text" name="Message"></textarea>
                              </div>
                              <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                 <a href="#">Read More</a>
                              </div> -->
                           </div>
                        </form>
                     </div>
                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="map_section">
                           <figure><img src="images/map.jpg"></figure>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 paddimg-left">
                  <div class="Nursery-img">
                     <figure>
                        <img src="images/contactimg.jpg" alt="img"/>
                        <div class="text-box">
                           <h3>Greenify For Better Life</h3>
                        </div>
                     </figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->