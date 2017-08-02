<?php  
	session_start();
	$a = require __DIR__.'/../models/m_product.php';
	require_once ('../configs/config.php');
	class c_product {
		public $m_product;

		function __construct(){
			$this->m_product = new m_product();

		}

		function showIndex(){
			$chair = $this->m_product->getChair();

			require "../admin/chairs/get_chair.php";

		}

		function addChair($data) {
			if(!in_array("", $data)){

				$insert_id = $this->m_product->add($data);
				if($insert_id > 0){
					header('location: ?action=showIndex');
				}
			}else{
				header('location: ?action=showIndex');
			}
		}

        function showPageAddProAction(){
            require('../admin/products/addPro.php');

		}
		function showChairPage(){
			$chair = $this->m_product->selectChair();

			require('../views/selectChair.php');
//			require('../views/test.php');
		}

        function showProduct(){
            $result=$this->m_product->listProduct();
		    require_once ('../views/home.php');
        }

        function showPageDetailAction($data){
            $result=$this->m_product->DetailProduct($data);
            require_once '../views/chi_tiet.php';


        }
		function buy($data){
			$id = $data['id'];
			$buy = $this->m_product->buy($id);

			if($buy == true){
				$_SESSION['buy'] = "* Bạn đã đặt ghế thành công.";
				header("location: ?action=showChairPage");
			}else{
				$_SESSION['buy'] = "* Không thể đặt ghế.";
				header("location: ?action=showChairPage");
			}
		}

	}

	$action = $_REQUEST['action'];
	$c_product = new c_product();

	switch ($action) {
		case 'showIndex':
			$c_product->showIndex();
			break;
		case 'addChair':
			$c_product->addChair($_REQUEST);
			break;
		case 'showChairPage':

			$c_product->showChairPage();
			break;
		case 'buy':
			$c_product->buy($_REQUEST);
			break;
        case 'showProduct':
            $c_product->showProduct();
            break;
        case 'showPageDetail':
            $c_product->showPageDetailAction($_REQUEST);
            break;
        case 'showPageAddPro':
            $c_product->showPageAddProAction();
            break;
		default:
			# code...
			break;
	}


?>