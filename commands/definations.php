<?php

//main pages navigation
$wordspeed->add_command('Dashboard', 'Go to the Dashboard page.', 'Navigation@go', ['url' => '/wp-admin/index.php']);
$wordspeed->add_command('Posts', 'Go to the Posts page.', 'Navigation@go', ['url' => '/wp-admin/edit.php']);
$wordspeed->add_command('Media', 'Go to the Media page.', 'Navigation@go', ['url' => '/wp-admin/upload.php']);
$wordspeed->add_command('Pages', 'Go to the Pages page.', 'Navigation@go', ['url' => '/wp-admin/edit.php?post_type=page']);
$wordspeed->add_command('Comments', 'Go to the Comments page.', 'Navigation@go', ['url' => '/wp-admin/edit-comments.php']);
$wordspeed->add_command('Appearance', 'Go to the Appearance page.', 'Navigation@go', ['url' => '/wp-admin/themes.php']);
$wordspeed->add_command('Plugins', 'Go to the Plugins page.', 'Navigation@go', ['url' => '/wp-admin/plugins.php']);
$wordspeed->add_command('Users', 'Go to the Users page.', 'Navigation@go', ['url' => '/wp-admin/users.php']);
$wordspeed->add_command('Tools', 'Go to the Tools page.', 'Navigation@go', ['url' => '/wp-admin/tools.php']);
$wordspeed->add_command('Settings', 'Go to the Settings page.', 'Navigation@go', ['url' => '/wp-admin/options-general.php']);


//sub pages navigation
$wordspeed->add_command('Updates', 'Go to the Updates page.', 'Navigation@go', ['url' => '/wp-admin/update-core.php']);
$wordspeed->add_command('Add New Post', 'Go to the Add New Post page.', 'Navigation@go', ['url' => '/wp-admin/post-new.php']);
$wordspeed->add_command('Post Categories', 'Go to the Post Categories page.', 'Navigation@go', ['url' => '/wp-admin/edit-tags.php?taxonomy=category']);
$wordspeed->add_command('Post Tags', 'Go to the Post Tags page.', 'Navigation@go', ['url' => '/wp-admin/edit-tags.php?taxonomy=post_tag']);
$wordspeed->add_command('Add New Media', 'Go to the Add New Media page.', 'Navigation@go', ['url' => '/wp-admin/media-new.php']);
$wordspeed->add_command('Customize', 'Go to the theme Customize page.', 'Navigation@go', ['url' => '/wp-admin/customize.php?return=%2Fwp-admin%2Fedit-comments.php']);
$wordspeed->add_command('Widgets', 'Go to the Widgets page.', 'Navigation@go', ['url' => '/wp-admin/widgets.php']);
$wordspeed->add_command('Menus', 'Go to the Menus page.', 'Navigation@go', ['url' => '/wp-admin/nav-menus.php']);
$wordspeed->add_command('Theme Editor', 'Go to the Theme Editor page.', 'Navigation@go', ['url' => '/wp-admin/theme-editor.php']);
$wordspeed->add_command('Add New Plugin', 'Go to the Add New Plugin page.', 'Navigation@go', ['url' => '/wp-admin/plugin-install.php']);
$wordspeed->add_command('Plugin Editor', 'Go to the Plugin Editor page.', 'Navigation@go', ['url' => '/wp-admin/plugin-editor.php']);
$wordspeed->add_command('Add New User', 'Go to the Add New User page.', 'Navigation@go', ['url' => '/wp-admin/user-new.php']);
$wordspeed->add_command('Your Profile', 'Go to the Your Profile page.', 'Navigation@go', ['url' => '/wp-admin/profile.php']);
$wordspeed->add_command('Import', 'Go to the Import page.', 'Navigation@go', ['url' => '/wp-admin/import.php']);
$wordspeed->add_command('Export', 'Go to the Export page.', 'Navigation@go', ['url' => '/wp-admin/export.php']);
$wordspeed->add_command('Writing', 'Go to the Writing Settings page.', 'Navigation@go', ['url' => '/wp-admin/options-writing.php']);
$wordspeed->add_command('Reading', 'Go to the Reading Settings page.', 'Navigation@go', ['url' => '/wp-admin/options-reading.php']);
$wordspeed->add_command('Discussion', 'Go to the Discussion Settings page.', 'Navigation@go', ['url' => '/wp-admin/options-discussion.php']);
$wordspeed->add_command('Media Settings', 'Go to the Media Settings page.', 'Navigation@go', ['url' => '/wp-admin/options-media.php']);
$wordspeed->add_command('Permalinks', 'Go to the Permalinks Settings page.', 'Navigation@go', ['url' => '/wp-admin/options-permalink.php']);
$wordspeed->add_command('Privacy', 'Go to the Privacy Settings page.', 'Navigation@go', ['url' => '/wp-admin/privacy.php']);
