<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Book;

class TestController extends Controller
{
    //
    public function index(){
        echo 'kkkkkkkkkkkk';
        // $re = DB::select('select * from book');
        // $re = DB::insert('insert into book (id,name,num) values(?,?,?)',[1,'super power',1]);
        // $book = new Book();
        // $data = array('name' => 'the king of world');
        // Book::create($data);
        // dd(Book::find(1)->toArray());
        // $re = Book::where('name','=','the king of forest')->update(['name'=>'test']);
        // dd($re);
        // $test = '' ?? 'bc';
        // dd($test);
    }
}
