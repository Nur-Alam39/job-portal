@extends('layout.app')
@section('content')
<html>
	<head>
		<style type="text/css">
		</style>
	</head>
	<body>
		<div class="container-fluid p-5 " style="margin-top: 5%">
			<h4 class="pb-2 pl-2 mb-2" style="text-align: center;">All Categories List</h4>
			<button class='btn btn-primary btn-sm m-2'>
				<a class='m-2' href='/categories/create'> <b>+ New Category</b></a>
			</button>
			<table class="table text-center">
				<thead>
					<tr>
						<th>ID</th>
						<th class="text-left">Category Name</th>
						<th>No. of Current Jobs</th>
						<th>Option</th>
					</tr>
				</thead>
				<tbody>
					@foreach($categories as $category)
						<tr>
							<td>{{$category->category_id}}</td>
							<td class="text-left">{{$category->category_name}}</td>
							<td>{{$category->no_jobs}}</td>
							<td>
								<a href='/categories/edit/{{$category->category_id}}' style="color: blue; text-decoration: underline;">Edit</a> | 
								<a href='/categories/delete/{{$category->category_id}}' style="color: blue; text-decoration: underline;">Delete</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</body>
</html>
@endsection