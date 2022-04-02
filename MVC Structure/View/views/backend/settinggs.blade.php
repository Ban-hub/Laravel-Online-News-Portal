@extends('backend.master')
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12 title">
			<h1><i class="fa fa-bars"></i> Categories</h1>
		</div>
		
		<div class="col-sm-4 cat-form">
			@if(Session::has('message'))
			<div class="alert alert-success alert-dismmissable fade in">
				<a href="#" class="close" data-dismiss="alert">&times;</a>
				{{Session('message')}}
			</div>
			@endif
			<h3>Website Settings</h3>
            @if(count((array)$data)<1)
			<form method="post" action="{{url('add-settings')}}" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="tbl" value="{{encrypt('settings')}}">
				<div class="form-group">
					<label>Logo</label>
					<input type="file" name="image" class="form-control">
				</div>
				<div class="form-group">
					<label>About Us</label>
					<textarea name="about" class="form-control" rows="10"></textarea>
				</div>
                <div id="social-field-group">
                    <div class="form-group">
                        <label>Social</label>
                        <p class="text-muted">e.g. https://www.facebook.com</p>
                        <input type="url" name="social[]" class="form-control">
                    </div>
                </div>
                <div class="text-right form-group">
                    <span class="btn btn-warning" id="addSocialField"><i class="fa fa-plus"></i></span>
                </div>
				<div class="form-group">
					<div class="alert alert-danger alert-dismissable noshow" id="socialAlert">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>Sorry!</strong> Maximum socials reached.
                    </div>
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Add Settings</button>
				</div>
			</form>	
            @else
            <form method="post" action="{{url('update-settings')}}/{{$data->sid}}" enctype="multipart/form-data">
				{{ csrf_field() }}
				<input type="hidden" name="tbl" value="{{encrypt('settings')}}">
                <input type="hidden" name="sid" value="{{$data->sid}}">
                <div class="form-group">
					<label>Logo</label>
                    @if(!empty($data->image))
                    <img src="{{url('public/settings')}}/{{$data->image}}">
                    @else
					<input type="file" name="image" class="form-control">
                    @endif
				</div>
				<div class="form-group">
					<label>About Us</label>
					<textarea name="about" class="form-control" rows="10">{{$data->about}}</textarea>
				</div>
                <div id="social-field-group">
                    <div class="form-group">
                        <label>Social</label>
                        <p class="text-muted">e.g. https://www.facebook.com</p>
                        <input type="url" name="social[]" class="form-control">
                    </div>
                </div>
                <div class="text-right form-group">
                    <span class="btn btn-warning" id="addSocialField"><i class="fa fa-plus"></i></span>
                </div>
				<div class="form-group">
					<div class="alert alert-danger alert-dismissable noshow" id="socialAlert">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>Sorry!</strong> Maximum socials reached.
                    </div>
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Add Settings</button>
				</div>
			</form>	
            @endif
		</div>
	</div>
</div>
<style>
    .noshow{display: none;}
</style>
<script>
    var socialCounter = 1;
    $('#addSocialField').click(function(){
        socialCounter++;
        if(socialCounter>5){
            $('#socialAlert').removeClass('noshow');
            return;
        }
        newDiv = $(document.createElement('div')).attr("class","form-group");
        newDiv.after().html('<input type="url" name="social[]" class="form-control"></div>')
        newDiv.appendTo("#social-field-group");
    })
</script>
@stop