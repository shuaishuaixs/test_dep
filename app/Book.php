<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $table = 'book';

    protected $fillable = array('name','num');

    // protected $timestamps = false;

    public function getData(){
        // $data = array('name'=>'the king of forest');
        // $result = self::create($data);
        $result = $this->find(1);
        return $result;
    }
}
