<?php namespace ABS\Classes;

class ControllerClass
{
    private $model;

    public function __construct(ModelClass $model) {
        $this->model= $model;
    }

    public function home() {
        $this->model->page = 'home.twig';
    }

    public function about() {
        $this->model->page = 'about.twig';
    }

    public function cv() {
        $this->model->page = 'cv.twig';
    }

    public function contact() {
        $this->model->page = 'contact.twig';
    }
}
