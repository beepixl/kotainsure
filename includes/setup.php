<?php

function kota_setup_theme() {
    add_theme_support('post-thumbnails');
    add_theme_support('menus');

    register_nav_menu('primary', __('Primary Menu', 'kota'));
}
