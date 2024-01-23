<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elovya Laundry | <?php echo e($title); ?></title>
    <link rel="stylesheet" href="css/login.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="<?php echo e(asset('logo.PNG')); ?>">
    <link rel="manifest" href="<?php echo e(asset('/manifest.json')); ?>">
</head>

<body>
    <div class="login-box">
        <div class="login-header">
            <header>Halaman Login</header>
            <p>Elovya Laundry</p>
        </div>

        <?php if(session()->has('success')): ?>
        <!-- Bootstrap Alert -->
        <div class="alert alert-success alert-dismissible fade show text-lg-left" role="alert">
            <?php echo e(session('success')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php endif; ?>

        <?php if(session()->has('fail')): ?>
        <!-- Bootstrap Alert -->
        <div class="alert alert-danger alert-dismissible fade show text-lg-left" role="alert">
            <?php echo e(session('fail')); ?>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php endif; ?>

        <form action="/" method="POST">
            <?php echo csrf_field(); ?>
            <div class="input-box">
                <input type="text" class="input-field <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    is-invalid
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="username" id="username" autocomplete="off" required autofocus
                    value="<?php echo e(old('username')); ?>">
                <label for="username">Name</label>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" name="password" id="password" autocomplete="off" required>
                <label for="password">Password</label>
            </div>
            <div class="input-box">
                <input type="submit" class="input-submit" value="Login">
            </div>
        </form>
        <div class="sign-up">
            <p>Tidak Memiliki Akun? <a href="/register">Registrasi Sekarang</a></p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="<?php echo e(asset('/sw.js')); ?>"></script>
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

</html><?php /**PATH D:\KP\projectKP\Websitenya\elovya-laundry\resources\views/login/index.blade.php ENDPATH**/ ?>