<?php

    namespace App\Controllers;

    use \App\Core\Functions;

    class Controller_Main extends \App\Core\Classes\Controller
    {
        public function __construct()
        {
            $this->model = new \App\Models\Model_Main();
            $this->view = new \App\Views\View_Main();
        }

        public function index(\App\Core\Interfaces\IRequest $request) : void
        {
            $data = [
                "title" => "Optimizer URL",
                "lang" => LANGUAGE[$request::session()::get('lang')],
                "request" => $request
            ];
            $this->view->setTemplate("main.php");
            $this->view->setContent("index.php");
            $this->view->render($data);
        }

        public function generate(\App\Core\Interfaces\IRequest $request) : void
        {
            if(filter_var($_POST['link'], FILTER_VALIDATE_URL) === false) {
                $this->notGenerated($request);
            } else {

                $data = [
                    "title" => "Optimizer URL",
                    "lang" => LANGUAGE[$request::session()::get('lang')],
                    "request" => $request,
                    "link" => ['reference'=> $this->model->generate($request::query()['link']), 'original' => $request::query()['link']]
                ];
                $this->view->setTemplate("main.php");
                $this->view->setContent("generated.php");
                $this->view->render($data);
            }
        }

        public function clicks(\App\Core\Interfaces\IRequest $request) : void
        {
            if($request::method() == "GET")
            {
                $data = [
                    "title" => "Optimizer URL",
                    "lang" => LANGUAGE[$request::session()::get('lang')],
                    "request" => $request
                ];
                $this->view->setTemplate("main.php");
                $this->view->setContent("clicks.php");
                $this->view->render($data);
            }
            if($request::method() == "POST")
            {
                preg_match('/\/[a-zA-Z0-9]{5}$/', $request::url(), $match);
                if($result = ($this->model->get(explode('/', $match[0])[1]) != false))
                {
                    $data = [
                        'status' => true,
                        'result' => $result
                    ];
                    $this->view->setTemplate("main.php");
                    $this->view->setContent("clicks-result.php");
                } else {
                    $data = [
                        'status' => false,
                    ];
                    $this->view->setTemplate("main.php");
                    $this->view->setContent("clicks-result.php");
                }
            }
        }

        public function refer(\App\Core\Interfaces\IRequest $request) : void
        {
            preg_match('/\/[a-zA-Z0-9]{5}$/', $request::url(), $match);
            if($target = ($this->model->get(explode('/', $match[0])[1]) != false))
            {
                Functions\redirect($request::host() . '/' . $target, 301);
            } else {
                header("Location: /", true, 301);
            }
        }

        public function lang(\App\Core\Interfaces\IRequest $request) : void
        {
            $request::session()::set("lang", $request::query()['lang']);
            Functions\redirect($request::http_referer(), 301);
        }

        public function notGenerated(\App\Core\Interfaces\IRequest $request) : void
        {
            $data = [
                "title" => "Optimizer URL",
                "lang" => LANGUAGE[$request::session()::get('lang')],
                "request" => $request
            ];
            $this->view->setTemplate("main.php");
            $this->view->setContent("notGenerated.php");
            $this->view->render($data);
        }

        public function notFound(\App\Core\Interfaces\IRequest $request) : void
        {
            $data = [
                "title" => "Optimizer URL",
                "lang" => LANGUAGE[$request::session()::get('lang')],
                "request" => $request
            ];
            $this->view->setTemplate("main.php");
            $this->view->setContent("404.php");
            $this->view->render($data);
        }
    }