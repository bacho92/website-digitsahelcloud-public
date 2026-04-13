Vagrant.configure("2") do |config|

  # ── Box Ubuntu 22.04 LTS (identique à EC2) ──────────────
  config.vm.box      = "ubuntu/jammy64"
  config.vm.hostname = "digitsahelcloud-dev"

  # ── Réseau ───────────────────────────────────────────────
  config.vm.network "private_network", ip: "192.168.56.10"
  config.vm.network "forwarded_port", guest: 80,   host: 8080
  config.vm.network "forwarded_port", guest: 3306, host: 3306
  config.vm.network "forwarded_port", guest: 5173, host: 5173  # Vite dev

  # ── Dossier partagé ──────────────────────────────────────
  config.vm.synced_folder ".", "/var/www/digitsahelcloud",
    owner: "www-data",
    group: "www-data",
    mount_options: ["dmode=775", "fmode=664"]

  # ── Ressources VirtualBox ────────────────────────────────
  config.vm.provider "virtualbox" do |vb|
    vb.name   = "DigitSahelCloud-Dev"
    vb.memory = 4096
    vb.cpus   = 4
    vb.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
    vb.customize ["modifyvm", :id, "--ioapic", "on"]
  end

  # ── Provisioning automatique ─────────────────────────────
  config.vm.provision "shell", inline: <<-SHELL

    echo "════════════════════════════════════════"
    echo "  DigitSahelCloud — Setup Dev Environment"
    echo "════════════════════════════════════════"

    # Mise à jour système
    apt-get update -y && apt-get upgrade -y

    # PHP 8.2 + extensions Laravel
    apt-get install -y software-properties-common
    add-apt-repository ppa:ondrej/php -y
    apt-get update -y
    apt-get install -y \
      php8.2 php8.2-cli php8.2-fpm \
      php8.2-mbstring php8.2-xml php8.2-bcmath \
      php8.2-curl php8.2-mysql php8.2-zip \
      php8.2-sqlite3 php8.2-gd php8.2-redis \
      unzip git curl

    # Composer
    curl -sS https://getcomposer.org/installer | php
    mv composer.phar /usr/local/bin/composer
    chmod +x /usr/local/bin/composer

    # Node.js 20 + npm
    curl -fsSL https://deb.nodesource.com/setup_20.x | bash -
    apt-get install -y nodejs

    # MySQL 8
    apt-get install -y mysql-server
    mysql -e "CREATE DATABASE IF NOT EXISTS digitsahelcloud CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
    mysql -e "CREATE USER IF NOT EXISTS 'dsc_user'@'%' IDENTIFIED BY 'dsc_password';"
    mysql -e "GRANT ALL PRIVILEGES ON digitsahelcloud.* TO 'dsc_user'@'%';"
    mysql -e "FLUSH PRIVILEGES;"

    # Nginx
    apt-get install -y nginx

    # Config Nginx pour Laravel
    cat > /etc/nginx/sites-available/digitsahelcloud << 'EOF'
server {
    listen 80;
    server_name digitsahelcloud.local 192.168.56.10;
    root /var/www/digitsahelcloud/public;
    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
EOF

    ln -sf /etc/nginx/sites-available/digitsahelcloud /etc/nginx/sites-enabled/
    rm -f /etc/nginx/sites-enabled/default
    systemctl restart nginx
    systemctl restart php8.2-fpm

    # Redis
    apt-get install -y redis-server
    systemctl enable redis-server

    echo ""
    echo "════════════════════════════════════════"
    echo "  ✅ Stack prête !"
    echo "  PHP    : $(php --version | head -1)"
    echo "  Composer: $(composer --version)"
    echo "  Node   : $(node --version)"
    echo "  MySQL  : $(mysql --version)"
    echo "  Nginx  : $(nginx -v 2>&1)"
    echo "════════════════════════════════════════"
    echo "  🌐 http://192.168.56.10"
    echo "  📁 /var/www/digitsahelcloud"
    echo "  🗄️  DB : digitsahelcloud"
    echo "  👤  User: dsc_user / dsc_password"
    echo "════════════════════════════════════════"

  SHELL

end