$(function(){
	$('#information').show();
	$("#charges").hide();
	$('#doctor').hide();	
	$('#laboratory').hide();
	$('#ultrasound').hide();
	$('#xray').hide();
	$('#medicine').hide();
	$('#supplies').hide();
	$('#soa').hide();
	$('#cart').hide();


	$('#information-menu').click(function(){
		$('#information').show();
		$('#charges').hide();
		$('#doctor').hide();
		$('#laboratory').hide();
		$('#ultrasound').hide();
		$('#xray').hide();
		$('#medicine').hide();
		$('#supplies').hide();
		$('#soa').hide();
		$('#cart').hide();
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
		$('#soa').hide();
		$('#cart').hide();
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
		$('#soa').hide();
		$('#cart').hide();
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
		$('#soa').hide();
		$('#cart').hide();
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
		$('#soa').hide();
		$('#cart').hide();
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
		$('#soa').hide();
		$('#cart').hide();
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
		$('#soa').hide();
		$('#cart').hide();
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
		$('#soa').hide();
		$('#cart').hide();
	});

	$('#soa-menu').click(function(){
		$('#information').hide();
		$('#charges').hide();
		$('#doctor').hide();
		$('#laboratory').hide();
		$('#ultrasound').hide();	
		$('#xray').hide();
		$('#medicine').hide();
		$('#supplies').hide();	
		$('#soa').show();
		$('#cart').hide();
	});

	$('#cart-menu').click(function(){
		$('#information').hide();
		$('#charges').hide();
		$('#doctor').hide();
		$('#laboratory').hide();
		$('#ultrasound').hide();	
		$('#xray').hide();
		$('#medicine').hide();
		$('#supplies').hide();	
		$('#soa').hide();
		$('#cart').show();
	});

});