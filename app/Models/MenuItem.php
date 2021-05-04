<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
	/*public function categories()
    {
        return $this->hasMany(Category::class);
    }*/


	public function children()
	{
	    return $this->hasMany(MenuItem::class, 'parent_id', 'id')->with('children');
	}

	/*public function children()
	{
		// return $this->hasMany(Category::class)->with('categories');
	    return $this->hasMany(MenuItem::class, 'parent_id', 'id')->with('child');
	    // ()->with('allChildren');
	}*/


}
