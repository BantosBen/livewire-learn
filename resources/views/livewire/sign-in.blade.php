<div>
    <div class="form-container sign-in-container">
        <form action="" wire:submit="login">
            <h1>Sign in</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your account</span>
            <div class="input-group">
                <input wire:model.live.debounce.500ms="email" type="email" placeholder="Email" />
                @error('email')
                    <span class="error-validation"> {{ $message }}</span>
                @enderror
            </div>
            <div class="input-group">
                <input wire:model.live.debounce.500ms="password" type="password" placeholder="Password" />
                @error('password')
                    <span class="error-validation"> {{ $message }}</span>
                @enderror
            </div>

            @if (session('success'))
                <!-- Success Message -->
                <span class="success-message">
                    {{ session('success') }}
                </span>
            @endif

            @if (session('error'))
                <!-- Error Message -->
                <span class="error-message">
                    {{ session('error') }}
                </span>
            @endif
            <a href="#">Forgot your password?</a>
            <button>Sign In</button>
        </form>
    </div>
</div>
