@include('base.section.what_can_i_do')
<!-- Introduction Section -->
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
<!-- Latest News -->
<div class="container-fluid latest-blog latest-blog-section no-padding">
    <div class="section-padding"></div>
    <div class="container">
        <div class="section-header">
            <h3>Интересные факты и последние изменения</h3>
            <span>Последние новости</span>
        </div>
        <div class="row">
            @foreach($blog as $b)
            <div class="col-md-6 col-sm-6 col-xs-12">
                <article class="type-post">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="entry-cover">
                            <a href="{{ route('blog-post', $b->id) }}">
                                @if(isset($b->img))
                                    @if(empty($b->img) !== true)
                                        <a href="{{ route('blog-post', $b->id) }}">
                                            <img src="{{ asset('base/img/blog/img/') }}/{{ $b->img }}" alt="{{ $b->title }}" width="300" height="250"/>
                                        </a>
                                    @endif
                                @endif
                                @if(isset($b->video_img))
                                    @if(empty($b->video_img) !== true)
                                        <figure class="vimeo">
                                            <a href="{{ $b->video }}">
                                                <img src="{{ asset('base/img/video-img/') }}/{{ $b->video_img }}" alt="{{ $b->title }}" width="300" height="250"/>
                                            </a>
                                        </figure>
                                    @endif
                                @endif
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="entry-meta">
                            <div class="post-date">
                                <a href="#" title="">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <span>
                                        @if(isset($b->updated_at))
                                            {{ date_format(date_create($b->updated_at), 'd') }}
                                            /
                                            {{ date_format(date_create($b->updated_at), 'M.Y') }}
                                        @else
                                            {{ date_format($b->created_at, 'd') }}
                                            /
                                            {{ date_format($b->created_at, 'M.Y') }}
                                        @endif
                                    </span>
                                </a>
                            </div>
                            <div class="post-admin">
                                <a href="#" title="{{ $b->author }}">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span>by</span> {{ $b->author }}
                                </a>
                            </div>
                            <div class="post-like">
                                <a href="#" title="Likes">
                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                    <span>03 Likes</span>
                                </a>
                            </div>
                        </div>
                        <div class="entry-title">
                            <a href="{{ route('blog-post', $b->id) }}" title="{{ $b->title }}">
                                <h3>{{ $b->title }}</h3>
                            </a>
                        </div>
                        <div class="entry-content">
                            <p>{!! $b->brief !!}</p>
                        </div>
                        <a href="{{ route('blog-post', $b->id) }}" class="learn-more" title="Читать подробнее">Читать подробнее</a>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
    </div>
    <div class="section-padding"></div>
