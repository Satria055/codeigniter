<div class="content-wrapper">
    <section class="content">
        <?php foreach($mahasiswa as $mhs) {?>

        <form action="<?php echo base_url().'mahasiswa/update';?>"
        method="post">
        <div class="form-group">
            <label>Nama Mahasiswa</label>
            <input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id?>">
            <input type="text" name="nama" class="form-control" value="<?php echo $mhs->nama?>">
        </div>
        <div class="form-group">
            <label>Nim</label>
            <input type="text" name="nim" class="form-control" value="<?php echo $mhs->nim?>">
        </div>
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="text" name="tgl_lahir" class="form-control" value="<?php echo $mhs->tgl_lahir?>">
        </div>
        <div class="form-group">
            <label>Jurusan</label>
           <select name="jurusan" class="form-control" required>
                <option <?php if($mhs->jurusan == "Sistem Informasi"){ echo 'selected="selected"'; } ?> >Sistem Informasi</option>
                <option <?php if($mhs->jurusan == "Teknik Informatika"){ echo 'selected="selected"'; } ?> >Teknik Informatika</option>
                <option <?php if($mhs->jurusan == "Teknik Komputer"){ echo 'selected="selected"'; } ?> >Teknik Komputer</option>
            </select>

 <!--   <select name="jurusan" class="form-control" value="">
            <option>Sistem Informasi</option>
            <option>Teknik Informatika</option>
            <option>Teknik Komputer</option>
        </select>-->
        </div>
        <div class="form-group">
          <label>Alamat</label>
          <input type="text" name="alamat" class="form-control" value="<?php echo $mhs->alamat?>">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" class="form-control" value="<?php echo $mhs->email?>">
        </div>
        <div class="form-group">
          <label>Nomor Telepon</label>
          <input type="text" name="no_telp" class="form-control" value="<?php echo $mhs->no_telp?>">
        </div>
        <div class="form-group">
          <label>Upload Foto</label>
          <input type="text" name="foto" class="form-control" value="<?php echo $mhs->foto?>" autocomplete="off" readonly>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="<?php echo base_url('mahasiswa/index');?>" class="btn btn-primary">Kembali</a>
        </form>

        <?php }?>
    </section>
</div>