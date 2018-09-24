<?php
namespace App\Modules\Backend\Authorize;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Backend\Authorize\Models;

class AuthorizeController extends Controller{
    public function __construct(){
       #parent::__construct();
    }
    public function index(Request $request){
		$AuthorizeModel = new AuthorizeModels();
		$getFind = $AuthorizeModel->getFind();
		$data = array();
		$data['datas'] = $getFind;  
        return view('Authorize::index',$data);
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
		$AuthorizeModel = new AuthorizeModels();
		$save = $AuthorizeModel->saves($content);
		#end
		#region Write log
		$date =  gmdate("YmdHis", time() + 0 * 3600);
		//logfile
		$handle = fopen('logfile/'.$date.'.txt', 'a+');
        fwrite($handle, $content);
        fclose($handle);
		#end
	}
	*/
}