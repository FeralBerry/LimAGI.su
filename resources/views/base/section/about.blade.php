<!-- PageBanner -->
<div class="container-fluid page-banner about no-padding">
    <div class="section-padding"></div>
    <div class="container">
        <div class="banner-content-block">
            <div class="banner-content">
                <h3>Кто я?</h3>
                <ol class="breadcrumb">
                    <li><a href="{{ route('index') }}">На главную</a></li>
                    <li class="active">Обо мне</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="section-padding"></div>
</div><!-- PageBanner /- -->
@include('base.section.what_can_i_do')
@include('base.section.use_language')
