<?php
    /**
     * Plugin Name
     *
     * @package           PluginPackage
     * @author            René Hoekstra
     * @copyright         2021 René Hoekstra
     * @license           GPL-2.0-or-later
     *
     * @wordpress-plugin
     * Plugin Name:       Test Plugin
     * Plugin URI:        https://example.com/plugin-name
     * Description:       Description of the plugin.
     * Version:           1.0.0
     * Requires at least: 5.2
     * Requires PHP:      7.2
     * Author:            René Hoekstra
     * Author URI:        https://renehoekstra.com
     * Text Domain:       test-plugin
     * License:           GPL v2 or later
     * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
     * Update URI:        https://renehoekstra.com/test-plugin/
     */

    function custom_welcome_panel() { ?>
        <div class="welcome-panel-content">
            <h2>Welkom!</h2>
            <p class="about-description">Wat wil je doen?</p>
            <div class="welcome-panel-column-container">
                <div class="welcome-panel-column">
                Dit is een aangepast welkomspaneel
                </div>
                <div class="welcome-panel-column">
                    Kolom 2
                </div>
                <div class="welcome-panel-column welcome-panel-last">
                    Kolom 3
                </div>
            </div>
        </div>
    <?php }

    add_action( 'welcome_panel', 'custom_welcome_panel' );