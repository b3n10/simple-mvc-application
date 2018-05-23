<?php
// handles logic in the Model (MVC)

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent {
	public	$name,
					// to choose no timestamp on db
					// Eloquent automatically fills timestamps (created_at and updated_at) if cols are present on database table
					$timestamp = [];

	// only include fields (cols) needed to manage on db
	// and to prevent MassAssignmentException error
	protected $fillable = ['username', 'email'];
}
