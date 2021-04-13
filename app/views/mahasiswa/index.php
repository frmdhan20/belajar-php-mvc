<div class="container mt-3">

	<!-- flash message -->
	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-lg-6">
			<!-- Tombol tambah data -->
			<button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
				Tambah Data Mahasiswa
			</button>
		</div>
	</div>

	<div class="row mb-3">
		<div class="col-lg-6">
			<form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
				<div class="input-group">
				  <input type="text" class="form-control" placeholder="cari mahasiswa disini.." name="keyword" id="keyword" autocomplete="off">
				  <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
				</div>
			</form>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-6">
			<h3>Daftar Mahasiswa</h3>
			 <ul class="list-group">
			   <?php foreach( $data['mhs'] as $mhs ) : ?>
			     <li class="list-group-item ">
			     	<?= $mhs['nama']; ?>
			     		<a style="text-decoration: none;" href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger float-end ms-1" onclick="return confirm('Yakin data ini dihapus ?')">hapus</a>

			     		<a style="text-decoration: none;" href="<?= BASEURL; ?>/mahasiswa/edit/<?= $mhs['id']; ?>" class="badge bg-success float-end ms-1 tampilModalEdit" data-bs-toggle="modal" data-bs-target="#formModal" id="editMahasiswa">edit</a>
			     		
			     		<a style="text-decoration: none;" href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary float-end ms-1">detail</a>
			     	</li>
			   <?php endforeach; ?>
			 </ul>
				
		</div>
	</div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      	<form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
      		<div class="mb-3">
			  <label for="nama" class="form-label">Nama</label>
			  <input type="text" class="form-control" id="nama" name="nama">
			</div>

			<div class="mb-3">
			  <label for="nim" class="form-label">NIM</label>
			  <input type="number" class="form-control" id="nim" name="nim">
			</div>

			<div class="mb-3">
			  <label for="email" class="form-label">Email</label>
			  <input type="email" class="form-control" id="email" name="email">
			</div>

			<!-- Combo box -->
			<div class="form-group">
			    <label for="jurusan">Jurusan</label>
			    <select class="form-control" id="jurusan" name="jurusan">
			      <option value="Sistem Informasi">Sistem Informasi</option>
			      <option value="Sistem Informasi">Sistem Informasi Akuntansi</option>
			      <option value="Sistem Informasi">Teknik Informatika</option>
			    </select>
			</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>