<div class="row">
    <div class="col-md-3">
        <div class="panel panel-profile">
            <div class="panel-body">
                @include('user.section.user_info_bar')
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                Настройки пользователя
            </div>
            <div class="panel-body">
                <form action="{{ route('user-info') }}" method="post" class="form-horizontal row-border">
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Имя</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" minlength="3" required>
                        </div>
                        <div class="mt-2 col-sm-12" style="height: 10px"></div>
                        <label class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" minlength="3" required autocomplete="email">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        Контактная информация
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Телефон</label>
                        <div class="col-sm-10">
                            <input type="text" name="phone" class="form-control" value="{{ Auth::user()->phone }}">
                        </div>
                        <div class="mt-2 col-sm-12" style="height: 10px"></div>
                        <label class="col-sm-2 control-label">Адресс</label>
                        <div class="col-sm-10">
                            <input type="email" name="address" class="form-control" value="{{ Auth::user()->address }}">
                        </div>
                        <div class="mt-2 col-sm-12" style="height: 10px"></div>
                        <label class="col-sm-2 control-label">Веб сайт</label>
                        <div class="col-sm-10">
                            <input type="email" name="web_site" class="form-control" value="{{ Auth::user()->web_site }}">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        Ссылки на соц сети
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Фейсбук</label>
                        <div class="col-sm-10">
                            <input type="text" name="facebook" class="form-control" value="{{ Auth::user()->facebook }}">
                        </div>
                        <div class="mt-2 col-sm-12" style="height: 10px"></div>
                        <label class="col-sm-2 control-label">Твитер</label>
                        <div class="col-sm-10">
                            <input type="email" name="twitter" class="form-control" value="{{ Auth::user()->twitter }}">
                        </div>
                        <div class="mt-2 col-sm-12" style="height: 10px"></div>
                        <label class="col-sm-2 control-label">Инстаграмм</label>
                        <div class="col-sm-10">
                            <input type="email" name="instagram" class="form-control" value="{{ Auth::user()->instagram }}">
                        </div>
                        <div class="mt-2 col-sm-12" style="height: 10px"></div>
                        <label class="col-sm-2 control-label">Гит хаб</label>
                        <div class="col-sm-10">
                            <input type="email" name="github" class="form-control" value="{{ Auth::user()->github }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Девиз пользователя</label>
                        <div class="col-sm-10">
                            <textarea name="motto" class="form-control autosize">{{ Auth::user()->motto }}</textarea>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-8 col-sm-offset-2">
                                <button class="btn-primary btn">Отправить</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
