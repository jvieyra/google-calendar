<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GoogleCalendar;
use Spatie\GoogleCalendar\Event;

//importar carbon
use \Carbon\Carbon;

class GoogleCalendarController extends Controller
{
    //
  
  
    public function test(){
      
      $dateIni = Carbon::now();
      $dateEnd = Carbon::now()->addHour();
      //create a new event
      //$event = new Event;
   
      
      //event calendar
      $event = new Event;
      $event->name = 'A new Event';
      $event->startDateTime = $dateIni;
      $event->endDateTime = $dateEnd;
      $event->addAttendee(['email'=>'vieyrapez@gmail.com']);
      $event->save();
      return "w";
      
    }
  
  
  

}
