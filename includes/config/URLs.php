<?php

    class GMB_URLs {

        function __construct() {
            $this->main_url = GMB_SITE_URL;
            $this->ajax_url = admin_url( 'admin-ajax.php' );
        }

        public function get_array() {
            return [
                'main_url' => $this->main_url,
                'ajax_url' => $this->ajax_url
            ];
        }

        public static function instance() {
            return new GMB_URLs;
        }

    }