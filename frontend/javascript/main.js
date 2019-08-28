$(document).ready(function () {
	
	$('.tekuci-racuni').on('change', promeniTekuciRacun);
	$('#prenos-frm').submit(prenosCb); 
	
});

var promeniTekuciRacun = function () {
	
	var racunId = $(this).val();
	
	$.get( "api/racun/" + racunId, function(data) {
		
		console.log(data);
		
		$('#tbl-tip').text(data.racun.tip_racuna);
		$('#tbl-valuta').text(data.racun.valuta_racuna);
		$('#tbl-datum').text(data.racun.datum_kreacije_at);
		$('#tbl-stanje').text(data.stanje);
		preuzmiInfoOTransakcijama(racunId);
	});
}

var preuzmiInfoOTransakcijama = function (idRacuna) {

	$.get( "api/transakcije/" + idRacuna, function(data) {
		$('#tran-tbl > tbody').empty();		
		
		var newRows = '';
		
		data.transakcije.forEach(function (t) {
			newRows += '<tr>';
			newRows += '<td>' + t.datum_transakcije_at + '</td>';
			newRows += '<td>' + t.opis + '</td>';
			newRows += '<td>' + t.iznos_transakcije + '</td>';
			newRows += '</tr>';
		});
		
		$('#tran-tbl > tbody').append(newRows);					
	});	
	
}

var prenosCb = function (e) {
	var targetRacunId = $('#target-racun').val();
	var destRacunId = $('#dest-racun').val();
	var suma = $('#suma').val();
		
	if (targetRacunId == destRacunId) {
		alert('Izabrani racuni moraju biti razliciti!');
		e.preventDefault();
	}
	
	if (!$.isNumeric(suma) || Number(suma) < 0) {
		alert('Iznos mora biti pozitivan broj!');
		e.preventDefault();
	}
			
}

