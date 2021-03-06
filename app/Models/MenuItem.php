<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
	 /**
     * The guarded attributes on the model.
     *
     * @var array
     */
	protected $guarded = [];


	 /**
     * Get the workshops for the event.
     */
    public function menu()
    {
        return $this->hasOne(MenuItem::class);
    }
}
