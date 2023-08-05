<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelBookingRegistration extends Model
{
    use HasFactory;

    protected $table = "hotel_booking_registrations";
    protected $fillable = ["name","email","age","phone","bookingdate","abookingdate","aadhar","image"];
}
