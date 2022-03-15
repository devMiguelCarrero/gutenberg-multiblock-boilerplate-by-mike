<?php

    class GMB_Blocks {

        public function init() {
            add_action( 'init' , [ $this , 'register' ] );
        }

        public function register() {
            register_block_type_from_metadata( GMB_BLOCKS_PATH . 'test-block-1' );
            register_block_type_from_metadata( GMB_BLOCKS_PATH . 'test-block-2' );
        }

        public static function instance() {
            return new GMB_Blocks();
        }


    }

    GMB_Blocks::instance()->init();