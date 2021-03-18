<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
.btn{
padding: 5px;
}
</style>
<style>
body {
	font-family: 'Nunito', sans-serif;
}
</style>
</head>
<body>
	<div class="grid-container">
		<div class="row">
			<div class="item1">Invoice List</div>
			@foreach ($invoices as $invoice)
			<div class="items">
			<a class="btn btn-info btn-lg" href="{{URL::to('/view-invoice')}}/{{$invoice->invoice_no}}">{{$invoice->invoice_no}}</a>
			</div>
			@endforeach
		</div>
	</div>
</body>
</html>