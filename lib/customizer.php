<?php
/**
 * FilmMaker Theme customizer settings
 *
 * @package     TMXFilmMaker
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */

class TmxCustomizerTitan
{
    /**
     * @access private
     * @var instance name
     * @since 1.0.1
     */
    private $instance_name;

    /**
     * TmxCustomizerTitan constructor.
     *
     * @since 1.0.1
     */
    public function __construct($instance_name)
    {
        $this->instance_name = (string)$instance_name;
        $this->hooks();
    }

    /**
     * Create customizer options with Titan
     *
     * @since 1.0.1
     */
    public function tmx_create_options() {
        $titan = TitanFramework::getInstance($this->instance_name);

        $home = $titan->createThemeCustomizerSection(array(
            'name' => 'Home Section'
        ));
        $home->createOption(array(
            'name' => 'Image',
            'id' => 'home-img',
            'type' => 'upload',
            'desc' => 'Main image display'
        ));
        $home->createOption(array(
            'name' => 'Text',
            'id' => 'home-info',
            'type' => 'textarea',
            'desc' => 'Detailed text about the brand.'
        ));
        $home->createOption(array(
            'name' => 'Spacer',
            'id' => 'home-spacer',
            'type' => 'checkbox',
            'desc' => 'Show spacer line above text',
            'default' => true
        ));

        $about = $titan->createThemeCustomizerSection(array(
            'name' => 'About Section'
        ));
        $about->createOption(array(
            'name' => 'Title',
            'id' => 'about-title',
            'type' => 'text',
            'desc' => 'About section title'
        ));
        $about->createOption(array(
            'name' => 'Image',
            'id' => 'about-img',
            'type' => 'upload',
            'desc' => 'About section image'
        ));
        $about->createOption(array(
            'name' => 'Text',
            'id' => 'about-info',
            'type' => 'textarea',
            'desc' => 'Detailed text about services.'
        ));
        $about->createOption(array(
            'name' => 'Spacer',
            'id' => 'about-spacer',
            'type' => 'checkbox',
            'desc' => 'Show spacer line above text',
            'default' => true
        ));

        $footer = $titan->createThemeCustomizerSection(array(
            'name' => 'Location Info',
            'panel' => 'Locations'
        ));

        $footer->createOption(array(
            'name' => 'Location Title',
            'id' => 'location-title',
            'type' => 'text',
            'desc' => 'Location section title'
        ));
        $footer->createOption(array(
            'name' => 'Location Info',
            'id' => 'location-info',
            'type' => 'textarea',
            'desc' => 'Detailed text about locations.'
        ));

        for($i=1;$i<=3;$i++) {

            $loc = $titan->createThemeCustomizerSection(array(
                'name' => 'Location '.$i,
                'panel' => 'Locations'
            ));
            $loc->createOption(array(
                'name' => 'Location Name',
                'id' => 'location-name'.$i,
                'type' => 'text',
                'desc' => 'Location section name'
            ));
            $loc->createOption(array(
                'name' => 'URL',
                'id' => 'location-url'.$i,
                'type' => 'text',
                'desc' => 'Location URL'
            ));
            $loc->createOption(array(
                'name' => 'Upload',
                'id' => 'location-img'.$i,
                'type' => 'upload',
                'desc' => 'Location Image',
            ));
        }

        $copyright = $titan->createThemeCustomizerSection(array(
            'name' => 'Copyright',
        ));
        $copyright->createOption(array(
            'name' => 'Copyright Information',
            'id' => 'copyright-info',
            'type' => 'text',
            'desc' => 'Copyright information shown at page bottom'
        ));
    }

    /**
     * Attach hooks
     *
     * @since 1.0.1
     */
    private function hooks(){
        add_action( 'tf_create_options', array($this, 'tmx_create_options') );
    }
}