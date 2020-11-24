<!-- Introduction Section -->
<div class="section-header">
    <img src="{{ asset('base/img/separator.png') }}" style="height: 30px; margin-bottom: 20px">
    <h3>Что я использую для разработки сайтов</h3>
    <span>И чему могу научить Вас</span>
</div>
<div class="container-fluid no-padding introduction-section">
    <div class="introduction-carousel">
        @foreach($about as $a)
            <div class="col-md-12 no-padding about{{$a->id}}">
                <div class="introduction-block">
                    <h3 class="block-title">{{ $a->title }}</h3>
                    <span class="icon"><i class="fa {{ $a->icon }}" aria-hidden="true"></i></span>
                    <p>{{ $a->description }}</p>
                    <?php $link = explode(',', $a->link); ?>
                    @foreach($link as $l)
                        <a href="{{ route('blog-post', $l) }}" title="Читать больше">Читать больше</a>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- Introduction Section /- -->
