<?php
namespace App\Modules\Frontend\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Frontend\Home\Models;

class HomeController extends Controller{
    public function __construct(){
       #parent::__construct();
    }
    public function index(Request $request){
		$homeModel = new HomeModels();
		$getFind = $homeModel->getFind();
		$data = array();
		$data['datas'] = $getFind;  
        return view('Home::index',$data);
    }
	/*public function getData(){
		ob_clean();
		$string = file_get_contents('php://input'); 
		#region decode
		$key = 'print@label#123#';
		$iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_ECB);
		$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
		$content = trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, base64_decode($string), MCRYPT_MODE_ECB));
		#end
		#region Write to database
		$homeModel = new HomeModels();
		$save = $homeModel->saves($content);
		#end
		#region Write log
		$date =  gmdate("YmdHis", time() + 0 * 3600);
		//logfile
		$handle = fopen('logfile/'.$date.'.txt', 'a+');
        fwrite($handle, $content);
        fclose($handle);
		#end
	}
	//Note
	public function setData(){ 
		//Json String
		$content = '{ "action" : "", "checksum" : 0, "command" : 9, "data" : [ { "activation_state" : "", "baseband_version" : "7.60.00", "battery" : "17", "bluetooth_address" : "78:31:c1:6d:4f:74", "capacity" : "64GB", "carrier" : "Mobifone_vn", "code" : "ak47S9qtyqkkENGQv94ohb+r8T2+v1NJBvJEWEy+1+iSVg8BPp7kTfwzqGA+2h6QfHZ195hcr9vxSxaQQOSmJQ==", "color" : "Gold", "cycle_count" : "345", "datecreated" : "2017-06-28 22:00:18", "delif" : "0", "ecid" : "2981464280084", "elapsed_time" : "", "fmi_status" : "ON", "frp_status" : "OFF", "full_name" : "An", "id" : "43", "imei_esn" : "358812051246698", "jailbreak" : "", "manufacturer" : "Apple", "meid" : "35881205124669", "model" : "ME349LL/A", "model_name" : "iPhone 5S GSM", "os_type" : "iOS", "os_version" : "10.3.2", "passcode_status" : "", "phone_number" : "NO", "port_index" : "1", "product_id" : "", "product_type" : "iPhone6,1", "region" : "", "result" : "{ \"currentCapacity\" : \"0\", \"designcapacity\" : \"1550\", \"maxCapacity\" : \"1400\" }", "serial_number" : "DNPM37P8FNJT", "sync_status" : "0", "udid" : "26dc5d16305a608bfbbd570132540411606bfa7d", "user_id" : "8", "user_name" : "an", "vendor_id" : "", "wifi_address" : "78:31:c1:6d:4f:73" } ], "is_finished" : 1, "key" : 1153240355, "modelsystem" : 1, "process" : "{ \"FMI\" : \"passed\", \"active\" : \"N/A\", \"erase\" : \"N/A\", \"install\" : \"passed\", \"printlabel\" : \"passed\" }", "prversion" : 4, "stationsn" : "800000001","macaddress":"150:E5:49:59:D1:48", "status" : 0 }';
		//Struct Table
		
		CREATE TABLE `print_device_log` (
			  `id` int(11) NOT NULL AUTO_INCREMENT,
			  `code` char(150) DEFAULT NULL,
			  `port_index` char(70) DEFAULT NULL,
			  `manufacturer` char(70) DEFAULT NULL,
			  `product` char(30) DEFAULT NULL,
			  `product_type` char(50) DEFAULT NULL,
			  `model` char(30) DEFAULT NULL,
			  `imei_esn` char(30) DEFAULT NULL,
			  `meid` char(30) DEFAULT NULL,
			  `serial_number` char(30) DEFAULT NULL,
			  `phone_number` char(30) DEFAULT NULL,
			  `os_type` char(30) DEFAULT NULL,
			  `os_version` char(50) DEFAULT NULL,
			  `region` char(50) DEFAULT NULL,
			  `capacity` char(30) DEFAULT NULL,
			  `color` char(30) DEFAULT NULL,
			  `carrier` char(50) DEFAULT NULL,
			  `udid` char(50) DEFAULT NULL,
			  `ecid` char(30) DEFAULT NULL,
			  `fmi_status` char(30) DEFAULT NULL,
			  `battery` char(50) DEFAULT NULL,
			  `cycle_count` char(50) DEFAULT NULL,
			  `baseband_version` char(30) DEFAULT NULL,
			  `bluetooth_address` char(30) DEFAULT NULL,
			  `wifi_address` char(30) DEFAULT NULL,
			  `activation_state` char(50) DEFAULT NULL,
			  `jailbreak` char(50) DEFAULT NULL,
			  `frp_status` char(50) DEFAULT NULL,
			  `passcode_status` char(50) DEFAULT NULL,
			  `elapsed_time` char(30) DEFAULT NULL,
			  `result` varchar(2000) DEFAULT NULL,
			  `username` char(50) DEFAULT NULL,
			  `machine_sn` int(11) DEFAULT NULL,
			  `macaddress` char(30) DEFAULT NULL,
			  `sync_status` tinyint(1) DEFAULT NULL,
			  `localtime` datetime DEFAULT NULL,
			  `datecreate` datetime DEFAULT NULL,
			  `isdelete` tinyint(1) DEFAULT '0',
			  PRIMARY KEY (`id`)
			) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
		
	}*/
}