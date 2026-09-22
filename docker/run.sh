#!/usr/bin/env bash
set -e

# Replace Apache listening port with Render's PORT environment variable
PORT=${PORT:-80}
sed -i "s/80/${PORT}/g" /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

# Ensure SQLite database exists
mkdir -p /var/www/html/database
touch /var/www/html/database/database.sqlite

# Fix permissions
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database

# Run optimizations
php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

echo "Starting Apache on port $PORT..."
exec apache2-foreground
