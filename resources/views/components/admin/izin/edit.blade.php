<div class="x_panel">
	<div class="x_title">
		<h2>Form Jenis Izin</h2>
		<div class="clearfix"></div>
	</div>
	<div class="x_content">
		<form role="form" class="form-horizontal" method="POST" action="{{route('izin.update',$izin->id)}}">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			<div class="box-body col-md-8 col-md-offset-2">
				{{-------- FORM IZIN --------}}
				<div class="form-group has-feedback{{ $errors->has('jenis') ? ' has-error' : '' }}">
					<label for="exampleInputEmail1">Jenis Izin</label>
					<input
					type="text"
					name="jenis"
					class="form-control"
					id="exampleInputEmail1"
					placeholder="Enter jenis"
					value="{{$izin->jenis}}"
					autofocus
					>
					@if ($errors->has('jenis'))
					<span class="help-block">
						<strong>{{ $errors->first('jenis') }}</strong>
					</span>
					@endif
				</div>
				{{-------- END FORM IZIN--------}}
				<div class="form-group has-feedback{{ $errors->has('kategori') ? ' has-error' : '' }}">
					<label>Kategori</label>
					<select
						style="width: 100%;"
						name  ="kategori"
						class="select2_single form-control" tabindex="-1"
						id    ="exampleInputEmail1"
						>
						<option selected="selected"></option>
						@foreach( $kategori as $kat)
						<option value="{{$kat->id}}">{{$kat->nama}}</option>
						@endforeach
					</select>
					@if ($errors->has('kategori'))
					<span class="help-block">
						<strong>{{ $errors->first('kategori') }}</strong>
					</span>
					@endif
				</div>
				<div class="form-group text-center">
					<a class="btn btn-warning btn-sm" href="{{route('izin.index')}}"> Cancle</a>
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
  <link href="{{URL::to('css/select/select2.min.css')}}" rel="stylesheet">


@endsection

@section('script')
  <script src="{{URL::to('js/select/select2.full.js')}}"></script>

  <script src="{{URL::to('js/validator/validator.js')}}"></script>
  <script>
    // initialize the validator function
    validator.message['date'] = 'not a real date';

    // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    $('form')
      .on('blur', 'input[required], input.optional, select.required', validator.checkField)
      .on('change', 'select.required', validator.checkField)
      .on('keypress', 'input[required][pattern]', validator.keypress);

    $('.multi.required')
      .on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

    // bind the validation to the form submit event
    //$('#send').click('submit');//.prop('disabled', true);

    $('form').submit(function(e) {
      e.preventDefault();
      var submit = true;
      // evaluate the form using generic validaing
      if (!validator.checkAll($(this))) {
        submit = false;
      }

      if (submit)
        this.submit();
      return false;
    });

    /* FOR DEMO ONLY */
    $('#vfields').change(function() {
      $('form').toggleClass('mode2');
    }).prop('checked', false);

    $('#alerts').change(function() {
      validator.defaults.alerts = (this.checked) ? false : true;
      if (this.checked)
        $('form .alert').remove();
    }).prop('checked', false);
  </script>

   <script>
    $(document).ready(function() {
      $(".select2_single").select2({
        placeholder: "Pilih Jenis Izin",
        allowClear: true
      });
      $(".select2_group").select2({});
      $(".select2_multiple").select2({
        maximumSelectionLength: 20,
        placeholder: "Pilih Persyaratan Izin",
        allowClear: true
      });
    });
  </script>

</script>

@endsection