@extends('layouts.app')
@section('titlePage')
Curs
@stop
@section('scripts')
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
<script type="text/javascript">

	paypal.Button.render({
	    
	    env: 'sandbox', // Or 'production',

		client: {
	    	sandbox:    'ATC6aBYXBwRhZiV8hC-3BqA8Edh7P-PdmWHm6Ur3EuUhCJir-Y8Y3LMpc7h51W8CNQICMv3bu3nINKN2',
	        production: 'AcczJ1M6cxnFCUkZsiQbIl8Wh1-sOZI3ggI3qf3gZ3fx-tU1YbaZHPcnZi5kJu5tQW6RRZWfGFxGs_tB'
	    },

	    commit: true, // Show a 'Pay Now' button

	    style: {
	    	color: 'gold',
	        size: 'large'
	    },

	    payment: function(data, actions) {
            return actions.payment.create({
                payment: {
                    transactions: [
                        {
                            amount: { total: '{{round((($curs->Preu)*1.21), 2)}}', currency: 'EUR' }
                            // curs->Preu}}
                        }
                    ]
                }
            });
	    },

	   	onAuthorize: function(data, actions) {
            return actions.payment.execute().then(function(payment) {

                $("#result").html("El pagament s'ha efectuat amb èxit.").css("color", "green");

            });
	    },

	    onCancel: function(data, actions) {

	    	$("#result").html("Has cancel·lat el pagament.");

	    },

	    onError: function(err) {

	    	$("#result").html("Hi ha hagut un error durant la transacció.").css("color", "red");

	    }
	}, '#paypal-button');

</script>
@stop
@section('content')

<div class="container">
	@if (!is_null($curs))
		<h3 style="color:blue">Vista del curs dels usuaris NO-ALUMNES i NO-PROFESSORS</h3><br>
		<div style="display:flex; flex-direction:row; justify-content:space-around; align-items:center;">
			<div>
				<h3>Nom del curs: {{$curs->NomCurs}}</h3>
				<h3>Tipus: {{$curs->nomTipus}}</h3>
				<h3>Matèria: {{$curs->NomLlenguatge}}</h3>
				<h3>Nivell: {{$curs->Nivell}}</h3>
				<h3>Preu: {{$curs->Preu}}</h3>
				<h3>Idioma: {{$curs->Idioma}}</h3>
			</div>
			<div style="border:1px solid black; border-radius: 35px; padding:2% 1% 0% 2%; background-color:white;">
				<form class="form-inline" style="display:flex;flex-direction:column;">
					<div style="display:flex;flex-direction:row;">
						<div class="form-group mb-2">
							<input type="text" readonly class="form-control-plaintext" value="Concepte">
						</div>
						<div class="form-group mx-sm-3 mb-2">
							<input type="text" value="{{$curs->NomCurs}}" readonly class="form-control"/>
						</div>
					</div>
					<div style="display:flex;flex-direction:row;">
						<div class="form-group mb-2">
							<input type="text" readonly class="form-control-plaintext" value="Subtotal">
						</div>
						<div class="form-group mx-sm-3 mb-2">
							<input type="text" value="{{$curs->Preu}}€" readonly class="form-control"/>
						</div>
					</div>
					<div style="display:flex;flex-direction:row;">
						<div class="form-group mb-2">
							<input type="text" readonly class="form-control-plaintext" value="21% IVA">
						</div>
						<div class="form-group mx-sm-3 mb-2">
							<input type="text" value="{{round((($curs->Preu)*0.21), 2)}}€" readonly class="form-control"/>
						</div>
					</div>
					<div style="display:flex;flex-direction:row;">
						<div class="form-group mb-2">
							<input type="text" readonly class="form-control-plaintext" value="Total">
						</div>
						<div class="form-group mx-sm-3 mb-2">
							<input type="text" value="{{round((($curs->Preu)*1.21), 2)}}€" readonly class="form-control"/>
						</div>
					</div>
					<br>
				</form>
				<div style="display:flex; flex-direction:column; align-items:center; justify-content:center;">
					<div id="paypal-button"></div>
					<h4 id="result"></h4>
				</div>
			</div>
		</div>
	@endif

</div>

@stop
@section('footer')
	<h3>Pulmentum</h3>
@stop
