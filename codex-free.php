<?php
/**
 * Plugin Name: CodexFree
 * Plugin URI: https://github.com/wpbrasil/codex-free
 * Description: Tire dúvidas e aprenda a arte milenar de programar no WordPress.org
 * Author: claudiosanches
 * Author URI: https://github.com/wpbrasil
 * Version: 1.0.0
 * License: GPLv2 or later
 */

class Codex_Free {

    /**
     * Class construct.
     */
    public function __construct() {
        // Setupe the dashboard.
        add_action( 'wp_dashboard_setup', array( $this, 'dashboard_widget' ) );
    }

    /**
     * Register the dashboard widget.
     *
     * @return void
     */
    public function dashboard_widget() {
        wp_add_dashboard_widget( 'codex_free_widget', 'CodexFree', array( $this, 'widget' ) );
    }

    public function widget() {
        $html = '<p>' . __( 'Esta com alguma d&uacute;vida? Fa&ccedil;a uma busca aqui:' ) . '</p>';
        $html .= '<form method="get" action="http://wordpress.org/search/do-search.php" target="_blank">';
        $html .= '<input class="text" type="text" placeholder="' . __( 'Procurar no WordPress.org' ) . '" maxlength="150" value="" name="search" />';
        $html .= '<input class="button" type="submit" value="' . __( 'Buscar' ) . '" />';
        $html .= '</form>';

        $html .= '<p>' . __( 'Vire um ninja e aprenda a arte milenar de como programar no WordPress:' ) . '</p>';
        $html .= '<ul>';
        $html .= '<li><a href="http://codex.wordpress.org/" target="_blank">' . __( 'Tutorial em Ingl&ecirc;s' ) . '</a></li>';
        $html .= '<li><a href="http://codex.wordpress.org/pt-br:P%C3%A1gina_Inicial" target="_blank">' . __( 'Tutorial em Portugu&ecirc;s' ) . '</a></li>';
        $html .= '</ul>';

        echo $html;
    }

}

new Codex_Free;