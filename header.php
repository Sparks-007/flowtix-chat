<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header bg-white shadow-md">
    <nav class="container mx-auto flex justify-between items-center py-4 px-6">
        <div class="logo">
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="FlowTix Chat Logo" width="120"></a>
        </div>
        <ul class="flex space-x-6 text-gray-700 font-medium">
            <li><a href="<?php echo home_url(); ?>" class="hover:text-blue-500">Home</a></li>
            <li><a href="#features" class="hover:text-blue-500">Features</a></li>
            <li><a href="#benefits" class="hover:text-blue-500">Benefits</a></li>
            <li><a href="#integrations" class="hover:text-blue-500">Integrations</a></li>
            <li><a href="/lab" class="hover:text-blue-500">Lab</a></li>
        </ul>
    </nav>
</header>
