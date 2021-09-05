<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
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
    public function workshops()
    {
        return $this->belongsToMany(Workshop::class);
    }
}
