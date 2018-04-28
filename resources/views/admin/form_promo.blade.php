
<div class="form-group">
	<label for="nama">Nama Promo</label>
	<input type="text" class="form-control"  name="nama" id="nama">
</div>
<div class="form-group">
	<label for="id_kategori">Kategori</label>
    <select name="kategori" class="form-control">
        <option value="">-pilih kategori-</option>
          @foreach( $kategoris as $kategori )
            <option value="{{ $kategori->id }}">{{ $kategori->kategori }}</option>
          @endforeach
        </select>
</div>

<div class="form-group">
    <label for="date">Tanggal Dibuat</label>
	<input type="date" class="form-control"  name="date1" id="date1">
</div>
<div class="form-group">
	<label for="date">Tanggal Berakhir</label>
	<input type="date" class="form-control"  name="date2" id="date2">
</div>
<div class="form-group">
	<label for="kode">Kode Voucher</label>
	<input type="text" class="form-control"  name="kode" id="kode">
</div>
<div class="form-group">
	<label for="harga">Harga Promo</label>
	<input type="text" class="form-control"  name="harga" id="harga">
</div>
<div class="form-group">
    <label>File</label>
    <input type="file" id="file" name="file[]" multiple="">
</div>


