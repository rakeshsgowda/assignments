<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>Invoice</title>
<style>
.item1 {
	grid-area: header;
	text-algin: center;
}

.grid-container {
	display: grid;
	grid-gap: 10px;
	padding: 10px;
}

.grid-container>div {
	text-align: center;
	padding: 20px 0;
	font-size: 30px;
}

.btn {
	padding: 5px;
}

.in-heading p {
	font-size: 12px;
}
</style>
<style>
body {
	font-family: 'Nunito', sans-serif;
}

.column {
	float: left;
	width: 33.33%;
	padding: 10px;
}
.item-col column {
	float: left;
	width: 50%;
	padding: 10px;
}
</style>
</head>
<body>
	<div class="row">
		<div class="grid-container mx-md-n5 in-heading">
			<div class="col px-md-5">
				<h1>AdventSys Technologies Private Limited</h1>
				<p>1st Floor, Prestige Samrah Plaza,St Marks Road, Shanthala
					Nagar,Ashok Nagar,Bengalore 560 001,India</p>
				<h2>INVOICE</h2>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<strong>Invoice No</strong>:{{$invoice->invoice_no}}<br> 
			<strong>Date:</strong><?php echo date("d-m-Y",strtotime($invoice->created_on));?><br>
			<strong>Invoice Status:</strong>{{$invoice->status}}
	</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="column">
				<h4>Customer Details</h4>
				<p>Name: {{$invoice->user->name}}</p>
				<p>Email: {{$invoice->user->email}}</p>
				<p>Phone: {{$invoice->user->phone}}</p>
			</div>
			<div class="column">
				<h4>Billing Address</h4>
				<p>{{$invoice->address->line1}}</p>
				<p>{{$invoice->address->city}}</p>
				<p>{{$invoice->address->district}}</p>
				<p>{{$invoice->address->state}}</p>
				<p>{{$invoice->address->country}}</p>
			</div>
			<div class="column item-col">
				<h4>Items List</h4>
				<div class="column"><p>Name</p>
				@foreach($invoice->items as $item)
				<div class="column"><p>{{$item->item_name}}</p></div>
				@endforeach
				</div>
				<div class="column"><p>Price</p>
				@foreach($invoice->items as $item)
				<div class="column"><p>{{$item->price}}</p></div>
				@endforeach
				</div>
			</div>
		</div>
	</div>
</body>
</html>