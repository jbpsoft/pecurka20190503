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


		  	$("#upisi").click(function(){

				var x=sessionStorage.getItem("radnikId");
		        var y=sessionStorage.getItem("kupacId");

		  		$.post('/privremena-tabela2',
		        	{
		        	  	kolicina: $(this).val(),
		        	  	Id: $(this).val(),
		        	  	zarRad: $(this).val() 
		        	});
		  	});

		  	$('#upisKolicineModal').on('show.bs.modal', function(e) {
			    var Id = $(e.relatedTarget).data('id');
			    $(e.currentTarget).find('input[name="Id"]').val(Id);
			    var Product = $(e.relatedTarget).data('product');
			    $(e.currentTarget).find('input[name="Product"]').val(Product);

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
	@if (Session::has('success'))
		<center><div class="alert alert-success" style="width: 250px;">{{ Session::get('success') }}</div></center>
	@endif
	<div id="datum"> 
		{{ AdminOptions::lang(121, Session::get('jezik.AdminOptions::server()')) }}: {{ date('d.m.Y.') }}
	</div>	
	@if(empty($data))
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
	@else
		<div>
			Radnik:{{ $data3->ime }} {{ $data3->prezime }} Kupac:{{ $data5->naziv }}
		</div>
	@endif
	<div class="table-responsive table-hover">
		<table id="myTable" class="table table-sm" style="max-width: 79%; float: right; table-layout: fixed;">
		  	<thead>
			    <tr>
					<th style="border-right: 2px solid black;">{{ 'Naziv proizvoda' }}</th>
					<th>{{ 'Naziv proizvoda' }}</th>
					<th>{{ 'Kolicina' }}</th>
					<th>{{ 'Cena' }}</th>
					<th>{{ 'Zarada radnika' }}</th>
				</tr>
		  	</thead>
		  	<tbody >
			    @foreach(DB::table('grupa_proizvoda')->get() as $key1 => $grupa)
					<td style="border-right: 2px solid black;"><h5><b>{{ $grupa->naziv_grupe }}</b></h5></td>
					@foreach(DB::table('proizvodi')->get() as $key2 => $proizvod)
			    		@if($grupa->grupa_id == $proizvod->grupa_proizvoda)			    			
				    		<tr>
				    			<td style="border-right: 2px solid black;">
				    				<button data-id="{{ $proizvod->cena_proizvoda }}" data-product="{{ $proizvod->id }}" data-target="#upisKolicineModal" data-toggle="modal" class="btn btn-danger" style="float: right; margin-right: 30px;">{{ $proizvod->naziv_proizvoda }}</button>
				    			</td>
				    			@if(!empty($data1))
				    			<?php 
				    			$povratni_podaci=DB::table('privremena_tabela')->where('proizvod_id',$data->proizvod_id)->first();?>
					    			<td>
										{{ DB::table('proizvodi')->where('proizvodi_id', $povratni_podaci->proizvod_id)->first()->naziv_proizvoda }}
						            </td>
						            <td>
						                {{ $povratni_podaci->kolicina }}
						            </td>
						            <td>
						                {{ $povratni_podaci->cena }}
						            </td>
						            <td>
						                {{ $povratni_podaci->zarRad }}
						            </td>				            
								@endif
							</tr>																
						@endif
					@endforeach
				@endforeach			
			</tbody>				
		</table>
	</div>
</div>
<div id="upisKolicineModal" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="myModalLabel" aria-hidden="true">
@include('modals/live/upisKolicineModal')
</div> 
</body>
</html>
