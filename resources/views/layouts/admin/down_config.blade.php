<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="{{ asset('admin/js/jquery-3.5.1.js') }}"></script> 							        <!-- Load jQuery -->
<script type="text/javascript" src="{{ asset('admin/js/jqueryui-1.9.2.min.js') }}"></script> 							        <!-- Load jQueryUI -->
<script type="text/javascript" src="{{ asset('admin/js/bootstrap.min.js') }}"></script> 								        <!-- Load Bootstrap -->
<script type="text/javascript" src="{{ asset('admin/plugins/easypiechart/jquery.easypiechart.js') }}"></script> 		        <!-- EasyPieChart-->
<script type="text/javascript" src="{{ asset('admin/plugins/sparklines/jquery.sparklines.min.js') }}"></script>  		        <!-- Sparkline -->
<script type="text/javascript" src="{{ asset('admin/plugins/jstree/dist/jstree.min.js') }}"></script>  				            <!-- jsTree -->
<script type="text/javascript" src="{{ asset('admin/plugins/codeprettifier/prettify.js') }}"></script> 				            <!-- Code Prettifier  -->
<script type="text/javascript" src="{{ asset('admin/plugins/bootstrap-switch/bootstrap-switch.js') }}"></script> 		        <!-- Swith/Toggle Button -->
<script type="text/javascript" src="{{ asset('admin/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js') }}"></script>           <!-- Bootstrap Tabdrop -->
<script type="text/javascript" src="{{ asset('admin/plugins/iCheck/icheck.min.js') }}"></script>     					        <!-- iCheck -->
<script type="text/javascript" src="{{ asset('admin/js/enquire.min.js') }}"></script> 									        <!-- Enquire for Responsiveness -->
<script type="text/javascript" src="{{ asset('admin/plugins/bootbox/bootbox.js') }}"></script>							        <!-- Bootbox -->
<script type="text/javascript" src="{{ asset('admin/plugins/simpleWeather/jquery.simpleWeather.min.js') }}"></script>           <!-- Weather plugin-->
<script type="text/javascript" src="{{ asset('admin/plugins/nanoScroller/js/jquery.nanoscroller.min.js') }}"></script>          <!-- nano scroller -->
<script type="text/javascript" src="{{ asset('admin/plugins/jquery-mousewheel/jquery.mousewheel.min.js') }}"></script> 	        <!-- Mousewheel support needed for jScrollPane -->
<script type="text/javascript" src="{{ asset('admin/js/application.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/demo/demo.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/demo/demo-switcher.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/plugins/wijets/wijets.js') }}"></script>     							    <!-- Wijet -->
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    <?php $chat_id = explode(',',Auth::user()->chat_id) ?>
    @if(isset($chat_id))
    @foreach($chat_room as $room)
    @foreach($chat_id as $cid)
    @if($cid == $room->id)
    $(document).ready(function(){
        showChat{{ $room->chat_name }}();
        setInterval('showChat{{ $room->chat_name }}()',1000);
    });
    function showChat{{ $room->chat_name }}() {
        $.ajax({
            url: '{{ route("chat-index",$room->id) }}',
            cache: false,
            success: function(html){
                $("#chat_{{ $room->chat_name }}").html(html);
            }
        });
    }
    $('#chat_send_{{ $room->chat_name }}').click(function () {
        var name = $('#name_{{ $room->chat_name }}').val();
        var message = $('#message_{{ $room->chat_name }}').val();
        var room = $('#chat_room_{{ $room->chat_name }}').val();
        $.ajax({
            url: '{{ route("chat-index",$room->id ) }}',
            type: 'POST',
            cache: false,
            data: {'name' : name, 'id' : room, 'mess' : message,},
            dataType: 'html',
            success: function(data) {
                $('#chat_{{ $room->chat_name }}').html(data);
            }
        });
    });
    @endif
    @endforeach
    @endforeach
    @endif
</script>
<!-- End loading site level scripts -->
@if(route('admin-index') == url()->current())
    <script type="text/javascript" src="{{ asset('admin/plugins/fullcalendar/fullcalendar.min.js') }}"></script>   				<!-- FullCalendar -->
    <script type="text/javascript" src="{{ asset('admin/plugins/charts-chartistjs/chartist.min.js') }}"></script>               <!-- Chartist -->
    <script type="text/javascript" src="{{ asset('admin/plugins/charts-chartistjs/chartist-plugin-tooltip.js') }}"></script>    <!-- Chartist -->
    <script type="text/javascript" src="{{ asset('admin/plugins/form-daterangepicker/moment.min.js') }}"></script>              <!-- Moment.js for Date Range Picker -->
    <script type="text/javascript" src="{{ asset('admin/plugins/form-daterangepicker/daterangepicker.js') }}"></script>     	<!-- Date Range Picker -->
    <script type="text/javascript" src="{{ asset('admin/demo/demo-index.js') }}"></script> 										<!-- Initialize scripts for this page-->
