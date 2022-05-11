<?php
    class Pages {
        public function __construct()
        {
            // echo 'Page loaded';
        }

        public function index() {
            
        }

        public function about($id) {
            echo $id;
        }
    }