@extends('app')

@section('styles')
<link href="{{ asset('/css/home.css') }}" rel="stylesheet"/>
@endsection

@section('content')
	<div class="floor-show">
		<div class="slogan">定制你的生活，从logo开始</div>
	</div>
	<div class="floor-steps">
		<div class="step-item">
			<div class="step-content">
				<p class="title">STEP1</p>
				<p class="subtitle">确定你的想法</p>
			</div>
		</div>
		<div class="step-item">
			<div class="step-content">
				<p class="title">STEP2</p>
				<p class="subtitle">确定你的图纸</p>
			</div>
		</div>
		<div class="step-item">
			<div class="step-content">
				<p class="title">STEP3</p>
				<p class="subtitle">我们帮您做好，送至您家</p>
			</div>
		</div>
	</div>
	<div class="floor-products-list">
		@forelse ($products as $product)
			<div class="product-item">
				<div class="tools-panel hide">
					<a class="tool tool-customize" href="{{ url('/customize') }}">
						<i></i>
						<span>个性化定制</span>
					</a>
					<a class="tool tool-add-to-cart" href="#">
						<i></i>
						<span>购买</span>
					</a>
				</div>
			</div>
		@empty
		@endforelse
	</div>
@endsection

@section('scripts')
<script src="{{ asset('/script/home.js') }}" type="text/javascript"></script>
@endsection
