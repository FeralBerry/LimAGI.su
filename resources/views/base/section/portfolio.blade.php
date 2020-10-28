<div class="container-1">
    <div class="container header-big-text">
        <div class="twelve columns">
            <div class="title-page-text padding-top-bottom-title">
                <h2>Портфолио</h2>
                <p>последние разработки</p>
            </div>
        </div>
    </div>
    <div class="content">
        <!-- trianglify pattern container -->
        <div class="pattern pattern--hidden"></div>
        <!-- cards -->
        <div class="wrapper">
            @foreach($portfolio as $item)
            <a href="#">
                <div class="card">
                    <div class="card__container card__container--closed">
                        <div class="card__caption">
                            <h2 class="card__title">{{ $item->title }}</h2>
                            <p class="card__subtitle">{{ $item->sub_title }}</p>
                        </div>
                        <div class="portfolio_img"></div>
                        <img class="card__image " src="{{ asset('images/portfolio/') }}/{{ $item->img }}" alt=""/>
                        <i class="card__btn-close fa fa-times"></i>
                    </div>
                </div>
            </a>
            @endforeach
            {{ $portfolio->links() }}
        <!-- /cards -->
    </div><!-- /content -->



</div>
