<h3>Dangi Website and AdminPanel</h3>

<h4>Steps to Install</h4>

<ol>
    <li>Must need php version <strong>8.2.0</strong></li>
    <li>Run Command : 'cp .env.example .env' to generate ENV File</li>
    <li>setup envirnment variables at .env file</li>
    <li>Go to `app/Providers/SettingsServiceProvider.php` and comment the code inside boot and register function</li>
    <li>Run 'composer install' to install vendors (third party library)</li>
    <li>Run Command : 'php artisan key:generate' to generate Private key</li>
    <li>Run Command : 'php artisan config:cache' to refresh config cache</li>
    <li>
        run 'php artisan migrate' command to create tables in database
    </li>
    <li>Go to `app/Providers/SettingsServiceProvider.php` and remove comment the code inside boot and register function</li>
</ol>


<p>Default superadmin login</p>
<ul>
    <li><strong>Username :</strong> administrator</li>
    <li><strong>Password :</strong> Dangi@123</li>
</ul>
