@extends('layout.admin')
@section('content')
	<div class="row-fluid">
 		<div class="span12">
			<form role="form" method="post" class="form-horizontal">
				<!-- Form Name -->
				<legend>Login</legend>
				<!-- Text input-->
				<div class="form-group">
					<label for="User">Username</label>
				    <input name="usr" type="user" class="form-control" id="User" placeholder="Username">
				</div>
				<div class="form-group">
					<label for="Password">Password</label>
				    <input name="pwd" type="password" class="form-control" id="Password" placeholder="Password">
				</div>
				<button type="submit" class="btn btn-default">Submit</button>							
			</form>
		</div>
	</div>
@stop