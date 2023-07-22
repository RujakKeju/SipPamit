<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
       .uProfile {
        margin-top: 40px;
        margin-bottom: 40px
       }
    </style>
  </head>
  <body>
    {{-- User Profile --}}

    <section class="uProfile">
        <div class="container">
            <div class="shadow">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-10">
                        <h2 class="text-center">Profil Saya</h2>
                        <h4 class="text-center mb-3">Kelola Profile saya untuk Lorem ipsum dolor sit.</h4>
                        <hr>
                        <div class="row">
                            <div class="col-8">
                                {{-- Isi Form --}}
                                <form name="isianProfil" action="#" method="POST">
                                    <div class="row mb-3">
                                      <label for="username" class="col-sm-2 col-form-label">Username</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="username" name="username">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                      <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                      <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nama" name="nama">
                                      </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                          <input type="email" class="form-control" id="email" name="email">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="nohp" class="col-sm-2 col-form-label">Nomor Telepon</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="nohp" name="nohp">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="namatoko" class="col-sm-2 col-form-label">Nama Toko</label>
                                        <div class="col-sm-10">
                                          <input type="text" class="form-control" id="namatoko" name="namatoko">
                                        </div>
                                      </div>
                                    <fieldset class="row mb-3">
                                      <label for="jenis_kelamin" class="col-form-label col-sm-2 pt-0">Jenis Kelamin</label>
                                      <div class="col-sm-10">
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki">
                                          <label class="form-check-label" for="jenis_kelamin">
                                            Laki-laki
                                          </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                          <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
                                          <label class="form-check-label" for="jenis_kelamin">
                                            Perempuan
                                          </label>
                                        </div>
                                      </div>
                                    </fieldset>
                                    <div class="row mb-3">
                                        <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-10">
                                          <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                                        </div>
                                      </div>
                                    
                                    <input type="submit" class="btn btn-primary mb-3" id="submit" name="submit" value="Simpan"></input>
                                  </form>
                                  {{-- End Form --}}
                            </div>
                            <div class="col-4">
                                <div class="card" style="width: 18rem;">
                                    <div class="card-body">
                                        <div class="p-4">
                                            <div class="img-circle text-center mb-3">
                                                <img src="{{ asset('images/ucing.jpg') }}" alt="Image" class="shadow rounded-circle" width="150" height="150">
                                            </div>
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Pilih Foto Profil</label>
                                                <input class="form-control" type="file" id="formFile">
                                              </div>
                                        </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    {{-- End Profile --}}
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>