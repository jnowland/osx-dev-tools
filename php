#!/bin/sh

source ~/.bash_profile
source ./lib/utils

# PHP

e_header "Tapping josegonzalez/homebrew-php..."
  brew tap josegonzalez/homebrew-php

# PHP 5.4

e_header "Installing PHP 5.4..."
  brew unlink php53
  brew install php54

e_header "Updating the date.timezone setting in /usr/local/etc/php/5.4/php.ini"
    sed -i .bak 's/\;date.timezone =/date.timezone = "Australia\/Sydney"/g' /usr/local/etc/php/5.4/php.ini

e_header "Installing PHP 5.4 xDebug..."
  brew install php54-xdebug

e_header "Installing PHP 5.4 APC..."
  brew install php54-apc

e_header "Installing PHP 5.4 Twig..."
  brew install php54-twig

e_header "Installing PHP 5.4 intl..."
  brew install php54-intl

e_header "Fixing PEAR permissions"
  chmod -R ug+w $(brew --prefix php54)/lib/php
  pear config-set php_ini /usr/local/etc/php/5.4/php.ini

e_header "Installing PHP_CodeSniffer..."
  pear install PHP_CodeSniffer
  phpcsPath="$(brew --prefix php53)/lib/php/PHP/CodeSniffer/Standards"
  # read -p "Enter the path to your PHP_CodeSniffer standards [$phpcsPath]:" input
  # phpcsPath="${input:-$phpcsPath}"
  cd $phpcsPath
  git clone git://github.com/opensky/Symfony2-coding-standard.git Symfony2
  phpcs --config-set default_standard Symfony2




# PHP 5.3

source ~/.bash_profile

e_header "Installing PHP 5.3..."
  brew unlink php54
  brew install php53

e_header "Updating the date.timezone setting in /usr/local/etc/php/5.3/php.ini"
    sed -i .bak 's/\;date.timezone =/date.timezone = "Australia\/Sydney"/g' /usr/local/etc/php/5.3/php.ini

e_header "Installing PHP 5.3 xDebug..."
  brew install php53-xdebug

e_header "Installing PHP 5.3 APC..."
  brew install php53-apc

e_header "Installing PHP 5.3 Twig..."
  brew install php53-twig

e_header "Installing PHP 5.3 intl..."
  brew install php53-intl

e_header "Fixing PEAR permissions"
  chmod -R ug+w $(brew --prefix php53)/lib/php
  pear config-set php_ini /usr/local/etc/php/5.3/php.ini


# PHP Utils

e_header "Installing PHP_CodeSniffer..."
  pear install PHP_CodeSniffer
  phpcsPath="$(brew --prefix php53)/lib/php/PHP/CodeSniffer/Standards"
  # read -p "Enter the path to your PHP_CodeSniffer standards [$phpcsPath]:" input
  # phpcsPath="${input:-$phpcsPath}"
  cd $phpcsPath
  git clone git://github.com/opensky/Symfony2-coding-standard.git Symfony2
  phpcs --config-set default_standard Symfony2

e_header "Installing PHP CS Fixer..."
  curl http://cs.sensiolabs.org/get/php-cs-fixer.phar -o /usr/local/bin/php-cs-fixer
  chmod a+x /usr/local/bin/php-cs-fixer

e_header "Installing PHP Mess Detector..."
  brew install php-md

e_header "Installing Composer (PHP package manager)..."
  brew install composer
  composer self-update

e_header "Installing Capifony..."
  gem install capifony


source ~/.bash_profile