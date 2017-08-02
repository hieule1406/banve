<?php  

	require '../configs/database.php';


	class M_product extends DB
	{
		
		function add($data){
			$name = $data['name'];
			$price = $data['price'];
			$color = $data['color'];
			$content = $data['content'];
			$isShow = $data['isShow'];
			$created = date("d-m-y");
			$sql = "INSERT INTO chair(name, price,color,content,isShow, created) VALUES('$name', '$price','$color', '$content', '$isShow', '$created')";
			$qr = $this->exQuery($sql);
			return $this->conn->insert_id;
		}

		function getChair(){
			return $this->getAllRecords($table = 'chair');
		}

		function selectChair(){
//            $range = range("A", "Z");
//            $arr = [];
//            for($x = 0; $x<count($range); $x++){
//                    array_push($arr,$range[$x]);
//            }
//            $afterIndex = 3;
//            $newVal= array('Đ');
//
//            $newList = array_merge(array_slice($arr,0,$afterIndex+1), $newVal,array_slice($arr,$afterIndex+1));
////            print_r($newList);

            $arr = ['A','B','C','D','Đ','E','F','G','H','I','K','L','M','N','O','P','Q','R','X','W','S','T','U','V'];
            for ($i=1; $i<=1000; $i++) {

                    $chair = [];
                    // $chair = implode(', ', $arr);
                    for ($i = 0; $i< count($arr) ; $i++){
                        $sql = "SELECT * FROM chair   WHERE name LIKE '%$arr[$i]%' ";
                        $qr =  $this->exQuery($sql);
                        $res = $qr->fetch_all(MYSQLI_ASSOC);

                        array_push($chair,$res);
//

                    }

                    return $chair;



            }

			
		}
		function listProduct(){
		    $sql="SELECT * FROM product as P INNER JOIN category as C ON P.category_id= C.category_id 
                  INNER JOIN  place as PL ON P.place_id=PL.place_id 
                  INNER JOIN image_pro as IP ON P.image_product_id = IP.image_product_id";
             $qr=$this->execute_query($sql);
            return $qr->fetch_all(MYSQLI_ASSOC);
        }
        function DetailProduct($data){
		    $id_pro = $data['id_pro'];
            $sql="SELECT * FROM product as P INNER JOIN category as C ON P.category_id=C.category_id 
                  INNER JOIN  place as PL ON P.place_id=PL.place_id
                  INNER JOIN image_pro as IP ON P.image_product_id = IP.image_product_id
                  WHERE id_pro = $id_pro";
            $qr=$this->execute_query($sql);
            return $qr->fetch_all(MYSQLI_ASSOC);
        }



        function deleteChairAction(){

        }

		function buy($id_chair){
			$sql = "UPDATE  chair SET isShow = 0 WHERE id_chair = $id_chair";
			$qr = $this->exQuery($sql);
			if($qr){

				return true;
			}else {
				return false;
			}
		}
	}
?>