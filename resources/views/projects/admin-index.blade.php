@extends('layouts.admin')

@section('content')

	<main id="main" class="main">

	  <div class="pagetitle">
	    <h1>Projects</h1>
	    <nav>
	      <ol class="breadcrumb">
	        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
	        <li class="breadcrumb-item active">Projects</li>
	      </ol>
	    </nav>
	  </div><!-- End Page Title -->

	  <section class="section">
	    <div class="row">
	      <div class="col-lg-12">

	        <div class="card">
	          <div class="card-body">
	            <h5 class="card-title">Projects</h5>
	            @can('create-projects')
	            <a href="{{route('admin.projects.create')}}" class="btn btn-primary pull-right"><i class="bi bi-plus"></i> Create Project</a>
	            @endcan
	            <!-- Table with stripped rows -->
	            <table class="table datatable">
	              <thead>
	                <tr>
	                  <th scope="col">#</th>
	                  <th scope="col">Name</th>
	                  <th scope="col">Action</th>
	                </tr>
	              </thead>
	              <tbody>
	              	@foreach($projects as $key => $project)
	                <tr>
	                  <th scope="row">{{$loop->iteration}}</th>
	                  <td>{{$project->name}}</td>
	                  <td>{{$project->email}}</td>
	                  <td>
	                  	@foreach($project->roles as $key => $role)
	                  	<span class="badge rounded-pill bg-success">{{ $role->name }}</span>
	                  	@endforeach
	                  </td>
	                  <td class="btn-group">
	                  	@can('read-projects')
	                  	<a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-success"><i class="bi bi-eye"></i></a>
	                  	@endcan
	                  	{{-- @can('update-projects') --}}
	                  	<a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
	                  {{-- 	@endcan --}}
	                  	@can('delete-projects')
	                  	<a href="" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('del#{{$project->id}}').submit();"><i class="bi bi-trash"></i></a>
	                  	<form id="del#{{$project->id}}" action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Are you sure');" style="display: inline-block;">
                          <input type="hidden" name="_method" value="DELETE">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      </form>
	                  	@endcan
	                  </td>
	                </tr>
	                @endforeach
	              </tbody>
	            </table>
	            <!-- End Table with stripped rows -->

	          </div>
	        </div>

	      </div>
	    </div>
	  </section>

	</main><!-- End #main -->

 @endsection