@section('style')
<link href="{{URL::to('js/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{URL::to('js/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{URL::to('js/datatables/fixedHeader.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{URL::to('js/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{URL::to('js/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{URL::to('css/toastr.min.css')}}" rel="stylesheet" type="text/css" />

<style>
  table > .btn{
    width:50px;;
  }
</style>
@endsection


@section('script')
<script src="{{URL::to('js/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::to('js/datatables/dataTables.bootstrap.js')}}"></script>
<script src="{{URL::to('js/datatables/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{URL::to('js/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::to('js/datatables/responsive.bootstrap.min.js')}}"></script>
<script src="{{URL::to('js/validator/validator.js')}}"></script>

{{-- Data Table --}}
<script type="text/javascript">
  $(document).ready(function() {
      $('#datatable-keytable').DataTable({
        keys: true
    });
    $('#datatable-responsive').DataTable();
      $('#datatable-scroller').DataTable({
        ajax: "js/datatables/json/scroller-demo.json",
        deferRender: true,
        scrollY: 380,
        scrollCollapse: true,
        scroller: true
    });
    var table = $('#datatable-fixed-header').DataTable({
      "fixedHeader": true,
    });
  });
TableManageButtons.init();
</script>

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


{{--   {{-- AJAX --}}
  <script>
    $(document).ready(function() {
      $('#tambah').on('click', function(){
        $('#izin-modal').modal();
        $('#title').text('Form Entry Izin');
        var title = $('#title').text();
        if (title == 'Form Entry Izin') {
          $('#update').hide();
          $('#send').show();
          $("#formIzin")[0].reset();
        }
        
      });
      $('#send').on('click', function(){
        var izinModal = $('#izinModal').val();
        var kategoriIzin = $('#kategoriIzin').val();
        $.ajax({
          url: "{{route('izin.store')}}",
          data: { jenis:izinModal, kategori:kategoriIzin },
          type: "POST",
          success: function(response) {
            // toastr.success(response.message, {timeOut: 5000})
            $('#izin-modal').modal('hide');
            $("#formIzin")[0].reset();
            window.location.reload();
            new PNotify({
                title: 'Success',
                text: response.message,
                type: 'success'
            });
          },
          error: function (data) {
            var errors = $.parseJSON(data.responseText);
            $.each(errors, function (key, value) {
              new PNotify({
                title: 'Error',
                text: value,
                type: 'error'
              });
            });
          }
        });
      });

      $('.editIzin').on('click',function(){
        $('#izin-modal').modal();
        $('#title').text('Form Edit Izin');
        var title = $('#title').text();
        if (title == 'Form Edit Izin') {
          $('#update').show();
          $('#send').hide();
          $("#formIzin")[0].reset();
        }
        var id = $(this).val();
        $.ajax({
          url: "/admin/izin/" + id + "/edit",
          type: "GET",
          success: function(response) {
            $('#izinModal').val(response.jenis);
            $('#kategoriIzin').val(response.kategori_id);
          }
        });

        $('#update').on('click', function(){
          var izinModal = $('#izinModal').val();
          var kategoriIzin = $('#kategoriIzin').val();
          $.ajax({
          url: "/admin/izin/" + id,
          data: { jenis:izinModal, kategori:kategoriIzin },
          type: "PUT",
            success: function(response) {
              $('#izin-modal').modal('hide');
              $("#formIzin")[0].reset();
              window.location.reload();
              new PNotify({
                  title: 'Success',
                  text: response.message,
                  type: 'success'
              });
            },
            error: function (data) {
              var errors = $.parseJSON(data.responseText);
              $.each(errors, function (key, value) {
                new PNotify({
                  title: 'Error',
                  text: value,
                  type: 'error'
                });
              });
            }
          });
        })
      })

      $('.deleteIzin').on('click',function(){
        if (confirm('Ingin menghapus data ini')) {
          var id = $(this).val();
          $.ajax({
          url: "/admin/izin/" + id,
          type: "DELETE",
            success: function(response) {
              window.location.reload();
              new PNotify({
                  title: 'Success',
                  text: response.message,
                  type: 'success'
              });
            }
          });
        }
      })
    })
  </script> 
@endsection