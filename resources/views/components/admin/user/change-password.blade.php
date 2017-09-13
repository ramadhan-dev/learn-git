<div class="x_panel">
	<div class="x_title">
		<h2>Perbaharui Password</h2>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
		<form role="form" class="form-horizontal" method="POST" action="{{route('change-password-user')}}">
			{{ csrf_field() }}
			<div class="box-body col-md-8 col-md-offset-2">
				{{-------- FORM OLD PASSWORD --------}}
				<div class="form-group has-feedback{{ $errors->has('oldpassword') ? ' has-error' : '' }}">
					<label for="exampleInputEmail1">Password Lama</label>
					<input
					type="password"
					name="oldpassword"
					class="form-control"
					id="exampleInputEmail1"
					placeholder="Enter Username"
					value="{{old('oldpassword')}}"
					autofocus
					>
					@if ($errors->has('oldpassword'))
					<span class="help-block">
						<strong>{{ $errors->first('oldpassword') }}</strong>
					</span>
					@endif
				</div>
				{{-------- END FORM OLD PASSWORD--------}}
				{{-------- FORM NEW PASSWORD --------}}
				<div class="form-group has-feedback{{ $errors->has('newpassword') ? ' has-error' : '' }}">
					<label for="exampleInputEmail1">New Password</label>
					<input
					type="password"
					name="newpassword"
					class="form-control"
					id="exampleInputEmail1"
					placeholder="Enter newpassword"
					value="{{old('newpassword')}}"
					>
					@if ($errors->has('newpassword'))
					<span class="help-block">
						<strong>{{ $errors->first('newpassword') }}</strong>
					</span>
					@endif
				</div>
				{{-------- END FORM NEW PASSWORD--------}}
				{{-------- NEW FORM PASSWORD AGAINT--------}}
				<div class="form-group has-feedback{{ $errors->has('confirm') ? ' has-error' : '' }}">
					<label for="exampleInputEmail1">Ulangi password</label>
					<input
					type="password"
					name="confirm"
					class="form-control"
					id="exampleInputEmail1"
					placeholder="Enter confirm"
					value="{{old('confirm')}}"
					>
					@if ($errors->has('confirm'))
					<span class="help-block">
						<strong>{{ $errors->first('confirm') }}</strong>
					</span>
					@endif
				</div>
				{{-------- END NEW FORM PASSWORD AGAINT--------}}
				<div class="form-group text-center">
					<a class="btn btn-warning btn-sm" href="{{route('dashboard')}}"> Cancle</a>
					<input type="submit" name="Submit" value="Submit" class="btn btn-primary btn-sm">
				</div>
			</div>
			<!-- /.box-body -->
			<div class="box-footer text-center">
			</div>
		</form>
	</div>
</div>

@section('style')
	<style>
		input[type="submit"], .form-group a{
			width: 150px;
			font-size:13px;
			font-weight: 700;
		}
	</style>
@endsection

@section('script')
@endsection