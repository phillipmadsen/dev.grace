<?php namespace Grace\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class FormPost
 * @author Phillip Madsen
 */
class FormPost extends Model {

    public $table = 'form_posts';
    public $fillable = ['sender_name_surname', 'sender_email', 'sender_phone_number', 'subject', 'message'];
}
