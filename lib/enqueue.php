<?php
/**
 * ThemeAxe Theme Enqueue Style & Scripts
 *
 * @package     TMXFilmMaker
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */

class TmxEnqueue{
    /**
     * TmxEnqueue constructor.
     *
     * @since 1.0.1
     */
    public function __construct(){
        $this->hooks();
    }

    /**
     * Enqueues style & scripts
     *
     * @since 1.0.1
     */
    public function tmx_enqueue_scripts() {

        // Style sheets
        wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri().'/resource/css/bootstrap.min.css');
        wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri().'/resource/css/font-awesome.min.css');
        wp_enqueue_style( 'landing-page', get_stylesheet_directory_uri().'/resource/css/landing-page.css');
        wp_enqueue_style( 'lato-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i');
        wp_enqueue_style( 'style', get_stylesheet_uri());

        // Scripts
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri().'/resource/js//bootstrap.min.js', array( 'jquery' ), '', true );
    }

    /**
     * Enqueues style & scripts on admin
     *
     * @since 1.0.1
     */
    public function tmx_admin_scripts(){
    }

    /**
     * Attach hooks
     *
     * @since 1.0.1
     */
    private function hooks(){
        add_action( 'wp_enqueue_scripts', array($this, 'tmx_enqueue_scripts') );
        add_action( 'admin_enqueue_scripts', array($this, 'tmx_admin_scripts') );
    }
}