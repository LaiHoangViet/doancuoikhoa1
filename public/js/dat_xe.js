$('#date-start, #date-end').change(function() {
	tinh_tien_dat_xe();
});
function tinh_tien_dat_xe() {
	let start = $('#date-start').val();
	let end = $('#date-end').val();
	if (start && end) {
		var date1 = new Date(start);
		var date2 = new Date(end); 
		var days = date2.getTime() - date1.getTime(); 
		days = days / (1000 * 3600 * 24);
		var price = $('#price').attr('price');
		$('#price').val(price * days);
	} else {
		$('#price').val('');
	}
}