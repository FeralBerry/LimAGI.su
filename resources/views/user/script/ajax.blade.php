<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function (){
        $('#offers').click(function () {
            var email = document.getElementById('input_offers').value;
            $.ajax({
                url: "{{ route('free-courses-offers') }}",
                type:     "POST",
                dataType: "html",
                data: {
                    'email' : email,
                },
                success:function(data) {
                    alert(data)
                }
            });
        });
    });
</script>
