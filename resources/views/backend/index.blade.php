@extends('backend.master')
@section('content')


<div class="container-fluid">
	<div class="row">
		<div class="col-sm-10 title">
			<h1><i class="fa fa-bars"></i> DASHBOARD</h1>
		</div>

		<div class="col-sm-12">
			<div class="content">
				<h2>Admin Dashboard for News Portal</h2>
				<p class="welcome-text">Quick access links:</p>
				<div class="row">
					<div class="col-sm-4">
						<h4>CSE470 Project</h4><br>
						<p>This is the backend of a prototype news portal project. It was built by:</p>
						<p>Avinandan Banerjee</p>
						<p>Student, CSE</p>
						<p>School of Data & Sciences</p>
						<p>BRAC University</p>
						<br><br>
						<p>This project was built for the course:</p>
						<p>CSE470: Software Engineering</p>
						<a href="https://www.bracu.ac.bd" target="_blank" rel="noopener noreferrer"><button type="button" class="btn btn-lg btn-primary">Github Link</button></a>
					</div>
					<div class="col-sm-4 quick-links">
						<h4>View Records</h4>
						<p><a href="{{url('all-posts')}}"><i class="fa fa-bookmark-o"></i> View All Posts</a></p>
						<p><a href="{{url('all-advs')}}"><i class="fa fa-image"></i> View All Advertisements</a></p>
						<p><a href="{{url('all-pages')}}"><i class="fa fa-file"></i> View All Pages</a></p>
						<p><a href="{{url('all-messages')}}"><i class="fa fa-envelope"></i> View All Messages</a></p>
					</div>
					<div class="col-sm-4 quick-links">
						<h4>Add Records</h4>
						<p><a href="{{url('add-post')}}"><i class="fa fa-bookmark-o"></i> Add Posts</a></p>
						<p><a href="{{url('add-adv')}}"><i class="fa fa-image"></i> Add Advertisement</a></p>
						<p><a href="{{url('add-page')}}"><i class="fa fa-file"></i> Add Pages</a></p>
						<p><a href="{{url('settings')}}"><i class="fa fa-gear"></i> Settings</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@stop