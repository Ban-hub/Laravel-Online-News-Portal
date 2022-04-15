@extends('frontend.master')
@section('title')
<title>{{$data->title}} | NEWS TIME | LARAVEL NEWS PORTAL PROTOTYPE</title>
@stop
@section('content')
	<div class="wrapper">

		<div class="row" style="margin-top:30px;">
			<div class="col-md-8">
				<div class="col-md-12" style="padding:15px 15px 30px 0px;">				
					<div class="col-md-12">
						<img src="{{url('public/posts')}}/{{$data->image}}" width="100%" style="margin-bottom:15px;" />
						<h3>{{$data->title}}</h3>
						{!! $data->description !!}
					</div>

					<div class="col-md-12 also-like">
						<h3>You May Also Like</h3>
					</div>			
					@foreach($related->take(3) as $r)
					<div class="col-md-4">
						<a href="{{url('article')}}/{{$r->slug}}"><img src="{{url('public/posts')}}/{{$r->image}}" width="100%" style="margin-bottom:15px;" /></a>
						<h3><a href="{{url('article')}}/{{$r->slug}}">{{$r->title}}</a></h3>
						{!! substr($r->description,0,300) !!}
					</div>
					@endforeach
				</div>        
			</div>

<!-- right section -->
			<div class="col-md-4">
				<div class="col-md-12" style="padding:15px;">
					<h3 style="border-bottom:3px solid #2b99ca; padding-bottom:5px;"><span style="padding:6px 12px; background:#2b99ca;">LATEST NEWS</span></h3>
					@foreach($latest->take(10) as $l)
					<div class="col-md-12" style="border-bottom:1px solid #ccc; padding-bottom:10px; margin-bottom:10px;">
						<div class="col-md-4">
							<div class="row">
								<a href="{{url('article')}}/{{$l->slug}}"><img src="{{url('public/posts')}}/{{$l->image}}" width="100%" style="margin-left:-15px;" /></a>
							</div>
						</div>
						<div class="col-md-8">
							<div class="row" style="padding-left:10px;">
								<h4><a href="{{url('article')}}/{{$l->slug}}">{{$l->title}}</a></h4>
							</div>
						</div>
					</div>
					@endforeach
				</div> 
			</div>
		</div> 
	</div>

@stop