<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SettingResource;

class SettingController extends BaseController
{
    public function settings($key)
    {
        try{
            $setting =  SettingResource::collection(Setting::where('key', $key)->get());
            $setting = $setting->first();
            return $this->sendResponse($setting,"Setting data getting successfully!");

        }catch(Exception $e){
            return $this->sendError($e->getMessage());
        }
    }
}
