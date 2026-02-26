<section class="profile-section">

    <div class="section-header">
        <h2>Profile Information</h2>
        <p>Update your account's profile information and email address.</p>
    </div>

    <form method="POST" action="{{ route('profile.update') }}" class="custom-form">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="name">Name</label>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name', $user->name) }}"
                required
            >
            @error('name')
                <small class="error-text">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email', $user->email) }}"
                required
            >
            @error('email')
                <small class="error-text">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-primary">
                Save Changes
            </button>

            @if (session('status') === 'profile-updated')
                <span class="success-text">Saved successfully!</span>
            @endif
        </div>

    </form>

</section>