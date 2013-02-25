echo "Tapping josegonzalez/homebrew-php..."
    brew tap josegonzalez/homebrew-php

echo "Installing PHP 5.4..."
    brew install php54

echo "Installing PHP 5.4 xDebug..."
    brew install php54-xdebug

echo "Installing PHP 5.4 APC..."
    brew install php54-apc

echo "Installing PHP 5.4 Twig..."
    brew install php54-twig

echo "Installing PHP 5.4 intl..."
    brew install php54-apc

echo "Unlinking PHP 5.4 in order to install PHP 5.3"
    brew unlink php54

echo "Installing PHP 5.3..."
    brew install php53

echo "Installing PHP 5.3 xDebug..."
    brew install php53-xdebug

echo "Installing PHP 5.3 APC..."
    brew install php53-apc

echo "Installing PHP 5.3 Twig..."
    brew install php53-twig

echo "Installing PHP 5.3 intl..."
    brew install php53-apc

echo "Installing Composer (PHP package manager)..."
    brew install composer
    composer self-update
