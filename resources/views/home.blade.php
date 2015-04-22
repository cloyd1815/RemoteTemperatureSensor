@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					@foreach($sensors as $sensor)
					<ol>
					<li>{{ $sensor->name }}</li>
					<li>{{ $sensor->getCurrentTemp->temp }}</li>
					</ol>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
