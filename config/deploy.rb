# config valid for current version and patch releases of Capistrano
lock "~> 3.10.1"

set :application, "my_app_name"
set :repo_url, 'git@github.com:Dry7/crm_catering.git'

# Default branch is :master
# ask :branch, `git rev-parse --abbrev-ref HEAD`.chomp
set :branch, :develop

# Default deploy_to directory is /var/www/my_app_name
set :deploy_to, '/var/www/catering'

# Default value for :format is :airbrussh.
# set :format, :airbrussh

# You can configure the Airbrussh format using :format_options.
# These are the defaults.
# set :format_options, command_output: true, log_file: "log/capistrano.log", color: :auto, truncate: :auto

# Default value for :pty is false
# set :pty, true

# Default value for :linked_files is []
append :linked_files, '.env'

# Default value for linked_dirs is []
append :linked_dirs, 'storage/app/public', 'public/storage'

# Default value for default_env is {}
# set :default_env, { path: "/opt/ruby/bin:$PATH" }

# Default value for local_user is ENV['USER']
# set :local_user, -> { `git config user.name`.chomp }

# Default value for keep_releases is 5
# set :keep_releases, 5

# Uncomment the following to require manually verifying the host key before first deploy.
# set :ssh_options, verify_host_key: :secure

set :npm_flags, ''

namespace :laravel do
    desc "Run migrations"
    task :migrate do
        on roles(:app), in: :sequence, wait: 5 do
            within release_path do
#                execute :php, "php /home/b/barkekmail/public_html/shared/composer.phar install"
                execute :php, "artisan migrate --force"
            end
        end
    end
end

namespace :deploy do
    after :published, "laravel:migrate"
end