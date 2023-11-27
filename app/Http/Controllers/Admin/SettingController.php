<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Akaunting\Setting;
// use App\Models\Setting;
use Response;

class SettingController extends Controller
{
    public function index() {
        $companyName=setting('company_name','default');
        // echo $companyName;exit;
        $companyEmail=setting('company_email','default');
        $companyPhone=setting('company_phone','default');
        $companyCity=setting('company_city','default');
        $companyState=setting('company_state','default');
        $companyAddress=setting('company_address','default');
        $companyZip=setting('company_zip_code','default');
        return view('admin.site_settings.index',compact('companyName','companyEmail','companyPhone','companyCity','companyState','companyAddress','companyZip'));
        // return view('admin.site_settings.index');
    }
    public function store(Request $request){
        $arr=$request->all();
        foreach($arr as $key=> $val)
        {
            if($key=="_token")
            continue;
            $insert=array('value'=>$val,'key'=>$key);
            setting([$key=>$val]);
        }
        setting()->save();
        return redirect()->route('admin.settings')->with('status',__('admin.messages.success.update_successfully'));
    }

    public function timeTable()
    {
        $data=setting('work-time-table','default');
        if($data){
            $data=json_decode($data);
        }
        else{
            $data='';
        }
        // echo '<pre>',print_r($data);exit;
        return view('admin.site_settings.time_table',compact('data'));
    }
    public function emailConfig()
    {
        $data=setting('email-configs','default');
        if($data){
            $data=json_decode($data);
        }
        else{
            $data='';
        }
        // echo '<pre>',print_r($data);exit;
        return view('admin.site_settings.email_settings',compact('data'));
    }
    public function paypalConfig()
    {
        $data=setting('paypal-configs','default');
        if($data){
            $data=json_decode($data);
        }
        else{
            $data='';
        }
        // echo '<pre>',print_r($data);exit;
        return view('admin.site_settings.paypal_settings',compact('data'));
    }
    public function creditConfig()
    {
        $data=setting('credit-configs');
        if($data){
            $data=json_decode($data);
        }
        else{
            $data='';
        }
        // echo '<pre>',print_r($data);exit;
        return view('admin.site_settings.credit_settings',compact('data'));
    }
    public function saveSettings(Request $request){
        $data=$request->all();
        $key=$data["slug"];
        unset($data["_token"]);
        unset($data["slug"]);
        $insert=array('value'=>json_encode($data),'key'=>$key);
        setting([$key=>json_encode($data)]);
        setting()->save();
        return redirect()->back()->with('status',__('admin.messages.success.update_successfully'));
    }
    public function emailTemplates($template_key)
    {
        $template=setting('basic_template');
        $slug=$template_key;
        $data=setting($template_key);
        if($data)
        {
            $data=$data;
        }
        else{
            $data=$template;
        }
        return view('admin.site_settings.email_template',compact('data','slug'));

    }
    public function saveTemplates(Request $request)
    {
        $slug=$request->slug;
        $data=$request->description;
        setting([$slug=>$data]);
        setting()->save();
        return redirect()->back()->with('status',__('admin.messages.success.update_successfully'));
    }


}

