<nav>
	@if (Route::has('login'))
		<div class="nav-style">
		@auth
			<a href="{{ url('/') }}" class="btn btn--left">HOME</a>
		@else
			<a href="{{ route('login') }}" class="btn btn--green">ログイン</a>
			@if (Route::has('register'))
				<a href="{{ route('register') }}" class="btn btn--green">新規登録</a>
			@endif
		@endif
		</div>
	@endif
</nav>