<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<style type="text/css">
		
	</style>


</head>
<body>

	<button onclick="consulta()">
		consulta
	</button>

	<h1></h1>
	
	
</body>
</html>

<!-- ESTO ES JAVASCRIPT -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script type="text/javascript">
	
	function consulta(){

		$.ajax({
			url: 'response.php',
		    type: 'POST', 
		    data: { 
		    	myData: 'This is my data.' 
		    },
		    beforeSend: function(){
		    	$('h1').html('Cargando...')
		    },
		    success: function(result){
		        let data = JSON.parse(result)
		        $('h1').html(data.descripcion)
		    },
		    complete: function(){
		    	console.log('completado')
		    },
		    error: function (jqXhr, textStatus, errorMessage) {
		        $('h1').html('Error' + errorMessage)
		    }
		});

	}



</script>