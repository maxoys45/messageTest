<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'my_project');

// Project repository
set('repository', 'https://github.com/maxoys45/messageTest.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);


// Hosts

// host('maxhenchman.co.uk')
//     ->set('deploy_path', '~/{{application}}');    

// host('maxhenchman.co.uk')
//     ->set('deploy_path', '/var/www/laraveltest');    

set('user', function() {
	return getenv('DEP_USER');
});

host('shell.gridhost.co.uk')
    ->set('deploy_path', 'public_html/laraveltest');  

// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

