<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use User;


    class Page extends Model
{
	protected $guarded =[];

	public static function findBySlug($slug)
	{
		return new Page([
			'title' => Str::title(str_replace('-' , ' ',  $slug)),
			'content' => 'fbhgughegogogoggguighfighgghigh',
			'slug' => $slug,
			'user'=>User::orderBY('id','desc')->get();
					]);
	}
}
