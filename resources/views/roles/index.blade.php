<a href="{{ route('roles.create') }}" class="create-btn">⚡ Create Role</a>

<div class="action-container">
    <table>
        <thead>
            <tr>
                <th>Role Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($roles as $role)
            <tr>
                <td>{{ $role->role_name }}</td>
                <td>{{ $role->description }}</td>
                <td>
                    <button onclick="window.location='{{ route('roles.show', $role->id) }}'" class="action-btn show">👁 Show</button>
                    <button onclick="window.location='{{ route('roles.edit', $role->id) }}'" class="action-btn edit">✏️ Edit</button>
                    <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="action-btn delete">🗑 Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<style>
@import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&family=Inter:wght@400;700&display=swap');

:root {
    --bg: #0f172a;
    --glass: rgba(255, 255, 255, 0.05);
    --neon-violet: #a855f7;
    --neon-blue: #38bdf8;
    --neon-green: #34d399;
    --neon-red: #f87171;
    --text-primary: #f1f5f9;
    --text-muted: #94a3b8;
}

body {
    font-family: 'Orbitron', 'Inter', sans-serif;
    background: var(--bg);
    color: var(--text-primary);
    margin: 0;
    padding: 40px 24px;
    overflow-x: hidden;
}

.action-container {
    max-width: 1100px;
    margin: auto;
    animation: dropFade 0.8s ease;
    backdrop-filter: blur(6px);
}

.create-btn {
    background: linear-gradient(135deg, var(--neon-violet), var(--neon-blue));
    color: #fff;
    padding: 14px 24px;
    font-weight: 700;
    border: none;
    border-radius: 18px;
    cursor: pointer;
    margin-bottom: 28px;
    box-shadow: 0 0 18px var(--neon-blue);
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    transition: all 0.3s ease;
    letter-spacing: 1px;
    text-transform: uppercase;
}

.create-btn:hover {
    transform: scale(1.05);
    box-shadow: 0 0 28px var(--neon-violet), 0 0 12px var(--neon-blue);
}

table {
    width: 100%;
    border-spacing: 0;
    background: var(--glass);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 8px 28px rgba(0, 0, 0, 0.4);
    animation: pulseIn 1s ease;
}

thead {
    background: rgba(255, 255, 255, 0.05);
}

th, td {
    padding: 20px;
    text-align: left;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

th {
    color: var(--text-primary);
    font-size: 14px;
    letter-spacing: 1px;
    text-transform: uppercase;
}

td {
    color: var(--text-muted);
    font-size: 15px;
}

tr:last-child td {
    border-bottom: none;
}

.action-btn {
    padding: 10px 18px;
    font-size: 14px;
    font-weight: 600;
    border-radius: 12px;
    border: none;
    cursor: pointer;
    margin-right: 10px;
    text-decoration: none;
    text-transform: uppercase;
    transition: all 0.2s ease;
    box-shadow: 0 0 8px rgba(255,255,255,0.05);
}

.action-btn.show {
    background: var(--neon-blue);
    color: #fff;
}

.action-btn.show:hover {
    background: #0ea5e9;
    box-shadow: 0 0 12px var(--neon-blue);
}

.action-btn.edit {
    background: var(--neon-green);
    color: #fff;
}

.action-btn.edit:hover {
    background: #10b981;
    box-shadow: 0 0 12px var(--neon-green);
}

.action-btn.delete {
    background: var(--neon-red);
    color: #fff;
}

.action-btn.delete:hover {
    background: #ef4444;
    box-shadow: 0 0 12px var(--neon-red);
    transform: scale(1.05) rotate(-1deg);
}

form {
    display: inline;
}

/* Hype Animations */
@keyframes dropFade {
    from {
        transform: translateY(-20px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes pulseIn {
    0% {
        transform: scale(0.98);
        opacity: 0;
    }
    100% {
        transform: scale(1);
        opacity: 1;
    }
}
</style>
