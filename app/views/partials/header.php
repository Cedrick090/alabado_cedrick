<nav class="shadow-lg border-b border-green-900 bg-gradient-to-r from-black via-green-900 to-green-700">
  <div class="max-w-7xl mx-auto px-6 py-5 flex justify-between items-center">
    <h1 class="text-green-300 text-3xl font-extrabold flex items-center gap-3 tracking-wide drop-shadow-lg">
      <i class="fa-solid fa-users text-green-400"></i>
      <?= isset($title) ? html_escape($title) : 'Moody App' ?>
    </h1>
    <div class="flex items-center gap-4">
      <?php if (isset($_SESSION['user'])): ?>
        <span class="text-green-200 font-semibold">Hello, <?= html_escape($_SESSION['user']['username']) ?></span>
        <a href="<?= site_url('logout') ?>" class="bg-gradient-to-r from-green-700 to-green-500 text-black px-4 py-2 rounded shadow hover:from-green-600 hover:to-green-400 font-bold transition">Logout</a>
      <?php else: ?>
        <a href="<?= site_url('login') ?>" class="bg-gradient-to-r from-green-700 to-green-500 text-black px-4 py-2 rounded shadow hover:from-green-600 hover:to-green-400 font-bold transition">Login</a>
      <?php endif; ?>
    </div>
  </div>
</nav>
