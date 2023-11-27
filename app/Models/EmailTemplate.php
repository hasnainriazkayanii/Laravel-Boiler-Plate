<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\eException;
use Exception;
class EmailTemplate extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','subject','tags','content'
    ];

    protected $auditInclude = [
        'name','subject','tags','content'
    ];
    public function parse($data)
    {
        // echo '<pre>',print_r($data);exit;
        // echo $this->content;exit;
        $parsed = preg_replace_callback('/{{(.*?)}}/', function ($matches) use ($data) {
            list($shortCode, $index) = $matches;
            $index = trim($index);
            // echo $index;exit;
            if(isset($data[$index]) ) {
                return $data[$index];
            }

        }, $this->content);
        // echo $parsed;exit;
        return $parsed;
    }
}
