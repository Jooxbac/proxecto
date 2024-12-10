<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{

    /**ox
    
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var list<string>
     */
    protected $helpers = ['text', 'form'];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    // Información de la barra lateral
    protected $lastTopics;
    protected $topicsWithMostMessages;
    protected $trendingSubcategories;

    protected $adUrls;

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();

        // Información de la barra lateral
        $subcategoriesModel = model('SubcategoriesModel');
        $topicsModel = model('TopicsModel');
        $this->lastTopics = $topicsModel->getLastTopics();
        $this->topicsWithMostMessages = $topicsModel->getTopicsWithMostMessages();
        $this->trendingSubcategories = $subcategoriesModel->getTrendingSubcategories();

        // Selección aleatoria de una imagen para el cartel publicitario
        $ad_number = rand(1, 4);
        $this->adUrls = [
            'normal' => base_url() . "images/ads/ad-$ad_number.png",
            'small' => base_url() . "images/ads/ad-$ad_number-sm.png",
        ];
    }
}