@endif
@if(
    route('admin-blog') == url()->current() ||
    route('admin-blog-edit', $id ?? '') == url()->current() ||
    route('admin-blog-add') == url()->current() ||
    route('admin-free-courses') == url()->current() ||
    route('admin-free-courses-add') == url()->current() ||
    route('admin-free-courses-edit', $id ?? '') == url()->current() ||
    route('admin-pay-courses') == url()->current() ||
    route('admin-pay-courses-add') == url()->current() ||
    route('admin-pay-courses-edit', $id ?? '') == url()->current()
)
    <script type="text/javascript" src="{{ asset('admin/plugins/form-multiselect/js/jquery.multi-select.min.js') }}"></script>  			    <!-- Multiselect Plugin -->
    <script type="text/javascript" src="{{ asset('admin/plugins/quicksearch/jquery.quicksearch.min.js') }}"></script>           			    <!-- Quicksearch to go with Multisearch Plugin -->
    <script type="text/javascript" src="{{ asset('admin/plugins/form-typeahead/typeahead.bundle.min.js') }}"></script>                 	    <!-- Typeahead for Autocomplete -->
    <script type="text/javascript" src="{{ asset('admin/plugins/form-select2/select2.min.js') }}"></script>                     			    <!-- Advanced Select Boxes -->
    <script type="text/javascript" src="{{ asset('admin/plugins/form-autosize/jquery.autosize-min.js') }}"></script>            			    <!-- Autogrow Text Area -->
    <script type="text/javascript" src="{{ asset('admin/plugins/form-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script> 			    <!-- Color Picker -->
    <script type="text/javascript" src="{{ asset('admin/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js') }}"></script>        <!-- Touchspin -->
    <script type="text/javascript" src="{{ asset('admin/plugins/form-fseditor/jquery.fseditor-min.js') }}"></script>            			    <!-- Fullscreen Editor -->
    <script type="text/javascript" src="{{ asset('admin/plugins/form-jasnyupload/fileinput.min.js') }}"></script>               			    <!-- File Input -->
    <script type="text/javascript" src="{{ asset('admin/plugins/form-tokenfield/bootstrap-tokenfield.min.js') }}"></script>     			    <!-- Tokenfield -->
    <script type="text/javascript" src="{{ asset('admin/plugins/switchery/switchery.js') }}"></script>     								    <!-- Switchery -->
    <script type="text/javascript" src="{{ asset('admin/plugins/card/lib/js/card.js') }}"></script> 										    <!-- Card -->
    <script type="text/javascript" src="{{ asset('admin/plugins/bootstrap-switch/bootstrap-switch.js') }}"></script>     					    <!-- BS Switch -->
    <script type="text/javascript" src="{{ asset('admin/plugins/jquery-chained/jquery.chained.min.js') }}"></script> 						    <!-- Chained Select Boxes -->
    <script type="text/javascript" src="{{ asset('admin/plugins/jquery-mousewheel/jquery.mousewheel.min.js') }}"></script>                    <!-- MouseWheel Support -->
    <script type="text/javascript" src="{{ asset('admin/demo/demo-formcomponents.js') }}"></script>
    <script>
        //Fix since CKEditor can't seem to find it's own relative basepath
        CKEDITOR_BASEPATH  =  {{ asset('admin/plugins/form-ckeditor/') }};
    </script>
    <script type="text/javascript" src="{{ asset('admin/plugins/form-ckeditor/ckeditor.js') }}"></script>  	<!-- CKEditor -->
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
        var loadFileVideoImg = function(event) {
            var output = document.getElementById('videoImg');
            videoImg.src = URL.createObjectURL(event.target.files[0]);
            videoImg.onload = function() {
                URL.revokeObjectURL(videoImg.src) // free memory
            }
        };
        var loadVideoFile = function(event) {
            var output = document.getElementById('videoFile');
            videoFile.src = URL.createObjectURL(event.target.files[0]);
            videoFile.onload = function() {
                URL.revokeObjectURL(videoFile.src) // free memory
            }
        };
        var loadTitleImg = function(event) {
            var output = document.getElementById('title_img');
            title_img.src = URL.createObjectURL(event.target.files[0]);
            title_img.onload = function() {
                URL.revokeObjectURL(title_img.src) // free memory
            }
        };
    </script>
@endif
