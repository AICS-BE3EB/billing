$(function(){
	$('#information').show();
	$("#charges").hide();
	$('#doctor').hide();	
	$('#laboratory').hide();
	$('#ultrasound').hide();
	$('#xray').hide();
	$('#medicine').hide();
	$('#supplies').hide();


	$('#information-menu').click(function(){
		$('#information').show();
		$('#charges').hide();
		$('#doctor').hide();
		$('#laboratory').hide();
		$('#ultrasound').hide();
		$('#xray').hide();
		$('#medicine').hide();
		$('#supplies').hide();
	});

	$('#charges-menu').click(function(){
		$('#information').hide();
		$('#charges').show();
		$('#doctor').hide();
		$('#laboratory').hide();
		$('#ultrasound').hide();
		$('#xray').hide();
		$('#medicine').hide();
		$('#supplies').hide();
	});

	$('#doctor-menu').click(function(){
		$('#information').hide();
		$('#charges').hide();
		$('#doctor').show();
		$('#laboratory').hide();
		$('#ultrasound').hide();
		$('#xray').hide();
		$('#medicine').hide();	
		$('#supplies').hide();
	});

	$('#laboratory-menu').click(function(){
		$('#information').hide();
		$('#charges').hide();
		$('#doctor').hide();
		$('#laboratory').show();
		$('#ultrasound').hide();
		$('#xray').hide();
		$('#medicine').hide();
		$('#supplies').hide();
	});

	$('#ultrasound-menu').click(function(){
		$('#information').hide();
		$('#charges').hide();
		$('#doctor').hide();
		$('#laboratory').hide();
		$('#ultrasound').show();	
		$('#xray').hide();	
		$('#medicine').hide();
		$('#supplies').hide();
	});

	$('#xray-menu').click(function(){
		$('#information').hide();
		$('#charges').hide();
		$('#doctor').hide();
		$('#laboratory').hide();
		$('#ultrasound').hide();	
		$('#xray').show();
		$('#medicine').hide();	
		$('#supplies').hide();
	});

	$('#medicine-menu').click(function(){
		$('#information').hide();
		$('#charges').hide();
		$('#doctor').hide();
		$('#laboratory').hide();
		$('#ultrasound').hide();	
		$('#xray').hide();
		$('#medicine').show();
		$('#supplies').hide();	
	});

	$('#supplies-menu').click(function(){
		$('#information').hide();
		$('#charges').hide();
		$('#doctor').hide();
		$('#laboratory').hide();
		$('#ultrasound').hide();	
		$('#xray').hide();
		$('#medicine').hide();
		$('#supplies').show();	
	});

});