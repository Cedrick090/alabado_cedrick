<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center" style="background: linear-gradient(135deg, #0f0f0f 0%, #0a3c2f 100%);">
  <div class="w-full max-w-md bg-gradient-to-br from-black via-green-900 to-green-700 p-10 rounded-2xl shadow-2xl border border-green-900">
    <h2 class="text-3xl font-extrabold mb-6 text-green-300 text-center drop-shadow-lg">Sign in to your account</h2>
    <?php if (!empty($error ?? null)): ?>
      <div class="bg-red-900/80 text-green-200 p-2 rounded mb-3 text-center border border-red-700"><?php echo html_escape($error); ?></div>
    <?php endif; ?>
    <form action="<?= site_url('login') ?>" method="POST" class="space-y-6">
      <div>
        <label class="block text-green-200 font-semibold mb-1">Username</label>
        <input type="text" name="username" required class="w-full border border-green-700 bg-black/70 text-green-100 p-3 rounded focus:ring-2 focus:ring-green-500">
      </div>
      <div>
        <label class="block text-green-200 font-semibold mb-1">Password</label>
        <input type="password" name="password" required class="w-full border border-green-700 bg-black/70 text-green-100 p-3 rounded focus:ring-2 focus:ring-green-500">
      </div>
      <div>
        <button type="submit" class="w-full bg-gradient-to-r from-green-700 to-green-500 text-black font-bold py-3 rounded-lg shadow-lg hover:from-green-600 hover:to-green-400 transition text-lg tracking-wide flex items-center justify-center gap-2">
          <i class="fa-solid fa-right-to-bracket"></i> Sign in
        </button>
      </div>
    </form>
  </div>
</body>
</html>
