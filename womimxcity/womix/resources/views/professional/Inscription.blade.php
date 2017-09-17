@extends('layout.master')

@section('content')
<div class="content-wrapper">

	<div class="container-fluid">
		<div class="col-md-4">

		</div>

		<div class="col-md-4">
			<form method='post' id="form" enctype="multipart/form-data" action='http://127.0.0.1:8000/admin/users/add-save'>
				{{csrf_field()}}

				<div class="form-group">
					<label for="InputName">Name: </label>
					<input name="name" type="text" class="form-control" id="InputName" placeholder="name">
				</div>
				<div class="form-group">
					<label for="InputEmail1">Email: </label>
					<input name="email" type="email" class="form-control" id="InputEmail1" placeholder="Email">
				</div>
				<div class="form-group">
					<label for="InputPassword1">Password: </label>
					<input name="password" type="password" class="form-control" id="InputPassword1" placeholder="Password">
				</div>
				<div class="form-group">
					<label for="InputFile">Photo: </label>
					<input name="photo" type="file" id="InputFile">
				</div>

				<div class="form-group">
					<!-- <input name="id_cms_privileges" type="hidden" id="" value="2"> -->
					<label for="Input">vous etes: </label>
					<select id="Input" class="form-control" name="id_cms_privileges">
						<option disabled selected> vous etes</option>
						<option value="2">navigateurs</option>
						<option value="3">commercants</option>
						<option value="4">centre de revalorisation</option>
						<option value="5">port/collectivité</option>
					</select>
				</div>
				<button type="submit" class="btn btn-default">Submit</button>

			</form>
		</div>


		<div class="col-md-4">

		</div>

	</div>
</div>
@endsection
