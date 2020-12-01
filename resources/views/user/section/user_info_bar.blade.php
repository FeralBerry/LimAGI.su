<form action="{{ route('avatar-upload', Auth::user()->id) }}" enctype="multipart/form-data" method="post" name="addAvatar">
    @csrf
    <div class="user-card">
        <input type="file" name="ava" accept="image/*" onchange="form.submit()" class="col-sm-12" style="z-index: 100;min-height: 200px;top: 0px;left: 0;width: 100%;position: absolute;opacity: 0;" title="">
        <div class="avatar">
            @if(Auth::user()->avatar == '')
                <img src="https://placehold.it/300&text=Placeholder" class="img-responsive img-circle" alt="{{ Auth::user()->name }}">
            @else
                <img src="{{ asset('/base/img/avatar/') }}/{{ Auth::user()->avatar }}" class="img-responsive img-circle" alt="{{ Auth::user()->name }}">
            @endif
        </div>
        <div class="contact-name">{{ Auth::user()->name }}</div>
        @if(isset(Auth::user()->specialty) && (Auth::user()->specialty !== ''))
            <div class="contact-status">{{ Auth::user()->specialty }}</div>
        @endif
        <ul class="details">
            <li>{{ Auth::user()->email }}</li>
            @if(isset(Auth::user()->phone) && (Auth::user()->phone !== ''))
                <li>{{ Auth::user()->phone }}</li>
            @endif
            @if(isset(Auth::user()->adress) && (Auth::user()->adress !== ''))
                <li>{{ Auth::user()->adress }}</li>
            @endif
            @if(isset(Auth::user()->web_site) && (Auth::user()->web_site !== ''))
                <li><a href="{{ Auth::user()->web_site }}">{{ Auth::user()->web_site }}</a></li>
            @endif
        </ul>
    </div>
</form>
@if((isset(Auth::user()->facebook) && Auth::user()->facebook !== '')
                    || (isset(Auth::user()->twitter) && Auth::user()->twitter !== '')
                    || (isset(Auth::user()->github) && Auth::user()->github !== '')
                    || (isset(Auth::user()->instagram) && Auth::user()->instagram !== ''))
    <hr class="outsider">
    <div class="text-center">
        @if(isset(Auth::user()->facebook) && Auth::user()->facebook !== '')<a href="{{ Auth::user()->facebook }}" class="btn btn-social btn-facebook"><i class="fa fa-facebook"></i></a>@endif
        @if(isset(Auth::user()->twitter) && Auth::user()->twitter !== '')<a href="{{ Auth::user()->twitter }}" class="btn btn-social btn-twitter"><i class="fa fa-twitter"></i></a>@endif
        @if(isset(Auth::user()->github) && Auth::user()->github !== '')<a href="{{ Auth::user()->github }}" class="btn btn-social btn-github"><i class="fa fa-github"></i></a>@endif
        @if(isset(Auth::user()->instagram) && Auth::user()->instagram !== '')<a href="{{ Auth::user()->instagram }}" class="btn btn-social btn-instagram"><i class="fa fa-instagram"></i></a>@endif
    </div>
@endif
@if(isset(Auth::user()->motto) && Auth::user()->motto !== '')
    <hr class="outsider">
    <p class="m-n">{{ Auth::user()->motto }}</p>
@endif
