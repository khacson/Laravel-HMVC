<?php

namespace App\Modules\Backend\Authorize;
use Illuminate\Database\Eloquent\Model;

class AuthorizeModels extends Model {
    protected $table = 'print_functiontest';
	public function getList(){
		$users = \DB::table($this->table)
					    ->orderBy('id', 'desc')
						->get();
		return $users;
	}
	public function getFind()
	{
		return 111;
	}
	/*public function saves($content){
		$object = json_decode($content);
		$datas = $object->data;
		$machine_sn = $object->stationsn;
		$macaddress = $object->macaddress;
		$db = 0;
		foreach($datas as $item){
			$arrDevice = array();
			$arrDevice['machine_sn'] = $machine_sn;
			$arrDevice['macaddress'] = $macaddress;
			$arrDevice['code'] = $item->code;
			$arrDevice['port_index'] = $item->port_index;
			
			$arrDevice['manufacturer'] = $item->manufacturer;
			$arrDevice['product'] = $item->model_name;
			$arrDevice['product_type'] = $item->product_type;
			$arrDevice['model'] = $item->model;
			
			$arrDevice['imei_esn'] = $item->imei_esn;
			$arrDevice['meid'] = $item->meid;
			$arrDevice['serial_number'] = $item->serial_number;
			$arrDevice['phone_number'] = $item->phone_number;
			$arrDevice['os_type'] = $item->os_type;
			$arrDevice['os_version'] = $item->os_version;
			
			$arrDevice['region'] = $item->region;
			$arrDevice['capacity'] = $item->capacity;
			$arrDevice['udid'] = $item->udid;
			$arrDevice['ecid'] = $item->ecid;
			$arrDevice['fmi_status'] = $item->fmi_status;
			$arrDevice['battery'] = $item->battery;
			$arrDevice['color'] = $item->color;
			$arrDevice['carrier'] = $item->carrier;
			$arrDevice['baseband_version'] = $item->baseband_version;
			$arrDevice['bluetooth_address'] = $item->bluetooth_address;
			$arrDevice['wifi_address'] = $item->wifi_address;
			$arrDevice['activation_state'] = $item->activation_state;
			$arrDevice['jailbreak'] = $item->jailbreak;
			$arrDevice['cycle_count'] = $item->cycle_count;
			$arrDevice['frp_status'] = $item->frp_status;
			$arrDevice['passcode_status'] = $item->passcode_status;
			$arrDevice['elapsed_time'] = $item->elapsed_time;
			$arrDevice['result'] = $item->result;
			$arrDevice['sync_status'] = $item->sync_status;
			$arrDevice['username'] = $item->user_name;
			$arrDevice['datecreate'] = gmdate("Y-m-d H:i:s", time() + 0 * 3600);
			$arrDevice['localtime'] = $item->datecreated;
			$db = \DB::table($this->table)->insert($arrDevice);
		}
		return $db;
	}*/
}