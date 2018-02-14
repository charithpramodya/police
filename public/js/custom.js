var personId=0;
$(document).ready(function(){

	
	$('.editlink').on('click',function(event){
		
		console.log("done");
		personId=this.dataset['personid'];
		console.log(personId);
		$.ajax({
			method:'GET',
			url:editUrl,
			data:{id:personId, _token:token}
		}).done(function(msg){
			console.log(msg['message']);
		});

	});


	$('.deletelink').on('click',function(event){
		event.preventDefault();
		console.log("done");
		var perId=this.dataset['personid'];
		console.log(perId);
		$.ajax({
			method:'POST',
			url:deleteUrl,
			data:{id:perId, _token:token}
		}).done(function(msg){
			console.log(msg['message']);
		});

	});

	$('.confirmlink').on('click',function(event){
		event.preventDefault();
		console.log("done");
		var perId=this.dataset['personid'];
		console.log(perId);
		$.ajax({
			method:'POST',
			url:confirmUrl,
			data:{id:perId, _token:token}
		}).done(function(msg){
			console.log(msg['message']);
		});

	});

	$('.cancellink').on('click',function(event){
		event.preventDefault();
		console.log("done");
		var perId=this.dataset['personid'];
		console.log(perId);
		$.ajax({
			method:'POST',
			url:cancelUrl,
			data:{id:perId, _token:token}
		}).done(function(msg){
			console.log(msg['message']);
		});

	});
});