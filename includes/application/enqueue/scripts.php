<?php

    class GMB_Enqueue_scripts {

        function __construct() {
            $this->editor_assets = include GMB_BUILD_PATH . 'editor.asset.php';
            $this->script_assets = include GMB_BUILD_PATH . 'script.asset.php'; 
        }

        public function init() {
            add_action( 'enqueue_block_editor_assets' , [ $this , 'editor_scripts' ] );
            add_action( 'admin_enqueue_scripts' , [ $this , 'admin_scripts' ] );
            add_action( 'wp_enqueue_scripts' , [ $this , 'front_scripts' ] );
        }

        public function editor_scripts() {

            $enqueue = new GMB_EnqueueBuilder();
            $enqueue->setType('script')
                ->setName(GMB_TEXTDOMAIN . '-editor-script' )
                ->setPath( GMB_BUILD_URL . 'editor.js' )
                ->setDependencies($this->editor_assets['dependencies'])
                ->setVer($this->editor_assets['version'])
                ->setInFooter(true)
                ->enqueue();
            $enqueue->localizeScript(array( 
                'GMB_URLs' => GMB_URLs::instance()->get_array()
            ));

        }

        public function front_scripts() {

            $enqueue = new GMB_EnqueueBuilder();
            $enqueue->setType('script')
                ->setName(GMB_TEXTDOMAIN . '-main-script' )
                ->setPath( GMB_BUILD_URL . 'script.js' )
                ->setDependencies($this->script_assets['dependencies'])
                ->setVer($this->script_assets['version'])
                ->setInFooter(true)
                ->enqueue();
            $enqueue->localizeScript(array( 
                'GMB_URLs' => GMB_URLs::instance()->get_array(),
            ));

        }

        public function admin_scripts() {
            
        }
        
        public static function instance() {
            return new GMB_Enqueue_scripts();
        }

    }

    GMB_Enqueue_scripts::instance()->init();