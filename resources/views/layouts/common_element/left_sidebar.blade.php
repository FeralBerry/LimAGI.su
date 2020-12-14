<div class="static-sidebar-wrapper sidebar-midnightblue">
    <div class="static-sidebar">
        <div class="sidebar">
            <div class="widget stay-on-collapse" id="widget-welcomebox">
                <div class="widget-body welcome-box tabular">
                    <div class="tabular-row">
                        <div class="tabular-cell welcome-avatar">
                            @if(Auth::user()->avatar == '')
                                <a href="{{ route('user-info') }}"><img src="https://placehold.it/300&text=Placeholder" class="avatar" alt="{{ Auth::user()->name }}"></a>
                            @else
                                <a href="{{ route('user-info') }}"><img src="{{ asset('/base/img/avatar/') }}/{{ Auth::user()->avatar }}" class="avatar" alt="{{ Auth::user()->name }}"></a>
                            @endif
                        </div>
                        <div class="tabular-cell welcome-options">
                            <span class="welcome-text">Привет,</span>
                            <a href="#" class="name">{{ Auth::user()->name }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget stay-on-collapse" id="widget-sidebar">
                <nav role="navigation" class="widget-body">
                    <ul class="acc-menu">
                        <li class="nav-separator">
                            <a href="{{ route('index') }}"><i class="fa fa-flag"></i><span>На сайт</span></a>
                        </li>
                        <li class="nav-separator">Базовые настройки</li>
                        @if(Auth::user()->role == 'admin')
                            <li><a href="{{ route('admin-index') }}"><i class="fa fa-home"></i><span>На главную</span></a></li>
                            <li><a href="{{ route('admin-users') }}"><i class="fa fa-user"></i><span>Пользователи</span></a></li>
                            <li class="nav-separator">Статьи</li>
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-columns"></i><span>Блог</span>
                                </a>
                                <ul class="acc-menu">
                                    <li><a href="{{ route('admin-blog') }}">Все статьи</a></li>
                                    <li><a href="{{ route('admin-blog-add') }}">Добавить статью блога</a></li>
                                    <li><a href="{{ route('admin-blogTags') }}">Просмотреть теги для блога</a></li>
                                    <li><a href="{{ route('admin-blogTags-add') }}">Добавить теги для блога</a></li>
                                    <li><a href="{{ route('admin-blogCat') }}">Просмотреть категории</a></li>
                                    <li><a href="{{ route('admin-blogCat-add') }}">Добавить категории</a></li>
                                    <li><a href="{{ route('admin-blog-comments') }}">Комментарии к статьям</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="fa fa-briefcase"></i><span>Портфолио</span>
                                </a>
                                <ul class="acc-menu">
                                    <li><a href="{{ route('admin-portfolio') }}">Всё портфолио</a></li>
                                    <li><a href="{{ route('admin-portfolio-add') }}">Добавить портфолио</a></li>
                                </ul>
                            </li>
                            <li class="nav-separator">Статичные страницы</li>
                            <li><a href="javascript:;"><i class="fa fa-files-o"></i><span>Обо мне</span></a>
                                <ul class="acc-menu">
                                    <li><a href="{{ route('admin-about') }}">Просмотреть</a></li>
                                </ul>
                            </li>
                            <li class="nav-separator">Курсы</li>
                            <li><a href="javascript:;"><i class="fa fa-pencil"></i><span>Бесплатные</span></a>
                                <ul class="acc-menu">
                                    <li><a href="{{ route('admin-free-courses') }}">Просмотреть курсы</a></li>
                                    <li><a href="{{ route('admin-free-courses-add') }}">Добавить курсы</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:;"><i class="fa fa-pencil-square-o"></i><span>Платные</span></a>
                                <ul class="acc-menu">
                                    <li><a href="{{ route('admin-pay-courses') }}">Просмотреть курсы</a></li>
                                    <li><a href="{{ route('admin-pay-courses-add') }}">Добавить курсы</a></li>
                                </ul>
                            </li>
                        @endif
                        @if(Auth::user()->role == 'user')
                            <li><a href="{{ route('user-index') }}"><i class="fa fa-home"></i><span>На главную</span></a></li>
                            <li><a href="{{ route('user-info') }}"><i class="fa fa-user"></i><span>Настройки пользователи</span></a></li>
                            @if(isset($free_courses_menu))
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-briefcase"></i><span>Бесплатное курсы</span>
                                    </a>
                                    <ul class="acc-menu">
                                        @foreach($free_courses_menu as $menu)
                                            <li><a href="{{ route($menu->free_link_name) }}">{{ strtoupper($menu->name) }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endif
                            @if(isset($pay_courses_menu))
                                @if(Auth::user()->specialty !== '')
                                <li>
                                    <a href="javascript:;">
                                        <i class="fa fa-cog fa-spin"></i><span>Платные курсы</span>
                                    </a>
                                    <ul class="acc-menu">
                                        <?php $specialty = explode(',', Auth::user()->specialty) ?>
                                        @foreach($pay_courses_menu as $menu)
                                            @foreach($specialty as $item => $value)
                                                @if($value == $menu->id)
                                                    <li><a href="{{ route($menu->pay_link_name) }}">{{ strtoupper($menu->name) }}</a></li>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </ul>
                                </li>
                                @endif
                            @endif
                        @endif
                        {{--<li class="nav-separator">Курсы</li>
                        <li><a href="#"><i class="fa fa-cog fa-spin"></i><span>Panels</span><span class="label label-alizarin">HOT!</span></a></li>
                        <li><a href="javascript:;"><i class="fa fa-bar-chart-o"></i><span>Analytics</span></a>
                            <ul class="acc-menu">
                                <li><a href="#">Flot</a></li>
                                <li><a href="#">Sparklines</a></li>
                                <li><a href="#">Morris.js</a></li>
                                <li><a href="#">Chart.js</a></li>
                                <li><a href="#">Easy Pie Chart</a></li>
                                <li><a href="#">nvd3 <span class="label label-info">New</span></a></li>
                                <li><a href="#">Gantt Chart</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:;"><i class="fa fa-map-marker"></i><span>Maps</span></a>
                            <ul class="acc-menu">
                                <li><a href="#">Google Maps</a></li>
                                <li><a href="#">Vector Maps</a></li>
                                <li><a href="#">Mapael</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:;"><i class="fa fa-files-o"></i><span>Pages</span></a>
                            <ul class="acc-menu">
                                <li><a href="#">Messages</a></li>
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Calendar</a></li>
                                <li><a href="#">Timeline</a></li>
                                <li><a href="#">Search Page</a></li>
                                <li><a href="#">Chat Room</a></li>
                                <li><a href="#">Invoice</a></li>
                                <li><a href="javascript:;">Responsive Email Template</a>
                                    <ul class="acc-menu">
                                        <li><a href="#">Basic</a></li>
                                        <li><a href="#">Hero</a></li>
                                        <li><a href="#">Sidebar</a></li>
                                        <li><a href="#">Sidebar Hero</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Coming Soon</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:;"><i class="fa fa-briefcase"></i><span>Extras</span></a>
                            <ul class="acc-menu">
                                <li><a href="#">Pricing Tables</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Registration</a></li>
                                <li><a href="#">Password Reset</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">404 Page</a></li>
                                <li><a href="#">500 Page</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:;"><i class="fa fa-sitemap"></i><span>Multiple Levels</span><span class="badge badge-dark">99</span></a>
                            <ul class="acc-menu">
                                <li><a href="javascript:;">Menu Item 1</a></li>
                                <li><a href="javascript:;">Menu Item 2</a>
                                    <ul class="acc-menu">
                                        <li><a href="javascript:;">Menu Item 2.1</a></li>
                                        <li><a href="javascript:;">Menu Item 2.2</a>
                                            <ul class="acc-menu">
                                                <li><a href="javascript:;">Menu Item 2.2.1</a></li>
                                                <li><a href="javascript:;">Menu Item 2.2.2</a>
                                                    <ul class="acc-menu">
                                                        <li><a href="javascript:;">And deeper yet!</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="disabled-link"><a href="#">Disabled Menu Item</a></li>
                            </ul>
                        </li>
                        <li class="nav-separator">Functional Apps</li>
                        <li><a href="#"><i class="fa fa-inbox"></i><span>Inbox</span><span class="badge badge-success">3</span></a></li>
                        <li><a href="#"><i class="fa fa-tasks"></i><span>Tasks</span><span class="badge badge-info">7</span></a></li>
                        <li><a href="#"><i class="fa fa-pencil-square-o"></i><span>Notes</span></a></li>
                        <li><a href="#"><i class="fa fa-check"></i><span>Todo</span><span class="badge badge-dark">10</span></a></li>
                        <li class="nav-separator">Templates</li>
                        <li><a href="javascript:;"><i class="fa fa-coffee"></i><span>Blog</span></a>
                            <ul class="acc-menu">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Page List</a></li>
                                <li><a href="#">Page Edit</a></li>
                                <li><a href="#">Comment Moderation</a></li>
                                <li><a href="javascript:;">Blog Front</a>
                                    <ul class="acc-menu">
                                        <li><a href="#">Blog Page</a></li>
                                        <li><a href="#">Blog Post</a></li>
                                        <li><a href="#">Blog Column</a></li>
                                        <li><a href="#">Porfolio</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:;"><i class="fa fa-shopping-cart"></i><span>eCommerce</span></a>
                            <ul class="acc-menu">
                                <li><a href="#">Dashboard</a></li>
                                <li><a href="#">Order List</a></li>
                                <li><a href="#">Order Details</a></li>
                                <li><a href="#">Product List</a></li>
                                <li><a href="#">Product Edit</a></li>
                                <li><a href="javascript:;">Store Front</a>
                                    <ul class="acc-menu">
                                        <li><a href="#">Product List</a></li>
                                        <li><a href="#">Product Column</a></li>
                                        <li><a href="#">Product Details</a></li>
                                        <li><a href="#">Shopping Cart</a></li>
                                        <li><a href="#">Checkout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>--}}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
