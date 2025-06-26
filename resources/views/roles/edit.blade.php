<a href="{{ route('roles.index') }}" class="btn-secondary">← Back to Roles</a>

<form action="{{ route('roles.update', $role->id) }}" method="POST" class="edit-role-form">
    @csrf
    @method('PUT')

    <div class="form-header">
        <h2>Edit Role</h2>
        <p class="subtitle">Make updates to the role details below.</p>
    </div>

    <div class="form-group">
        <label for="role_name">Role Name</label>
        <input type="text" id="role_name" name="role_name" value="{{ $role->role_name }}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea id="description" name="description" rows="4" class="form-control" required>{{ $role->description }}</textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn-primary">💾 Save Changes</button>
    </div>
</form>

<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');

body {
    font-family: 'Inter', sans-serif;
    background-color: #f3f4f6;
    margin: 0;
    padding: 0;
}

.edit-role-form {
    max-width: 500px;
    margin: 50px auto;
    padding: 32px;
    background: #ffffff;
    border-radius: 16px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
    transition: all 0.3s ease;
}

.form-header {
    margin-bottom: 24px;
}

.form-header h2 {
    font-size: 24px;
    font-weight: 600;
    margin: 0;
    color: #111827;
}

.subtitle {
    font-size: 14px;
    color: #6b7280;
    margin-top: 6px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #374151;
}

.form-control {
    width: 100%;
    padding: 10px 14px;
    border: 1px solid #d1d5db;
    border-radius: 8px;
    font-size: 15px;
    background-color: #f9fafb;
    color: #111827;
    transition: border 0.3s ease;
}

.form-control:focus {
    border-color: #6366f1;
    outline: none;
    background: #fff;
}

textarea.form-control {
    resize: vertical;
}

.btn-primary {
    background-color: #4f46e5;
    color: white;
    padding: 10px 18px;
    border: none;
    border-radius: 12px;
    font-weight: 600;
    cursor: pointer;
    transition: background 0.3s ease, transform 0.2s ease;
    font-size: 14px;
    box-shadow: 0 4px 12px rgba(99, 102, 241, 0.2);
}

.btn-primary:hover {
    background-color: #4338ca;
    transform: scale(1.02);
}

.btn-secondary {
    background-color: #9ca3af;
    color: white;
    padding: 8px 16px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 500;
    display: inline-block;
    margin: 30px auto 10px 50px;
    transition: all 0.2s ease-in-out;
}

.btn-secondary:hover {
    background-color: #6b7280;
}
</style>
