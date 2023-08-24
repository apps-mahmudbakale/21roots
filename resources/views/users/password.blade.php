@extends('layouts.admin')

@section('content')

	<main id="main" class="main">

	  <div class="pagetitle">
	    <h1>Change Password</h1>
	    <nav>
	      <ol class="breadcrumb">
	        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
	        <li class="breadcrumb-item"><a href="{{route('admin.profile')}}">Profile</a></li>
	        <li class="breadcrumb-item active">Change Password</li>
	      </ol>
	    </nav>
	  </div><!-- End Page Title -->

	  <section class="section">
	    <div class="row">
	      <div class="col-lg-12">
	      		<div class="card">
	      		  <div class="card-body">
	      		    <h5 class="card-title">Change Password</h5>
	      		    <!-- No Labels Form -->
	      		    <form  action="{{route('admin.change.password')}}" method="POST" class="row g-3">
	      		    	@csrf
	      		      <div class="col-md-12">
	      		        <input type="password" name="current" class="form-control" placeholder="Current Password">
	      		      </div>
	      		      <div class="col-md-12">
	      		        <input type="password" name="new" class="form-control" placeholder="New Password">
	      		      </div>
	      		      <div class="col-md-12">
	      		        <input type="password" name="cnew" class="form-control" placeholder="Confirm New Password">
	      		      </div>
	      		      <div>
	      		        <button type="submit" class="btn btn-primary">Submit</button>
	      		      </div>
	      		    </form><!-- End No Labels Form -->

	      		  </div>
	      		</div>
	      </div>
	    </div>
	  </section>

	</main><!-- End #main -->

 @endsection