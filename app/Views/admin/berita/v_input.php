<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <div class="card-title"><i class="fa fa-table"></i>Data <?= $judul ?></div>
        </div>
        <?php echo form_open('Berita/InsertData', ['enctype' => 'multipart/form-data']); ?>
        <div class="card-body">
            <div class="form-group">
                <label>Judul Berita</label>
                <input name="judul_berita" class="form-control" placeholder="Judul Berita">
            </div>
            <div class="form-group">
                <label>Isi Berita</label>
                <textarea id="summernote" name="isi_berita"></textarea>
            </div>
            <div class="form-group">
                <label>Gambar Berita</label>
                <input type="file" name="gambar_berita" class="form-control" accept="image/*" required>
            </div>
            <div class="form-group">
                <label>Type Berita</label>
                <select name="type_berita" class="form-control">
                    <option value="berita">Berita</option>
                    <option value="artikel">Artikel</option>
                    <option value="agenda">Agenda</option>
                    <option value="soprenja">Soprenja</option>
                </select>
            </div>
            <div class="form-group">
                <a href="<?= base_url('index.php/Berita') ?>" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        <?php echo form_close() ?>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            placeholder: 'Isi Berita',
            height: 250
        });
    });
</script>
