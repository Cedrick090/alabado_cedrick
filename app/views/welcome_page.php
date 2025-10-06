<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to LavaLust</title>
    <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", sans-serif;
            background: #f8fafc;
            color: #334155;
        }

        .container {
            max-width: 960px;
            margin: 3rem auto;
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            overflow: hidden;
        }

        .header {
            background: #3B82F6; /* lighter blue */
            color: #ffffff;
            padding: 2rem;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        .main {
            padding: 2rem;
        }

        h2 {
            color: #1e40af;
            margin-top: 2rem;
        }

        p {
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        code, pre {
            display: block;
            background: #f1f5f9;
            padding: 1rem;
            border-left: 4px solid #3b82f6;
            margin-bottom: 1rem;
            font-size: 0.9rem;
            color: #1e293b;
            overflow-x: auto;
        }

        ul {
            padding-left: 1.5rem;
            margin-bottom: 1rem;
        }

        li {
            margin-bottom: 0.5rem;
        }

        a {
            color: #2563eb;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .footer {
            font-size: 0.9rem;
            text-align: center;
            padding: 1rem;
            background: #f1f5f9;
            border-top: 1px solid #e2e8f0;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1rem;
        }

        .card {
            background: #f8fafc;
            padding: 1rem;
            border-radius: 6px;
            border: 1px solid #e2e8f0;
        }

        .card h3 {
            margin-top: 0;
            color: #0f172a;
        }
    </style>
</head>
<body>
        <div class="container" style="background: linear-gradient(135deg, #0f0f0f 0%, #0a3c2f 100%); color: #d1fae5;">
                <div class="header" style="background: linear-gradient(90deg, #0f0f0f 60%, #059669 100%); color: #d1fae5;">
                        <h1 style="font-size:2.5rem; font-weight:900; letter-spacing:2px;">HR Portal</h1>
                        <p style="font-size:1.2rem;">Moody Black-Green Gradient Demo</p>
                </div>

                <div class="main" style="padding:2rem;">
                    <div class="grid" style="display:grid;grid-template-columns:repeat(auto-fit,minmax(320px,1fr));gap:2rem;margin-bottom:2.5rem;">
                        <!-- Login Form -->
                        <div class="card" style="background:rgba(15,23,42,0.85);border:1px solid #059669;padding:2rem;border-radius:1rem;box-shadow:0 4px 24px #022c22;">
                            <h2 style="color:#6ee7b7;font-size:1.5rem;font-weight:700;margin-bottom:1.5rem;text-align:center;">Sign In</h2>
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
                        <!-- Sign Up Form -->
                        <div class="card" style="background:rgba(15,23,42,0.85);border:1px solid #059669;padding:2rem;border-radius:1rem;box-shadow:0 4px 24px #022c22;">
                            <h2 style="color:#6ee7b7;font-size:1.5rem;font-weight:700;margin-bottom:1.5rem;text-align:center;">Sign Up</h2>
                            <form action="<?= site_url('signup') ?>" method="POST" class="space-y-6">
                                <div>
                                    <label class="block text-green-200 font-semibold mb-1">First Name</label>
                                    <input type="text" name="first_name" required class="w-full border border-green-700 bg-black/70 text-green-100 p-3 rounded focus:ring-2 focus:ring-green-500">
                                </div>
                                <div>
                                    <label class="block text-green-200 font-semibold mb-1">Last Name</label>
                                    <input type="text" name="last_name" required class="w-full border border-green-700 bg-black/70 text-green-100 p-3 rounded focus:ring-2 focus:ring-green-500">
                                </div>
                                <div>
                                    <label class="block text-green-200 font-semibold mb-1">Email</label>
                                    <input type="email" name="email" required class="w-full border border-green-700 bg-black/70 text-green-100 p-3 rounded focus:ring-2 focus:ring-green-500">
                                </div>
                                <div>
                                    <button type="submit" class="w-full bg-gradient-to-r from-green-700 to-green-500 text-black font-bold py-3 rounded-lg shadow-lg hover:from-green-600 hover:to-green-400 transition text-lg tracking-wide flex items-center justify-center gap-2">
                                        <i class="fa-solid fa-user-plus"></i> Sign up
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
            <h2>What is LavaLust?</h2>
            <p><strong>LavaLust</strong> is a lightweight PHP framework that follows the MVC (Model–View–Controller) pattern. It's designed for developers who want a structured yet minimalistic PHP development experience.</p>

            <h2>🚀 Key Features</h2>
            <div class="grid">
                <div class="card">
                    <h3>🧠 MVC Architecture</h3>
                    <p>Clear separation of concerns with Models, Views, and Controllers.</p>
                </div>
                <div class="card">
                    <h3>⚙️ Built-in Routing</h3>
                    <p>Clean and flexible routing system similar to Laravel or CodeIgniter.</p>
                </div>
                <div class="card">
                    <h3>📦 Libraries & Helpers</h3>
                    <p>Includes utilities for sessions, forms, database, validation, and more.</p>
                </div>
                <div class="card">
                    <h3>📁 Organized Structure</h3>
                    <p>Modular folder structure for scalable app development.</p>
                </div>
                <div class="card">
                    <h3>🔗 REST API Support</h3>
                    <p>Build RESTful APIs easily using built-in tools and conventions.</p>
                </div>
                <div class="card">
                    <h3>📘 ORM-like Models</h3>
                    <p>Use LavaLust's model layer for structured database operations with ease.</p>
                </div>
            </div>

            <h2>📂 Project Structure</h2>
            <pre><code>
/app
  /config
  /controllers
  /helpers
  /language
  /libraries
  /models
  /views
/console
/public
/runtime
/scheme
            </code></pre>

            <h2>🧪 Quick Example</h2>
                <p>Route in <code>app/config/routes.php</code></p>
<pre><code>
$router->get('/', 'Welcome::index');
</code></pre>
            <p>Controller method in <code>app/controllers/Welcome.php</code>:</p>
            <pre><code>
class Welcome extends Controller {
    public function index() {
        $this->call->view('welcome_page');
    }
}
            </code></pre>

            <p>View file at: <code>app/Views/welcome_page.php</code></p>

            <h2>📚 Learn More</h2>
            <ul>
                <li><a href="https://github.com/ronmarasigan/LavaLust">GitHub Repository</a></li>
                <li><a href="https://lavalust.netlify.app/">Official Documentation</a></li>
            </ul>
        </div>

        <div class="footer">
            Page rendered in <strong><?php echo lava_instance()->performance->elapsed_time('lavalust'); ?></strong> seconds.
            Memory usage: <?php echo lava_instance()->performance->memory_usage(); ?>.
            <?php if(config_item('ENVIRONMENT') === 'development'): ?>
                <br>LavaLust Version <strong><?php echo config_item('VERSION'); ?></strong>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
