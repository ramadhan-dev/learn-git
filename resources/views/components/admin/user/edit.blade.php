<div class="x_panel">
      <div class="x_title">
        <h2>Data User</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
	<form role="form" class="form-horizontal" method="POST" action="{{route('user.update',$data->id)}}">
	{{ csrf_field() }}
	{{ method_field('PUT') }}
		<div class="box-body col-md-8 col-md-offset-2">

			{{-------- FORM USERNAME --------}}
			<div class="form-group has-feedback{{ $errors->has('username') ? ' has-error' : '' }}">
				<label for="exampleInputEmail1">Username</label>
				<input 
					type="text" 
					name="username" 
					class="form-control" 
					id="exampleInputEmail1" 
					placeholder="Enter Username"
					value="{{$data->username}}"
					autofocus 
				>
						@if ($errors->has('username'))
						<span class="help-block">
							<strong>{{ $errors->first('username') }}</strong>
						</span>
						@endif
			</div>
			{{-------- END FORM USERNAME--------}}

			{{-------- FORM NAME --------}}
			<div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
				<label for="exampleInputEmail1">Name</label>
				<input 
					type="text" 
					name="name" 
					class="form-control" 
					id="exampleInputEmail1" 
					placeholder="Enter name"
					value="{{$data->name}}"
				>
						@if ($errors->has('name'))
						<span class="help-block">
							<strong>{{ $errors->first('name') }}</strong>
						</span>
						@endif
			</div>
			{{-------- END FORM NAME--------}}

			{{-------- FORM EMAIL--------}}
			<div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
				<label for="exampleInputEmail1">Email address</label>
				<input 
					type="email" 
					name="email" 
					class="form-control" 
					id="exampleInputEmail1" 
					placeholder="Enter email" 
					value="{{$data->email}}"
				>
						@if ($errors->has('email'))
						<span class="help-block">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
						@endif
			</div>
			{{-------- END FORM EMAIL--------}}

			{{-------- FORM ROLE--------}}
			<div class="form-group has-feedback{{ $errors->has('role') ? ' has-error' : '' }}">
                  <label>Role Login</label>
                  <select class="form-control" name="role" value="{{old('role')}}">
                  <option value="" selected>--pilih role login--</option>
                    <option value="1">Administrator</option>
                    <option value="2">Pimpinan</option>
                    <option value="3">Front</option>
                    <option value="4">Back</option>
                  </select>
						@if ($errors->has('role'))
						<span class="help-block">
							<strong>{{ $errors->first('role') }}</strong>
						</span>
						@endif
						</div>
			{{-------- END FORM ROLE--------}}

			<div class="form-group text-center">
			<a class="btn btn-flat bg-orange btn-sm" href="{{route('user.index')}}"> Cancle</a>
			<input type="submit" name="Submit" value="Submit" class="btn btn-flat bg-navy btn-sm">
			</div>

		</div>
		<!-- /.box-body -->
		<div class="box-footer text-center">
		</div>
	</form>
</div>
</div>
