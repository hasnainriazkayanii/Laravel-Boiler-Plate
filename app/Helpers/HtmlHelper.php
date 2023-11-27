<?php


function CreateTableActionButton($route_name, $icon, $class, $title, $item_id)
{
    return '<a href="'.$route_name.'" data-toggle="tooltip"  data-id="'.$item_id.'" data-original-title="'.$title.'" class="dropdown-item '.$class.'"><i class="'.$icon.'"></i>&nbsp' .$title.' </a>';
}
function CreateTableActionButtonSimple($route_name,$icon,$class,$title,$item_id)
{
  return   '<a  href="'.$route_name.'"  class="btnAction '.$class.'" data-id="'.$item_id.'" data-original-title="'.$title.'"><i class="'.$icon.'"></i>&nbsp' .$title.' </a>';
}

function sanitize_file_name( $filename ) {
    $filename_raw = $filename;
    $special_chars = array(".", "?", "[", "]", "/", "\\", "=", "<", ">", ":", ";", ",", "'", "\"", "&", "$", "#", "*", "(", ")", "|", "~", "`", "!", "{", "}");
    $filename = str_replace($special_chars, '', $filename);
    $filename = preg_replace('/[\s-]+/', '-', $filename);
    $filename = trim($filename, '.-_');
    return $filename;
}
function formatMoney ($amount) {
    return  '€ '.number_format($amount, 2);
}
function currencySymbol()
{
    return  '€ ';
}

function getSettings($key)
{
    $data=setting($key);
    if($data)
    {
        $data=json_decode($data);
    }
    else{
        $data='';
    }
    return $data;
}
function getCurrentUserId()
{
    return auth()->guard("customer")->user()->id;
}

function getCurrentUserCredits()
{
    return auth()->guard("customer")->user()->credits > 0?auth()->guard("customer")->user()->credits :0;
}

function getSettingsFields($key,$fieldName)
{
    $data=setting($key);
    if($data)
    {
        $data=json_decode($data);
        $data->$fieldName;
    }
    else{
        $data->$fieldName='';
    }
    return $data->$fieldName;
}
function getSetting($key)
{
    $data=setting($key);
    return $data;
}
function getUserField($fieldName)
{
    return auth()->guard("customer")->user()->$fieldName;
}
