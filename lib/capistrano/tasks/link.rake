namespace :link do
  desc "Create link"
  task :create do
    on roles(:app) do
      execute "ln -s #{release_path}/wp-content/themes/test #{shared_path}/wp-content/themes/test"
    end
  end
end
