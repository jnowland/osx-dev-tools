#!/bin/sh

source ~/.bash_profile.local

echo "Installing libksba, recommended for Ruby 1.9.3 ..."
  brew install libksba

echo "Installing RVM (Ruby Version Manager) and Ruby 1.9.3-p327, which becomes the default ..."
  curl -L https://get.rvm.io | bash -s stable --ruby
  echo "
# RVM
[[ -s '/Users/`whoami`/.rvm/scripts/rvm' ]] && source '/Users/`whoami`/.rvm/scripts/rvm'" >> ~/.bash_profile.local
  source ~/.rvm/scripts/rvm
  source /usr/local/rvm/scripts/rvm

echo "Installing bundler for handling dependencies..."
  gem install bundler --no-rdoc --no-ri

echo "Installing guard for watching files for changes..."
  gem install guard --no-rdoc --no-ri

echo "Installing KSS for generating styleguides..."
  gem install kss --no-rdoc --no-ri

echo "Installing rake..."
  gem install rake --no-rdoc --no-ri

echo "Installing latest version of Sass..."
  gem install sass --no-rdoc --no-ri

echo "Installing latest version of Compass..."
  gem install compass --no-rdoc --no-ri

echo "Installing latest version of Stitch for Compass..."
  gem install stitch --no-rdoc --no-ri

echo "Installing Sinatra for running tiny Ruby apps..."
  gem install sinatra --no-rdoc --no-ri

echo "Installing Rails to write and run web applications ..."
  gem install rails --no-rdoc --no-ri

echo "Updating Rubygems..."
  gem update