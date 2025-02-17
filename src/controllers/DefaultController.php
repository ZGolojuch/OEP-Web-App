<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index() {
        $this->render('login');
    }
    public function login() {
        $this->render('login');
    }

    public function register() {
        $this->render('register');
    }

    public function users() {
        $this->render('users');
    }

    public function settings() {
        $this->render('settings');
    }

    public function favourites() {
        $this->render('favourites');
    }

    public function chosenExcerpt() {
        $this->render('chosen-excerpt');
    }
}

