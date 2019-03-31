<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/">{{ "title" }}</a>
    <div class="collapse navbar-collapse">
        <!-- 右寄せ対策 -->
        <ul class="navbar-nav mr-auto">　
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                @guest
                <a class="nav-link" href="login">ログイン</a>
                @else
                <a class="nav-link" href="logout">ログアウト</a>
                @endguest

            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ Route('registerForm') }}">ユーザ登録</a>
            </li>
        </ul>
    </div>
</nav>

