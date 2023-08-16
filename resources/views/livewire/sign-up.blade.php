<div>
    <div class="form-container sign-up-container">
        <form action="" wire:submit="createUser">
            <h1>Create Account</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your email for registration</span>
            <div class="input-group">
                <input wire:model.live.debounce.500ms="name" type="text" placeholder="Name" />
                @error('name')
                    <span class="error-validation"> {{ $message }}</span>
                @enderror
            </div>
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



            <button>Sign Up</button>
        </form>
    </div>
</div>
