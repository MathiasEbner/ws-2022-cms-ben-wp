<?php
namespace Deployer;

require 'recipe/wordpress.php';

// Config

set('repository', 'https://github.com/MathiasEbner/ws-2022-cms-ben-wp');

set('shared_files', ['public/wp-config.php']);
set('shared_dirs', ['public/wp-content/uploads']);


// Hosts
host('vm-ultramarine.multimediatechnology.at')
    ->set('remote_user', 'admin')
    ->set('port', 5412)
    ->set('deploy_path', '~/ben-wp');


// Hooks
after('deploy:failed', 'deploy:unlock');
