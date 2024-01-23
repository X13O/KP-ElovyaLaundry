<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elovya Laundry | {{ $title }}</title>
    <link rel="stylesheet" href="css/login.css">
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
</head>

<body>
    <div class="login-box">
        <div class="login-header">
            <header>Halaman Registrasi</header>
            <p>Elovya Laundry</p>
        </div>
        <form action="/register" method="POST">
            @csrf
            <div class="input-box">
                <input type="email" class="input-field" name="email" id="email" autocomplete="off" required
                    value="{{ old('email') }}">
                <label for="email">Email</label>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" name="username" id="username" autocomplete="off" required
                    value="{{ old('username') }}">
                <label for="username">Name</label>
            </div>
            <div class="input-box">
                <input type="number" class="input-field" name="nomor_hp" id="nomor_hp" autocomplete="off" required
                    value="{{ old('nomor_hp') }}">
                <label for="nomor_hp">Nomor HP</label>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" name="alamat" id="alamat" autocomplete="off" required
                    value="{{ old('alamat') }}">
                <label for="alamat">Alamat</label>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" name="password" id="password" autocomplete="off" required>
                <label for="password">Password</label>
            </div>
            <div class="input-box">
                <input type="submit" class="input-submit" value="Register">
            </div>
        </form>
        <div class="sign-up">
            <p>Sudah Memiliki Akun? <a href="/">Login Sekarang</a></p>
        </div>
    </div>
    <script>
        if ("serviceWorker" in navigator) {
              // Register a service worker hosted at the root of the
              // site using the default scope.
              navigator.serviceWorker.register("/sw.js").then(
              (registration) => {
                 console.log("Service worker registration succeeded:", registration);
              },
              (error) => {
                 console.error(`Service worker registration failed: ${error}`);
              },
            );
          } else {
             console.error("Service workers are not supported.");
          }
    </script>
</body>

</html>