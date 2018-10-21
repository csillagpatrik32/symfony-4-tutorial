sudo rm /var/www/micropost &&
sudo ln -s /var/www/micropost_current /var/www/micropost &&
cd /var/www/micropost &&
sudo chown -R www-data:www-data /var/www/micropost_current &&
sudo chown -h www-data:www-data /var/www/micropost &&
sudo service apache2 restart