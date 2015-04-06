@extends('app')

@section('styles')
<link href="{{ asset('/css/customize.css') }}" rel="stylesheet"/>
@endsection

@section('content')
<div class="cus-detail">
	<img src="http://www.piclc.com/wp-content/uploads/2013/06/J718_Main.jpg"/>
	<div class="cus-panel">
		<ul class="panel-dimesions">
			@foreach ($dimensions as $dimension)
				<li>{{$dimension}}</li>
			@endforeach
		</ul>
		<div class="panel-details">
		</div>
	</div>
</div>

<div class="cus-content">
	这里是具体的介绍
</div>
@endsection