    <script src="{{URL::to('js/bootstrap.min.js')}}"></script>
    <!-- gauge js -->
    <script type="text/javascript" src="{{URL::to('js/gauge/gauge.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('js/gauge/gauge_demo.js')}}"></script>
    <!-- bootstrap progress js -->
    <script src="{{URL::to('js/progressbar/bootstrap-progressbar.min.js')}}"></script>
    <script src="{{URL::to('js/nicescroll/jquery.nicescroll.min.js')}}"></script>
    <!-- icheck -->
    <script src="{{URL::to('js/icheck/icheck.min.js')}}"></script>
    <script src="{{URL::to('js/custom.js')}}"></script>
    <script src="{{URL::to('js/pace/pace.min.js')}}"></script>
    <script src="{{URL::to('js/notify/pnotify.core.js')}}"></script>
    <script src="{{URL::to('js/notify/pnotify.buttons.js')}}"></script>
    <script src="{{URL::to('js/notify/pnotify.nonblock.js')}}"></script>
    <script>
    NProgress.done();
    </script>

@yield('script')

    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            }); 
        });
    </script>