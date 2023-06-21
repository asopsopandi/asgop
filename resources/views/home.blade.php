<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portopolio | Asop Sopandi </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body{
            font-family:'Times New Roman', Times, serif;
            background-color: #227C70;
        }
        .form-label>span{
          color: red;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"> Asop Sopandi</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#About">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Project">Project</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Contact">Contact</a>
              </li>
              

            </ul>
           
          </div>
        </div>
      </nav>
      <!--Akhir Navbar-->

      <!--Home-->
      <section id="home">
        <div class="container-fluid pt-4">
            <div class="text-bg text-center py-5">
                <img src="/storage/{{ $profil->foto }}" alt="Asop" width="200" class="img-thumbnail rounded-circle">
                <h2 class="fw-bold mt-3">ASOP SOPANDI</h2>
                <p class="fs-5">{{ $profil->nis }}</p>
                <P class="fs-5">{{ $profil->Nama }}</P>
                <p class="fs-5">{{ $profil->jk }}</p>
                <p class="fs-5">{{ $profil->ttl }}</p>
                <p class="fs-5">{{ $profil->sekolah }}</p>
                <p class="fs-5">{{ $profil->alamat }}</p>
 
            </div>

        </div>
      </section>


      <!--Akhir Home-->
          <section id="About" class="pt-5">
            <div class="container">
              <div class="p-5 text-center">
                <h3 class="fw-bold mb-3">About me</h3>
                <div class="row justify-conten-center">
                  <div class="col-md-6">
                    <p>
                      Saya Asop Sopandi,saya seorang pelajar dibidang INFORMATIKA jurusan RPL (Rekayasa Perangkat Lunak)
                      di sekolah menengah kejuruan,saya awalmya mengambil jurusan Rekaya Perangkat Lunak ini karena saya ingin mempelajari dan memperdalam pelajaran
                      yang bersangkutan denmgan komputer.
                    </p>
                  </div>
                  <div class="col-md-6">
                    <p>
                      Saya ingin menjadi orang yang sukses dan berguna terutama pada kedua orang tua saya dan keluarga Saya,
                      dan cita-cita saya ingin menjadi seorang Masinis.dan saya juga pada kelak nanti ingin jadi orang pengusaha
                      yang sukses karena saya ingin menjadi orang yang berguna dan membahagiakan kedua orang tua saya yang mana 
                      telah membesarkan saya dari kecil sampai sekarang dan telah membinyayai sampai sekarang.
                    </p>
                  </div>
                  
                    
                  
                </div>
              </div>
            </div>

          </section>
      <!--Akhir About-->
           <section id="home" class="pt-5">
            <div class="container">
              <div class="p-5 text-center">
                <div class="fw-bold mb-3">
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni dolorem, similique libero debitis doloremque sit maiores? Nobis reprehenderit praesentium, aspernatur voluptates voluptatibus quae quisquam eaque mollitia autem a dolorum ratione?</p>
                </div>
              </div>
            </div>
           </section>

      <!--Project-->
        <section id="Project" class="pt-5">
          <div class="container text-center">
            <div class="p-5 text-bg-light text-center">
              <h3 class="fw-bold mb-3">My Projects</h3>
              <div class="row justify-content-center">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <img src="img/project1.png" class="card-img-top" alt="project1">
                    <div class="card-body">
                      <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>


                    </div>

                  </div>

                </div>
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <img src="img/project2.png" class="card-img-top" alt="project2">
                    <div class="card-body">
                      <p class="card-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lore.</p>


                    </div>

                  </div>

                </div>
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <img src="img/project3.jpg" class="card-img-top" alt="project3">
                    <div class="card-body">
                      <p class="card-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators.</p>


                    </div>

                  </div>

                </div>

              </div>

            </div>
          </div>
        </section>
      <!--Akhir Project-->

      <!--Contact Me-->
        <section id="Contact">
          <div class="container p-5">
            <h3 class="fw-bold text-center mb-3">Contact Me</h3>
            <div class="row justify-content-center">
              <div class="col-md-6">
                  <form action="" method="post">
                  <div class="mb-3">
                    <label for="Nama_Lengkap" class="form-label">Nama Lengkap <span>*</span></label>
                    <input type="text" class="form-control" name="nama_lengkap" id="nama_lengkap">

                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email<span>*</span></label>
                    <input type="text" class="form-control" name="email" id="email" 
                    autocomplete="off">

                  </div>
                  <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan<span>*</span></label>
                    <textarea name="pesan" class="form-control" id="pesan" cols="30" 
                    rows="10"></textarea>

                  </div>
                  <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
                </div>

            </div>

          </div>
        </section>
      <!--Akhir Contact Me-->

      <!--Feater-->
        <div class="container-fluid">
          <footer class="py-3 my-3 border-top">
            <p class="text-center">&copy; 2023 <a href="https://instagram.com/aspspndi_?igshid=ZDdkNTZiNTM" target="_blank"
              class="fw-bold text-decoration-none">Asop Sopandi</a></p>

          </footer>

        </div>
      <!--Akhir Feater-->
</body>
<script src="js/bootstrap.bundle.js"></script>
</html>