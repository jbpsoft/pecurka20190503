<!DOCTYPE html>
<html>
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	
	<script type="text/javascript">

      /*$(document).ready(function(){
        $(window).on('load', function(){
            $('#CreateForm').modal('show');
        }); */

      
        $(document).ready(function() {
	        $("#submit_button").click(function() {
				/*
				var keys = [], values = [];

				$('table tr input').each(function(i,e){
					//access the input's value like this:
					var $e = $(e);
					if($e.hasClass('key')){
					  keys.push($e.val());
					}else{
					values.push($e.val());
					}
				});  
				keys = keys.join(',');
				values = values.join(',');
				console.log(keys);
				console.log(values);*/																	

		        $.post('/privremena-tabela',
		        	{ 
		        	  proizvod_id: $(this).data('id'),
		        	  radnik: $("#selection1 option:selected").val(),
		        	  kupac: $("#selection2 option:selected").val(),
		        	  Kolicina: $(this).val(),
		        	  Cena: $(this).val(),
		        	  zarRad: $(this).val() 
		        	},
	           		function (response) {
		              	location.href="/";
		            });
		  	});

	        $("#selection1" && "#selection2").change(function(){
		        	$.post('/privremena-tabela',
			        	{ 
			        	  radnik: $("#selection1 option:selected").val(),
			        	  kupac: $("#selection2 option:selected").val()
			        	});
	        });


		  	$(".upisi").click(function(){

		  		$.post('/privremena-tabela2',
		        	{
		        		id: $(this).data('id')/*,
		        	  	Kolicina: $(this).val(),
		        	  	Cena: $(this).val(),
		        	  	zarRad: $(this).val() */
		        	});/*,
	           		function (response) {
		              	location.reload(true);
		            });*/
		  	});
	    });
		
		
	</script>
	<style type="text/css">
		select{
			width: 220px;
		}
		button{
			width: 120px;
			/*margin: 5px;*/
		}
	</style>
</head>
<body>
	@include('pages/home')
		<div id="main-zadRad">
			<div id="datum"> {{ AdminOptions::lang(121, Session::get('jezik.AdminOptions::server()')) }}: {{ date('d.m.Y.') }}</div>		

			<form  method="post">
				<div style="padding: 25px 0 0 530px; font-size: 18pt;">				
					<div class="form-group row">
						<select id="selection1" class="form-group row" autocomplete="off">
							<option value="0" selected>{{ AdminOptions::lang(115, Session::get('jezik.AdminOptions::server()')) }}:</option>
							@foreach(DB::table('radnici')->get() as $radnik)
							  	<option value="{{ $radnik->radnici_id }}">{{ $radnik->ime }} {{ $radnik->prezime }}</option>
							@endforeach
						</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;				
						<select id="selection2" class="form-group row" autocomplete="off">
							<option value="0" selected>{{ AdminOptions::lang(116, Session::get('jezik.AdminOptions::server()')) }}:</option>
							@foreach(DB::table('kupci')->get() as $kupac)
							  	<option value="{{ $kupac->id }}">{{ $kupac->naziv }}</option>
							@endforeach
						</select>
					</div>
				</div>
			</form>
			<div class="table-responsive table-hover">
				<table id="myTable" class="table table-sm" style="max-width: 79%; float: right;">
				  <thead">
				    <tr>
						<th>{{ 'Naziv proizvoda' }}</th>
						<th>{{ 'Kolicina' }}</th>
						<th>{{ 'Cena' }}</th>
						<th>{{ 'Zarada radnika' }}</th>
					</tr>
				  </thead>
				  <tbody >
				    @foreach(DB::table('grupa_proizvoda')->get() as $key1 => $grupa)
						<td><h5><b>{{ $grupa->naziv_grupe }}</b></h5></td>
						@foreach(DB::table('proizvodi')->get() as $key2 => $proizvod)
				    		@if($grupa->grupa_id == $proizvod->grupa_proizvoda)			    			
					    		<tr>
					    			<td><button data-id="{{ $proizvod->id }}" class="upisi btn btn-info" style="float: right; margin-right: 30px;">{{ $proizvod->naziv_proizvoda }}</button> </td>
					    			<!-- <td>
										<input style="text-align: center;" class="Kolicina" type="text" data-id="{{ $proizvod->id }}" name = 'Kolicina' size="7"  placeholder="Kg" autocomplete="off">			
					    			</td>
					    			<td>
										<input style="text-align: center;" class="Cena" type="text" name = 'Cena' size="7" placeholder="{{ $proizvod->cena_proizvoda }}" autocomplete="off">
									</td>
									<td>
										<input style="text-align: center;" class="zarRad" type="text" name = 'zarRad' size="7" placeholder="%" autocomplete="off">
									</td> -->
								</tr>										
							@endif
						@endforeach
					@endforeach
					
				  </tbody>
				</table>
			</div>
		</div><br>
		<!-- <div style="position: relative; float: right; padding-right: 76px;">
			<button id="submit_button" type="button" class="btn btn-success waves-effect waves-light">{{ AdminOptions::lang(47, Session::get('jezik.AdminOptions::server()')) }}</button>
	        <a href="/zaduzenje-radnika" type="button" class="btn btn-danger waves-effect waves-light">{{ AdminOptions::lang(21, Session::get('jezik.AdminOptions::server()')) }}</a>
        </div> -->
	
</body>
</html>
