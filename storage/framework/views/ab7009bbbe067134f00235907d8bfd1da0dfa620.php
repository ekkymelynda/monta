<div>
  <form method="post" role="form">
    <div>
      <?php echo e(csrf_field()); ?>

      <label>nama ptk</label>
      <input type="text" name="nm_ptk" />
    </div>
    <div>
      <label>jk</label>
      <input type="text" name="jk" />
    </div>
    <div>
      <label>tgl_lahir</label>
      <input type="text" name="tgl_lahir" />
    </div>
    <div>
      <label>nidn</label>
      <input type="text" name="nidn" />
    </div>
    <div>
      <label>nip</label>
      <input type="text" name="nip" />
    </div>
    <div>
      <label>gelar_depan</label>
      <input type="text" name="gelar_depan" />
    </div>
    <div>
      <label>gelar_belakang</label>
      <input type="text" name="gelar_belakang" />
    </div>
    <div>
      <label>inisial</label>
      <input type="text" name="inisial" />
    </div>
    <div>
      <label>no_hp</label>
      <input type="text" name="no_hp" />
    </div>
    <div>
      <label>created_at</label>
      <input type="text" name="created_at" />
    </div>
    <div>
      <label>updated_at</label>
      <input type="text" name="updated_at" />
    </div>
    <button type="submit">Tambah</button>
  </form>
</div>