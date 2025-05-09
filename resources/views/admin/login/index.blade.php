    @extends('admin.layout.app')
    @section('login')
        <div class="layer"></div>
        <main class="page-center">
            <article class="sign-up">
                <h1 class="sign-up__title">Welcome back!</h1>
                <p class="sign-up__subtitle">Sign in to your account to continue</p>
                <form class="sign-up-form form" action="{{ route('actionlogin') }}" method="post">
                    @csrf
                    <label class="form-label-wrapper">
                        <p class="form-label">Email</p>
                        <input class="form-input" type="email" name="email" placeholder="Enter your email" required>
                    </label>
                    <label class="form-label-wrapper">
                        <p class="form-label">Password</p>
                        <input class="form-input" type="password" name="password" placeholder="Enter your password"
                            required>
                    </label>
                    <br>
                    <button class="form-btn primary-default-btn transparent-btn">Sign in</button>
                </form>
            </article>
        </main>
    @endsection
