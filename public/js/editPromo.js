$('#editModal').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget) // Button that triggered the modal
	
	var id = button.data('fid')
	var promo = button.data('fpromo')
	var kategori = button.data('fkategori')
	var tanggal_dibuat = button.data('fdate1')
	var tanggal_berakhir = button.data('fdate2')
	var kode_voucher = button.data('fkode')
	var Harga = button.data('fharga')
	     

	$('#form-edit-modal').attr('action', '/Promo/'+id);

	$('#id').val(id)
	$('#nama2').val(promo)
	$('#kategori').val(kategori)
	$('#date12').val(tanggal_dibuat)
	$('#date22').val(tanggal_berakhir)
	$('#kode2').val(kode_voucher)
	$('#harga2').val(Harga)
	
})



