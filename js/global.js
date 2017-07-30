$(function(){

	$('#patientSearch').autocomplete('../../views/patient/searchPatient.php',{
		width: 555,
	    matchContains: true,
	    selectFirst: false
	}).result(function(event, data, formatted) {
		console.log(data);
		$("form[name='search-patient']").submit();
	});

});