</div><!-- Latest News /- -->
{{--
<!-- Schedule Section -->
<div class="container-fluid no-padding schedule-section">
    <div class="section-padding"></div>
    <div class="container">
        <div class="section-header">
            <h3>Conference schedule</h3>
            <span>Our Schedule table</span>
        </div>
        <div class="schedule-block">
            <img src="{{ asset('base/img/schedule.jpg') }}" alt="schedule"/>
            <div class="col-md-11">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation">
                        <a href="#schedule_1" aria-controls="schedule_1" role="tab" data-toggle="tab">
                            <h3>Monday</h3>
                            <span>07-Dec-2015</span>
                        </a>
                    </li>
                    <li role="presentation" class="active">
                        <a href="#schedule_2" aria-controls="schedule_2" role="tab" data-toggle="tab">
                            <h3>Tuesday</h3>
                            <span>08-Dec-2015</span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#schedule_3" aria-controls="schedule_3" role="tab" data-toggle="tab">
                            <h3>Wednesday</h3>
                            <span>09-Dec-2015</span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#schedule_4" aria-controls="schedule_4" role="tab" data-toggle="tab">
                            <h3>Thursday</h3>
                            <span>10-Dec-2015</span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#schedule_5" aria-controls="schedule_5" role="tab" data-toggle="tab">
                            <h3>Friday</h3>
                            <span>11-Dec-2015</span>
                        </a>
                    </li>
                    <li role="presentation">
                        <a href="#schedule_6" aria-controls="schedule_6" role="tab" data-toggle="tab">
                            <h3>Saturday</h3>
                            <span>12-Dec-2015</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade" id="schedule_1">
                        <div class="panel-group schedule-accordion" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="schedule_accrodion_heading_1">
                                    <h4 class="panel-title">
                                        <span>10:00 AM</span>
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#schedule_accrodion_content_1" aria-expanded="false" aria-controls="schedule_accrodion_content_1">
                                            How To Improve The WordPress Coding
                                        </a>
                                    </h4>
                                </div>
                                <div id="schedule_accrodion_content_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1">
                                    <div class="panel-body">
                                        <p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
                                        <div class="author-box">
                                            <img src="{{ asset('base/img/slider-thumb1.jpg') }}" alt="slider-thumb" width="74" height="74"/>
                                            <div class="author-content">
                                                <h3>Jim harryson<span>Public Speaker</span></h3>
                                                <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
                                                <a class="btn-event" href="#" title="About The Events">About the events</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default intro">
                                <div class="panel-heading" role="tab" id="schedule_accrodion_heading_2">
                                    <h4 class="panel-title">
                                        <span>11:30 AM</span>
                                        <a  role="button" data-toggle="collapse" data-parent="#accordion" href="#schedule_accrodion_content_2" aria-expanded="true" aria-controls="schedule_accrodion_content_2">
                                            What are the Needs For Great Startup
                                        </a>
                                    </h4>
                                </div>
                                <div id="schedule_accrodion_content_2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2">
                                    <div class="panel-body">
                                        <p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
                                        <div class="author-box">
                                            <img src="{{ asset('base/img/slider-thumb1.jpg') }}" alt="slider-thumb" width="74" height="74"/>
                                            <div class="author-content">
                                                <h3>Jim harryson<span>Public Speaker</span></h3>
                                                <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
                                                <a class="btn-event" href="#" title="About The Events">About the events</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="schedule_accrodion_heading_3">
                                    <h4 class="panel-title">
                                        <span>02:00 AM</span>
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#schedule_accrodion_content_3" aria-expanded="false" aria-controls="schedule_accrodion_content_3">
                                            Which Makes You Fit Every Morning
                                        </a>
                                    </h4>
                                </div>
                                <div id="schedule_accrodion_content_3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3">
                                    <div class="panel-body">
                                        <p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
                                        <div class="author-box">
                                            <img src="{{ asset('base/img/slider-thumb1.jpg') }}" alt="slider-thumb" width="74" height="74"/>
                                            <div class="author-content">
                                                <h3>Jim harryson<span>Public Speaker</span></h3>
                                                <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
                                                <a class="btn-event" href="#" title="About The Events">About the events</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade in active" id="schedule_2">
                        <div class="panel-group schedule-accordion" id="accordion2" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="schedule_accrodion_heading_21">
                                    <h4 class="panel-title">
                                        <span>10:00 AM</span>
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_21" aria-expanded="false" aria-controls="schedule_accrodion_content_21">
                                            How To Improve The WordPress Coding
                                        </a>
                                    </h4>
                                </div>
                                <div id="schedule_accrodion_content_21" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_21">
                                    <div class="panel-body">
                                        <p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
                                        <div class="author-box">
                                            <img src="{{ asset('base/img/slider-thumb1.jpg') }}" alt="slider-thumb" width="74" height="74"/>
                                            <div class="author-content">
                                                <h3>Jim harryson<span>Public Speaker</span></h3>
                                                <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
                                                <a class="btn-event" href="#" title="About The Events">About the events</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default intro">
                                <div class="panel-heading" role="tab" id="schedule_accrodion_heading_22">
                                    <h4 class="panel-title">
                                        <span>11:30 AM</span>
                                        <a  role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_22" aria-expanded="true" aria-controls="schedule_accrodion_content_22">
                                            What are the Needs For Great Startup
                                        </a>
                                    </h4>
                                </div>
                                <div id="schedule_accrodion_content_22" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_22">
                                    <div class="panel-body">
                                        <p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
                                        <div class="author-box">
                                            <img src="{{ asset('base/img/slider-thumb1.jpg') }}" alt="slider-thumb" width="74" height="74"/>
                                            <div class="author-content">
                                                <h3>Jim harryson<span>Public Speaker</span></h3>
                                                <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
                                                <a class="btn-event" href="#" title="About The Events">About the events</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="schedule_accrodion_heading_23">
                                    <h4 class="panel-title">
                                        <span>02:00 AM</span>
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#schedule_accrodion_content_23" aria-expanded="false" aria-controls="schedule_accrodion_content_23">
                                            Which Makes You Fit Every Morning
                                        </a>
                                    </h4>
                                </div>
                                <div id="schedule_accrodion_content_23" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_23">
                                    <div class="panel-body">
                                        <p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
                                        <div class="author-box">
                                            <img src="{{ asset('base/img/slider-thumb1.jpg') }}" alt="slider-thumb" width="74" height="74"/>
                                            <div class="author-content">
                                                <h3>Jim harryson<span>Public Speaker</span></h3>
                                                <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
                                                <a class="btn-event" href="#" title="About The Events">About the events</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="schedule_3">
                        <div class="panel-group schedule-accordion" id="accordion3" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="schedule_accrodion_heading_31">
                                    <h4 class="panel-title">
                                        <span>10:00 AM</span>
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_31" aria-expanded="false" aria-controls="schedule_accrodion_content_31">
                                            How To Improve The WordPress Coding
                                        </a>
                                    </h4>
                                </div>
                                <div id="schedule_accrodion_content_31" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_31">
                                    <div class="panel-body">
                                        <p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
                                        <div class="author-box">
                                            <img src="{{ asset('base/img/slider-thumb1.jpg') }}" alt="slider-thumb" width="74" height="74"/>
                                            <div class="author-content">
                                                <h3>Jim harryson<span>Public Speaker</span></h3>
                                                <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
                                                <a class="btn-event" href="#" title="About The Events">About the events</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default intro">
                                <div class="panel-heading" role="tab" id="schedule_accrodion_heading_32">
                                    <h4 class="panel-title">
                                        <span>11:30 AM</span>
                                        <a  role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_32" aria-expanded="true" aria-controls="schedule_accrodion_content_32">
                                            What are the Needs For Great Startup
                                        </a>
                                    </h4>
                                </div>
                                <div id="schedule_accrodion_content_32" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_32">
                                    <div class="panel-body">
                                        <p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
                                        <div class="author-box">
                                            <img src="{{ asset('base/img/slider-thumb1.jpg') }}" alt="slider-thumb" width="74" height="74"/>
                                            <div class="author-content">
                                                <h3>Jim harryson<span>Public Speaker</span></h3>
                                                <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
                                                <a class="btn-event" href="#" title="About The Events">About the events</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="schedule_accrodion_heading_33">
                                    <h4 class="panel-title">
                                        <span>02:00 AM</span>
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#schedule_accrodion_content_33" aria-expanded="false" aria-controls="schedule_accrodion_content_33">
                                            Which Makes You Fit Every Morning
                                        </a>
                                    </h4>
                                </div>
                                <div id="schedule_accrodion_content_33" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_33">
                                    <div class="panel-body">
                                        <p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
                                        <div class="author-box">
                                            <img src="{{ asset('base/img/slider-thumb1.jpg') }}" alt="slider-thumb" width="74" height="74"/>
                                            <div class="author-content">
                                                <h3>Jim harryson<span>Public Speaker</span></h3>
                                                <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
                                                <a class="btn-event" href="#" title="About The Events">About the events</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="schedule_4">
                        <div class="panel-group schedule-accordion" id="accordion4" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="schedule_accrodion_heading_41">
                                    <h4 class="panel-title">
                                        <span>10:00 AM</span>
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_41" aria-expanded="false" aria-controls="schedule_accrodion_content_41">
                                            How To Improve The WordPress Coding
                                        </a>
                                    </h4>
                                </div>
                                <div id="schedule_accrodion_content_41" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_41">
                                    <div class="panel-body">
                                        <p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
                                        <div class="author-box">
                                            <img src="{{ asset('base/img/slider-thumb1.jpg') }}" alt="slider-thumb" width="74" height="74"/>
                                            <div class="author-content">
                                                <h3>Jim harryson<span>Public Speaker</span></h3>
                                                <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
                                                <a class="btn-event" href="#" title="About The Events">About the events</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="schedule_accrodion_heading_42">
                                    <h4 class="panel-title">
                                        <span>11:30 AM</span>
                                        <a  role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_42" aria-expanded="true" aria-controls="schedule_accrodion_content_42">
                                            What are the Needs For Great Startup
                                        </a>
                                    </h4>
                                </div>
                                <div id="schedule_accrodion_content_42" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_42">
                                    <div class="panel-body">
                                        <p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
                                        <div class="author-box">
                                            <img src="{{ asset('base/img/slider-thumb1.jpg') }}" alt="slider-thumb" width="74" height="74"/>
                                            <div class="author-content">
                                                <h3>Jim harryson<span>Public Speaker</span></h3>
                                                <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
                                                <a class="btn-event" href="#" title="About The Events">About the events</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="schedule_accrodion_heading_43">
                                    <h4 class="panel-title">
                                        <span>02:00 AM</span>
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#schedule_accrodion_content_43" aria-expanded="false" aria-controls="schedule_accrodion_content_43">
                                            Which Makes You Fit Every Morning
                                        </a>
                                    </h4>
                                </div>
                                <div id="schedule_accrodion_content_43" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_43">
                                    <div class="panel-body">
                                        <p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
                                        <div class="author-box">
                                            <img src="{{ asset('base/img/slider-thumb1.jpg') }}" alt="slider-thumb" width="74" height="74"/>
                                            <div class="author-content">
                                                <h3>Jim harryson<span>Public Speaker</span></h3>
                                                <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
                                                <a class="btn-event" href="#" title="About The Events">About the events</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="schedule_5">
                        <div class="panel-group schedule-accordion" id="accordion5" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="schedule_accrodion_heading_51">
                                    <h4 class="panel-title">
                                        <span>10:00 AM</span>
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#schedule_accrodion_content_51" aria-expanded="false" aria-controls="schedule_accrodion_content_51">
                                            How To Improve The WordPress Coding
                                        </a>
                                    </h4>
                                </div>
                                <div id="schedule_accrodion_content_51" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_51">
                                    <div class="panel-body">
                                        <p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
                                        <div class="author-box">
                                            <img src="{{ asset('base/img/slider-thumb1.jpg') }}" alt="slider-thumb" width="74" height="74"/>
                                            <div class="author-content">
                                                <h3>Jim harryson<span>Public Speaker</span></h3>
                                                <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
                                                <a class="btn-event" href="#" title="About The Events">About the events</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default intro">
                                <div class="panel-heading" role="tab" id="schedule_accrodion_heading_52">
                                    <h4 class="panel-title">
                                        <span>11:30 AM</span>
                                        <a  role="button" data-toggle="collapse" data-parent="#accordion5" href="#schedule_accrodion_content_52" aria-expanded="true" aria-controls="schedule_accrodion_content_52">
                                            What are the Needs For Great Startup
                                        </a>
                                    </h4>
                                </div>
                                <div id="schedule_accrodion_content_52" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_52">
                                    <div class="panel-body">
                                        <p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
                                        <div class="author-box">
                                            <img src="{{ asset('base/img/slider-thumb1.jpg') }}" alt="slider-thumb" width="74" height="74"/>
                                            <div class="author-content">
                                                <h3>Jim harryson<span>Public Speaker</span></h3>
                                                <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
                                                <a class="btn-event" href="#" title="About The Events">About the events</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="schedule_accrodion_heading_53">
                                    <h4 class="panel-title">
                                        <span>02:00 AM</span>
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#schedule_accrodion_content_53" aria-expanded="false" aria-controls="schedule_accrodion_content_53">
                                            Which Makes You Fit Every Morning
                                        </a>
                                    </h4>
                                </div>
                                <div id="schedule_accrodion_content_53" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_53">
                                    <div class="panel-body">
                                        <p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
                                        <div class="author-box">
                                            <img src="{{ asset('base/img/slider-thumb1.jpg') }}" alt="slider-thumb" width="74" height="74"/>
                                            <div class="author-content">
                                                <h3>Jim harryson<span>Public Speaker</span></h3>
                                                <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
                                                <a class="btn-event" href="#" title="About The Events">About the events</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="schedule_6">
                        <div class="panel-group schedule-accordion" id="accordion6" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="schedule_accrodion_heading_61">
                                    <h4 class="panel-title">
                                        <span>10:00 AM</span>
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#schedule_accrodion_content_61" aria-expanded="false" aria-controls="schedule_accrodion_content_61">
                                            How To Improve The WordPress Coding
                                        </a>
                                    </h4>
                                </div>
                                <div id="schedule_accrodion_content_61" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_61">
                                    <div class="panel-body">
                                        <p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
                                        <div class="author-box">
                                            <img src="{{ asset('base/img/slider-thumb1.jpg') }}" alt="slider-thumb" width="74" height="74"/>
                                            <div class="author-content">
                                                <h3>Jim harryson<span>Public Speaker</span></h3>
                                                <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
                                                <a class="btn-event" href="#" title="About The Events">About the events</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default intro">
                                <div class="panel-heading" role="tab" id="schedule_accrodion_heading_62">
                                    <h4 class="panel-title">
                                        <span>11:30 AM</span>
                                        <a  role="button" data-toggle="collapse" data-parent="#accordion6" href="#schedule_accrodion_content_62" aria-expanded="true" aria-controls="schedule_accrodion_content_62">
                                            What are the Needs For Great Startup
                                        </a>
                                    </h4>
                                </div>
                                <div id="schedule_accrodion_content_62" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_62">
                                    <div class="panel-body">
                                        <p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
                                        <div class="author-box">
                                            <img src="{{ asset('base/img/slider-thumb1.jpg') }}" alt="slider-thumb" width="74" height="74"/>
                                            <div class="author-content">
                                                <h3>Jim harryson<span>Public Speaker</span></h3>
                                                <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
                                                <a class="btn-event" href="#" title="About The Events">About the events</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="schedule_accrodion_heading_63">
                                    <h4 class="panel-title">
                                        <span>02:00 AM</span>
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#schedule_accrodion_content_63" aria-expanded="false" aria-controls="schedule_accrodion_content_63">
                                            Which Makes You Fit Every Morning
                                        </a>
                                    </h4>
                                </div>
                                <div id="schedule_accrodion_content_63" class="panel-collapse collapse" role="tabpanel" aria-labelledby="schedule_accrodion_heading_63">
                                    <div class="panel-body">
                                        <p>Takin' a break from all your worries sure would help a lot. No phone no lights no motor car not a single luxury. Like Robinson Crusoe it's primitive as can be. Said Californ'y is the place you ought to be So they loaded up the truck and moved to Beverly.</p>
                                        <div class="author-box">
                                            <img src="{{ asset('base/img/slider-thumb1.jpg') }}" alt="slider-thumb" width="74" height="74"/>
                                            <div class="author-content">
                                                <h3>Jim harryson<span>Public Speaker</span></h3>
                                                <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
                                                <a class="btn-event" href="#" title="About The Events">About the events</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-padding"></div>
</div><!-- Schedule Section /- -->

<!-- Team Section -->
<div class="container-fluid no-padding team-section">
    <div class="section-header">
        <h3>meet our great speakers</h3>
        <span>Our Great Voices</span>
    </div>
    <ul id="team-carousel">
        <li data-thumb="{{ asset('base/img/team-thumb1.jpg') }}">
            <div class="col-md-6 no-padding larg-thumb">
                <img src="{{ asset('base/img/team1.jpg') }}" width="960" height="670" alt="team1"/>
            </div>
            <div class="container">
                <div class="col-md-6 no-padding">
                    <div class="team-content">
                        <h3>Harry richards</h3>
                        <a href="#" title="Public Speaker">Public Speaker</a>
                        <p>The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest. And if you threw a party - invited everyone you knew. You would see the biggest gift would be from me and the card.</p>
                        <ul>
                            <li class="fb"><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twt"><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="gp"><a title="GooglePlus" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="lnk"><a title="LinkedIn" href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <div class="team-event-carousel">
                            <a href=""><img src="{{ asset('base/img/team-evnt1.jpg') }}" alt="team-evnt1" width="121" height="89"/></a>
                            <a href=""><img src="{{ asset('base/img/team-evnt1.jpg') }}" alt="team-evnt1" width="121" height="89"/></a>
                            <a href=""><img src="{{ asset('base/img/team-evnt1.jpg') }}" alt="team-evnt1" width="121" height="89"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li data-thumb="{{ asset('base/img/team-thumb2.jpg') }}">
            <div class="col-md-6 col-xs-12 no-padding larg-thumb">
                <img src="{{ asset('base/img/team2.jpg') }}" width="960" height="670" alt="team2"/>
            </div>
            <div class="container">
                <div class="col-md-6 no-padding">
                    <div class="team-content">
                        <h3>Andrew richards 2</h3>
                        <a href="#" title="Public Speaker">Public Speaker</a>
                        <p>The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest. And if you threw a party - invited everyone you knew. You would see the biggest gift would be from me and the card.</p>
                        <ul>
                            <li class="fb"><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twt"><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="gp"><a title="GooglePlus" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="lnk"><a title="LinkedIn" href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <div class="team-event-carousel">
                            <a href=""><img src="{{ asset('base/img/team-evnt1.jpg') }}" alt="team-evnt1" width="121" height="89"/></a>
                            <a href=""><img src="{{ asset('base/img/team-evnt1.jpg') }}" alt="team-evnt1" width="121" height="89"/></a>
                            <a href=""><img src="{{ asset('base/img/team-evnt1.jpg') }}" alt="team-evnt1" width="121" height="89"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li data-thumb="{{ asset('base/img/team-thumb3.jpg') }}">
            <div class="col-md-6 no-padding larg-thumb">
                <img src="{{ asset('base/img/team3.jpg') }}" width="960" height="670" alt="team3"/>
            </div>
            <div class="container">
                <div class="col-md-6 no-padding">
                    <div class="team-content">
                        <h3>Daniel richards 3</h3>
                        <a href="#" title="Public Speaker">Public Speaker</a>
                        <p>The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest. And if you threw a party - invited everyone you knew. You would see the biggest gift would be from me and the card.</p>
                        <ul>
                            <li class="fb"><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twt"><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="gp"><a title="GooglePlus" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="lnk"><a title="LinkedIn" href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <div class="team-event-carousel">
                            <a href=""><img src="{{ asset('base/img/team-evnt1.jpg') }}" alt="team-evnt1" width="121" height="89"/></a>
                            <a href=""><img src="{{ asset('base/img/team-evnt1.jpg') }}" alt="team-evnt1" width="121" height="89"/></a>
                            <a href=""><img src="{{ asset('base/img/team-evnt1.jpg') }}" alt="team-evnt1" width="121" height="89"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li data-thumb="{{ asset('base/img/team-thumb4.jpg') }}">
            <div class="col-md-6 no-padding larg-thumb">
                <img src="{{ asset('base/img/team4.jpg') }}" width="960" height="670" alt="team4"/>
            </div>
            <div class="container">
                <div class="col-md-6 no-padding">
                    <div class="team-content">
                        <h3>Harry richards 4</h3>
                        <a href="#" title="Public Speaker">Public Speaker</a>
                        <p>The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest. And if you threw a party - invited everyone you knew. You would see the biggest gift would be from me and the card.</p>
                        <ul>
                            <li class="fb"><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twt"><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="gp"><a title="GooglePlus" href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="lnk"><a title="LinkedIn" href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <div class="team-event-carousel">
                            <a href=""><img src="{{ asset('base/img/team-evnt1.jpg') }}" alt="team-evnt1" width="121" height="89"/></a>
                            <a href=""><img src="{{ asset('base/img/team-evnt1.jpg') }}" alt="team-evnt1" width="121" height="89"/></a>
                            <a href=""><img src="{{ asset('base/img/team-evnt1.jpg') }}" alt="team-evnt1" width="121" height="89"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div><!-- Team Section /- -->

<!-- Testimonial Section -->
<div class="container-fluid testimonial-section no-padding">
    <div class="section-padding"></div>
    <div class="container">
        <div class="section-header">
            <h3>what our clients say about us</h3>
            <span>Feedback From Our Clients</span>
        </div>
        <div class="testimonial-carousel">
            <div class="testimonial-block row">
                <div class="col-md-5 col-sm-12 no-padding">
                    <div class="testimonial-carousel-left">
                        <div class="testimonial-box testimonial-left">
                            <div class="testimonial-content">
                                <p>Feels so right it cant be wrong. Rockin' and rollin' all week long. Then one day he was shootin' at some food..</p>
                                <span>hendry smith villa</span>
                            </div>
                            <img src="{{ asset('base/img/testimonial1.jpg') }}" alt="testimonial1" width="144" height="136"/>
                        </div>
                        <div class="testimonial-box testimonial-left">
                            <div class="testimonial-content">
                                <p>Feels so right it cant be wrong. Rockin' and rollin' all week long. Then one day he was shootin' at some food..</p>
                                <span>hendry smith villa</span>
                            </div>
                            <img src="{{ asset('base/img/testimonial1.jpg') }}" alt="testimonial1" width="144" height="136"/>
                        </div>
                        <div class="testimonial-box testimonial-left">
                            <div class="testimonial-content">
                                <p>Feels so right it cant be wrong. Rockin' and rollin' all week long. Then one day he was shootin' at some food..</p>
                                <span>hendry smith villa</span>
                            </div>
                            <img src="{{ asset('base/img/testimonial1.jpg') }}" alt="testimonial1" width="144" height="136"/>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="testimonial-blockquote-circle">
                        <span><i class="fa fa-quote-right" aria-hidden="true"></i></span>
                    </div>
                </div>
                <div class="col-md-5 col-sm-12 no-padding">
                    <div class="testimonial-carousel-right">
                        <div class="testimonial-box testimonial-right">
                            <div class="testimonial-content">
                                <p>These Happy Days are yours and mine Happy Days. So get a witch's shawl on a broomstick you can crawl on. </p>
                                <span>Mike Davidson</span>
                            </div>
                            <img src="{{ asset('base/img/testimonial2.jpg') }}" alt="testimonial1" width="144" height="136"/>
                        </div>
                        <div class="testimonial-box testimonial-right">
                            <div class="testimonial-content">
                                <p>These Happy Days are yours and mine Happy Days. So get a witch's shawl on a broomstick you can crawl on. </p>
                                <span>Mike Davidson</span>
                            </div>
                            <img src="{{ asset('base/img/testimonial2.jpg') }}" alt="testimonial1" width="144" height="136"/>
                        </div>
                        <div class="testimonial-box testimonial-right">
                            <div class="testimonial-content">
                                <p>These Happy Days are yours and mine Happy Days. So get a witch's shawl on a broomstick you can crawl on. </p>

                                <span>Mike Davidson</span>
                            </div>
                            <img src="{{ asset('base/img/testimonial2.jpg') }}" alt="testimonial1" width="144" height="136"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-padding"></div>
</div><!-- Testimonial Section /- -->

<!-- Hurryup Booking -->
<div class="container-fluid hurryup-booking-section no-padding">
    <div class="container">
        <div class="col-md-6  col-sm-6 no-padding">
            <div class="hurryup-block">
                <div id="timer-slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="timer-box">
                                <h3>Hurrp up!!</h3>
                                <p>Love exciting and new. Come aboard were expecting you. Love life's sweetest reward Let it flow it floats back to you. Said Californ'y is the place you ought</p>
                                <div data-date="2016/05/30" id="clock-1" class="clock"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="timer-box">
                                <h3>Hurrp up 2!!</h3>
                                <p>Love exciting and new. Come aboard were expecting you. Love life's sweetest reward Let it flow it floats back to you. Said Californ'y is the place you ought</p>
                                <div data-date="2016/06/01" id="clock-2" class="clock"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="timer-box">
                                <h3>Hurrp up 3!!</h3>
                                <p>Love exciting and new. Come aboard were expecting you. Love life's sweetest reward Let it flow it floats back to you. Said Californ'y is the place you ought</p>
                                <div data-date="2016/07/05" id="clock-3" class="clock"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#timer-slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                    </a>
                    <a class="right carousel-control" href="#timer-slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 no-padding">
            <div class="booking-form-block">
                <h3>Book your tickets now</h3>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Full Name"/>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Email Address"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="phone" placeholder="phone Number"/>
                    </div>
                    <button type="submit" class="btn">Register now</button>
                </form>
            </div>
        </div>
    </div>
    <div class="section-padding"></div>
</div><!-- Hurryup Booking /- -->
--}}


