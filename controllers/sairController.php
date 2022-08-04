<?php

class SairController extends Controller {
    public function index() {
        unset($_SESSION['cLogin']);
        header('Location: ' . BASE_URL);   
    }

}