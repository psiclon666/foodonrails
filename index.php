<?
define("API_HOST", $_SERVER['HTTP_HOST']);
ini_set( 'upload_max_size' , '20M' );
ini_set( 'post_max_size', '20M');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Middleware\ErrorMiddleware;

require $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
$app = AppFactory::create(); 

$app->get('/api', 'Controller\HomeController:api');

$app->get('/', 'Controller\HomeController:login');
$app->get('/form', 'Controller\HomeController:form');
$app->get('/restorator/form', 'Controller\HomeController:form');
$app->post('/', 'Controller\HomeController:login');
$app->get('/reg', 'Controller\HomeController:reg');
$app->post('/reg', 'Controller\HomeController:reg');
$app->get('/administrator', 'Controller\HomeController:admin');
$app->get('/administrator/reports', 'Controller\HomeController:get_reports_adm');
$app->get('/restorator', 'Controller\HomeController:rest');
$app->get('/restorator/logout', 'Controller\HomeController:logout');
$app->get('/restorator/about', 'Controller\HomeController:get_about');
$app->get('/restorator/dishes', 'Controller\HomeController:get_dishes');
$app->get('/restorator/add_dishes', 'Controller\HomeController:add_dishes');
$app->post('/restorator/add_dishes', 'Controller\HomeController:post_add_dishes');
$app->get('/restorator/stations', 'Controller\HomeController:get_stations');
$app->get('/restorator/reports', 'Controller\HomeController:get_reports_rest');
$app->get('/restorator/orders', 'Controller\HomeController:get_orders');

$app->get('/admin.html', 'Controller\HomeController:admin');
$app->get('/admin_2018.html', 'Controller\HomeController:admin_2018');
$app->get('/admin_bank.html', 'Controller\HomeController:admin_bank');
$app->get('/admin_bank_arhiv.html', 'Controller\HomeController:admin_bank_arhiv');
$app->get('/admin_buh.html', 'Controller\HomeController:admin_buh');
$app->get('/admin_center.html', 'Controller\HomeController:admin_center');
$app->get('/admin_dog.html', 'Controller\HomeController:admin_dog');
$app->get('/admin_dog_arhiv.html', 'Controller\HomeController:admin_dog_arhiv');
$app->get('/admin_du.html', 'Controller\HomeController:admin_du');
$app->get('/admin_fin.html', 'Controller\HomeController:admin_fin');
$app->get('/admin_fin_arhiv.html', 'Controller\HomeController:admin_fin_arhiv');
$app->get('/admin_monitor.html', 'Controller\HomeController:admin_monitor');
$app->get('/admin_rep.html', 'Controller\HomeController:admin_rep');
$app->get('/admin_rep_arhiv.html', 'Controller\HomeController:admin_rep_arhiv');
$app->get('/admin_stat.html', 'Controller\HomeController:admin_stat');
$app->get('/admin_vzr.html', 'Controller\HomeController:admin_vzr');
$app->get('/admin_vzr_arhiv.html', 'Controller\HomeController:admin_vzr_arhiv');

$app->run();
?>