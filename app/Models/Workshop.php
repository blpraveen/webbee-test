<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Workshop extends Model
{
	 /**
     * The guarded attributes on the model.
     *
     * @var array
     */
	protected $guarded = [];


	 /**
     * Get the Event associated with the workshop.
     */
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
