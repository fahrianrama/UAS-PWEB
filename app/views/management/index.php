
<!-- tabel Kegiatan -->
<div class="container" style="background-color:rgb(240, 255, 255); color: black;">
  <h1 class="text-center">Data Kegiatan</h1><br>
  <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#FormBuatKegiatan">Tambah Data</button>
  <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Kegiatan</th>
          <th scope="col">Total dana</th>
          <th scope="col">Progress</th>
          <th scope="col">Dokumentasi</th>
          <th scope="col">Edit</th>
          <th scope="col">Hapus</th>
        </tr>
      </thead>
      <tbody>
      <?php $i=1?>
      <?php foreach($data['kegiatan'] as $Kegiatan) :?>
          <tr>
            <td><?= $i;?></td>
            <td><?= $Kegiatan['nama'];?></td>
            <td><?= $Kegiatan['dana'];?></td>
            <td><?= $Kegiatan['progress'];?>%</td>
            <td><?= $Kegiatan['dokumentasi'];?></td>
            <td><button type="button" class="btn btn-info tampilModalUbah" data-toggle="modal" data-target="#FormUbahKegiatan" data-id="<?=$Kegiatan['idkegiatan'];?>">Edit</button></td>
            <td><a href='<?= BASEURL;?>/management/hapus/<?=$Kegiatan['idkegiatan']?>' class="btn btn-danger" onclick="return confirm('Hapus?')">Hapus</button></td>
          </tr>
          <?php $i++?>
      <?php endforeach;?>
      </tbody>
    </table>
  </div>

<!--/ tabel Kegiatan -->

<!-- modal buat data buat Kegiatan-->
<div class="modal fade" id="FormBuatKegiatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kegiatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <div class="panel panel-default">
            <div class="panel-body">
            <form method="POST" action="<?= BASEURL;?>/management/tambahKegiatan">
                
                <div class="form-group">
                    <label for="namaKegiatan" style="color: white;">Nama Kegiatan</label>
                    <input type="text" name="namaKegiatan" id="namaKegiatan" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label for="totalDana" style="color: white;">Total Dana</label>
                    <input type="number" name="totalDana" id="totalDana" class="form-control" required/>
                </div>
                <div class="form-group" style="color: white;">
                    <label for="progress">Progress</label>
                    <input type="number" name="progress" id="progress" class="form-control" required/>
                </div>
                <div class="form-group" style="color: white;">
                    <label for="dokumentasi">Dokumentasi</label>
                    <input type="text" name="dokumentasi" id="dokumentasi" class="form-control" required/>
                </div>
                <div class="form-group">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
            </div>
        </div>
      </div>
    </div>
    </div>
</div>
<!-- /modal buat data Kegiatan-->


<!-- modal ubah Kegiatan-->
<div class="modal fade" id="FormUbahKegiatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Data Kegiatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- form -->
        <div class="panel panel-default">
            <div class="panel-body">
            <form action="<?= BASEURL;?>management/ubahdata" method="POST" >
              <input type="hidden" name="id" id="id">
                <div class="form-group">
                    <label for="nama" style="color: white;">Nama Kegiatan</label>
                    <input type="text" name="nama" id="nama" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label for="dana" style="color: white;">Total Dana</label>
                    <input type="number" name="dana" id="dana" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label for="progress2" style="color: white;">Progress</label>
                    <input type="number" name="progress2" id="progress2" class="form-control" required/>
                </div>
                <div class="form-group">
                    <label for="dokumentasi2" style="color: white;">Dokumentasi</label>
                    <input type="text" name="dokumentasi2" id="dokumentasi2" class="form-control" required/>
                </div>
                <div class="form-group">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
            </div>
        </div>
      </div>
    </div>
    </div>
</div>
<!-- /modal buat data Kegiatan-->