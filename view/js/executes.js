/* Busquedas de Dominios en index */
function dominios(){ /* marcar como pagado */
	var sld = document.getElementById('sld').value;
	var ext = document.getElementById('ext').value;
	var parametrs = {
		'ext' : ext,
		'sld' : sld
	};
	$.ajax({
		data: parametrs,
		url: 'view/dominios/dominiofuntions.php',/* UPDATE PAGADO */
		type: 'POST',
		success: function(response){
			$('#out_domain').html(response);
		}
	});
} 
function dominio(ext){ /* marcar como pagado */
	var sld = document.getElementById('sld').value;
	var parametrs = {
		'ext' : ext,
		'sld' : sld
	};
	$.ajax({
		data: parametrs,
		url: 'view/dominios/dominiofuntions.php',/* UPDATE PAGADO */
		type: 'POST',
		success: function(response){
			$('#out_domain').html(response);
		}
	});
} 
