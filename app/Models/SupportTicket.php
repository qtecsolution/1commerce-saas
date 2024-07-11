<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportTicket extends Model
{
  use HasFactory;

  protected $guarded = [];

  // function to support ticket to get user details 
  public function usertDetails()
  {
    return $this->belongsTo(User::class, 'user_id', 'id');
  }

  public function messages()
  {
    return $this->hasMany(SupportTicketMessage::class, 'support_ticket_id', 'id');
  }

  public function support()
  {
    return $this->belongsTo(User::class, 'replied_by', 'id');
  }
}
