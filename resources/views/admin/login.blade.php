<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    @vite('resources/css/app.css')
    <style>
        body {
            background: linear-gradient(to right, #4f46e5, #3b82f6);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Inter', sans-serif;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(15px);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .login-container h1 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            color: #fff;
            text-align: center;
        }

        .login-container .input-group {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .login-container .input-group input {
            width: 100%;
            padding: 10px 15px 10px 40px;
            font-size: 1rem;
            color: #fff;
            background: rgba(255, 255, 255, 0.1);
            border: none;
            border-radius: 8px;
            outline: none;
            transition: all 0.3s ease;
        }

        .login-container .input-group input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .login-container .input-group .icon {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.7);
        }

        .login-container .input-group input:focus {
            background: rgba(255, 255, 255, 0.2);
        }

        .login-container .custom-button {
            background-color: #3b82f6;
            color: white;
            padding: 12px;
            border-radius: 8px;
            text-align: center;
            width: 100%;
            cursor: pointer;
            border: none;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .login-container .custom-button:hover {
            background-color: #2563eb;
        }

        .login-container .error-message {
            background: rgba(255, 0, 0, 0.1);
            color: #ff6b6b;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 1rem;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h1>Admin Login</h1>
    @if ($errors->any())
        <div class="error-message">
            <strong>{{ $errors->first() }}</strong>
        </div>
    @endif
    <form action="{{ url('/admin/login') }}" method="POST">
        @csrf
        <div class="input-group">
            <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 12A4 4 0 118 12a4 4 0 018 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 14v8m0-8v.01" />
                </svg>
            </span>
            <input type="email" name="email" id="email" placeholder="Masukan Email" required>
        </div>
        <div class="input-group">
            <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11V7a4 4 0 10-8 0v4m12 0a2 2 0 01-2 2H9a2 2 0 01-2-2m12 0H7" />
                </svg>
            </span>
            <input type="password" name="password" id="password" placeholder="Masukan Password" required>
        </div>
        <button type="submit" class="custom-button">Login</button>
    </form>
</div>

</body>
</html>
