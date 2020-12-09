<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function (){
        $('#modal_design').click(function () {
            var design = document.querySelector('input[name="design"]:checked').value;
            var logo_design = document.getElementById('logo_development_design').value;
            var fonts_design = document.getElementById('fonts_design').value;
            var colors_design = document.getElementById('colors_design').value;
            var device_design = document.getElementById('any_device_design').value;
            var name_design = document.getElementById('design_name').value;
            var email_design = document.getElementById('design_email').value;
            var tel_design = document.getElementById('design_tel').value;
            $.ajax({
                url: "{{ route('design-quiz') }}",
                type:     "POST",
                dataType: "html",
                data: {
                    'design' : design,
                    'logo_design' : logo_design,
                    'fonts_design' : fonts_design,
                    'colors_design' : colors_design,
                    'any_device_design' : device_design,
                    'name_design' : name_design,
                    'email_design' : email_design,
                    'tel_design' : tel_design,
                },
                success:
                    document.querySelector('.modals_design').classList.remove('active'),
                complete:
                    alert('Успешно отправлено скоро с вами свяжусь для уточнения деталей')
            });
        });
    });
    $(document).ready(function (){
        $('#modal_landing').click(function () {
            var landing = document.querySelector('input[name="landing"]:checked').value;
            var logo_landing = document.getElementById('logo_development_landing').value;
            var fonts_landing = document.getElementById('fonts_landing').value;
            var colors_landing = document.getElementById('colors_landing').value;
            var device_landing = document.getElementById('any_device_landing').value;
            var host_landing = document.getElementById('host_landing').value;
            var feedback_landing = document.getElementById('feedback_landing').value;
            var name_landing = document.getElementById('landing_name').value;
            var email_landing = document.getElementById('landing_email').value;
            var tel_landing = document.getElementById('landing_tel').value;
            $.ajax({
                url: "{{ route('landing-quiz') }}",
                type:     "POST",
                dataType: "html",
                data: {
                    'landing' : landing,
                    'logo_landing' : logo_landing,
                    'fonts_landing' : fonts_landing,
                    'colors_landing' : colors_landing,
                    'device_landing' : device_landing,
                    'host_landing' : host_landing,
                    'feedback_landing' : feedback_landing,
                    'name_landing' : name_landing,
                    'email_landing' : email_landing,
                    'tel_landing' : tel_landing,
                },
                success:
                    document.querySelector('.modals_landing').classList.remove('active'),
                complete:
                    alert('Успешно отправлено скоро с вами свяжусь для уточнения деталей')
            });
        });
    });
    $(document).ready(function (){
        $('#modal_corp').click(function () {
            var corp = document.querySelector('input[name="corp"]:checked').value;
            var logo_corp = document.getElementById('logo_development_corp').value;
            var colors_corp = document.getElementById('colors_corp').value;
            var device_corp = document.getElementById('any_device_corp').value;
            var host_corp = document.getElementById('host_corp').value;
            var chat_corp = document.getElementById('chat_corp').value;
            var name_corp = document.getElementById('corp_name').value;
            var email_corp = document.getElementById('corp_email').value;
            var tel_corp = document.getElementById('corp_tel').value;
            $.ajax({
                url: "{{ route('corp-quiz') }}",
                type:     "POST",
                dataType: "html",
                data: {
                    'corp' : corp,
                    'logo_corp' : logo_corp,
                    'colors_corp' : colors_corp,
                    'device_corp' : device_corp,
                    'host_corp' : host_corp,
                    'chat_corp' : chat_corp,
                    'name_corp' : name_corp,
                    'email_corp' : email_corp,
                    'tel_corp' : tel_corp,
                },
                success:
                    document.querySelector('.modals_corp').classList.remove('active'),
                complete:
                    alert('Успешно отправлено скоро с вами свяжусь для уточнения деталей')
            });
        });
    });
    $(document).ready(function (){
        $('#modal_card').click(function () {
            var card = document.querySelector('input[name="card"]:checked').value;
            var logo_card = document.getElementById('logo_development_card').value;
            var fonts_card = document.getElementById('fonts_card').value;
            var colors_card = document.getElementById('colors_card').value;
            var device_card = document.getElementById('any_device_card').value;
            var host_card = document.getElementById('host_card').value;
            var name_card = document.getElementById('card_name').value;
            var email_card = document.getElementById('card_email').value;
            var tel_card = document.getElementById('card_tel').value;
            $.ajax({
                url: "{{ route('card-quiz') }}",
                type:     "POST",
                dataType: "html",
                data: {
                    'card' : card,
                    'logo_card' : logo_card,
                    'fonts_card' : fonts_card,
                    'colors_card' : colors_card,
                    'device_card' : device_card,
                    'host_card' : host_card,
                    'name_card' : name_card,
                    'email_card' : email_card,
                    'tel_card' : tel_card,
                },
                success:
                    document.querySelector('.modals_card').classList.remove('active'),
                complete:
                    alert('Успешно отправлено скоро с вами свяжусь для уточнения деталей')
            });
        });
    });
    $(document).ready(function (){
        $('#modal_magazine').click(function () {
            var magazine = document.querySelector('input[name="magazine"]:checked').value;
            var admin_panel_magazine = document.getElementById('admin_panel_magazine').value;
            var online_pay_magazine = document.getElementById('online_pay_magazine').value;
            var filters_magazine = document.getElementById('filters_magazine').value;
            var feedback_magazine = document.getElementById('feedback_magazine').value;
            var host_magazine = document.getElementById('host_magazine').value;
            var magazine_name = document.getElementById('magazine_name').value;
            var magazine_email = document.getElementById('magazine_email').value;
            var magazine_tel = document.getElementById('magazine_tel').value;
            $.ajax({
                url: "{{ route('magazine-quiz') }}",
                type:     "POST",
                dataType: "html",
                data: {
                    'magazine' : magazine,
                    'admin_panel_magazine' : admin_panel_magazine,
                    'online_pay_magazine' : online_pay_magazine,
                    'filters_magazine' : filters_magazine,
                    'feedback_magazine' : feedback_magazine,
                    'host_magazine' : host_magazine,
                    'magazine_name' : magazine_name,
                    'magazine_email' : magazine_email,
                    'magazine_tel' : magazine_tel,
                },
                success:
                    document.querySelector('.modals_magazine').classList.remove('active'),
                complete:
                    alert('Успешно отправлено скоро с вами свяжусь для уточнения деталей')
            });
        });
    });
    $(document).ready(function (){
        $('#modal_seo').click(function () {
            var semantic_kernel_seo = document.getElementById('semantic_kernel_seo').value;
            var direct_seo = document.getElementById('direct_seo').value;
            var image_seo = document.getElementById('image_seo').value;
            var tags_seo = document.getElementById('tags_seo').value;
            var seo_name = document.getElementById('seo_name').value;
            var seo_email = document.getElementById('seo_email').value;
            var seo_tel = document.getElementById('seo_tel').value;
            $.ajax({
                url: "{{ route('seo-quiz') }}",
                type:     "POST",
                dataType: "html",
                data: {
                    'semantic_kernel_seo' : semantic_kernel_seo,
                    'direct_seo' : direct_seo,
                    'image_seo' : image_seo,
                    'tags_seo' : tags_seo,
                    'seo_name' : seo_name,
                    'seo_email' : seo_email,
                    'seo_tel' : seo_tel,
                },
                success:
                    document.querySelector('.modals_seo').classList.remove('active'),
                complete:
                    alert('Успешно отправлено скоро с вами свяжусь для уточнения деталей')
            });
        });
    });
    $(document).ready(function() {
        $(".blog-likes").bind("click", function() {
            var el = $(this);
            var blog_id = el.data('id');
            $.ajax({
                type: "POST",
                url: "{{ route('blog-likes') }}",
                dataType: "html",
                data: {
                    'blog_id' : blog_id
                },
                success:function(data){
                    var json = JSON.parse(data);
                    var span_text = document.getElementById(''+json.id+'').textContent;
                    if(json.msg == "Спасибо за ваш голос"){
                        document.getElementById(''+json.id+'').innerHTML = '<i class="fa fa-heart-o" aria-hidden="true"></i>'+(Number(span_text) + 1);
                        document.getElementById(''+json.id+'').classList.add('likes');
                    }
                    if(json.msg == "Спасибо ваш голос учтен"){
                        document.getElementById(''+json.id+'').innerHTML = '<i class="fa fa-heart-o" aria-hidden="true"></i>'+ (Number(span_text) - 1);
                        document.getElementById(''+json.id+'').classList.remove('likes');
                    }
                    alert(json.msg);
                }
            });
        });
    });
</script>
