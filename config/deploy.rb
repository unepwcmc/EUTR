# config valid only for current version of Capistrano
lock "3.8.2"

set :application, "eutr"
set :repo_url, "git@github.com:unepwcmc/EUTR.git"

set :deploy_user, 'wcmc'

set :deploy_to, "/home/#{fetch(:deploy_user)}/#{fetch(:application)}"


set :ssh_options, {
  forward_agent: true,
}


set :pty, true


set :keep_releases, 5


set :linked_files, %w{'wordpress/wp-activate.php', 'wordpress/wp-blog-header.php', 'wordpress/wp-comments-post.php', 'wordpress/wp-config.php', 'wordpress/wp-cron.php', 'wordpress/wp-links-opml.php', 'wordpress/wp-load.php', 'wordpress/wp-login.php', 'wordpress/wp-mail.php', 'wordpress/wp-settings.php', 'wordpress/wp-signup.php', 'wordpress/wp-trackback.php', 'wordpress/xmlrpc.php', 'wordpress/wp-content/index.php', 'wordpress/wp-content/themes/index.php','wordpress/index.php'}


set :linked_dirs, fetch(:linked_dirs, []).push('wordpress/wp-content/plugins','wordpress/wp-content/uploads','wordpress/wp-admin','wordpress/wp-includes')


# Default branch is :master
# ask :branch, `git rev-parse --abbrev-ref HEAD`.chomp

# Default deploy_to directory is /var/www/my_app_name
# set :deploy_to, "/var/www/my_app_name"

# Default value for :format is :airbrussh.
# set :format, :airbrussh

# You can configure the Airbrussh format using :format_options.
# These are the defaults.
# set :format_options, command_output: true, log_file: "log/capistrano.log", color: :auto, truncate: :auto

# Default value for :pty is false
# set :pty, true

# Default value for :linked_files is []
# append :linked_files, "config/database.yml", "config/secrets.yml"

# Default value for linked_dirs is []
# append :linked_dirs, "log", "tmp/pids", "tmp/cache", "tmp/sockets", "public/system"

# Default value for default_env is {}
# set :default_env, { path: "/opt/ruby/bin:$PATH" }

# Default value for local_user is ENV['USER']
# set :local_user, -> { `git config user.name`.chomp }

# Default value for keep_releases is 5
# set :keep_releases, 5
