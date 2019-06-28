<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  public function getTitleAndRating()
  {
      $titleAndRating=[$this->title, $this->rating];
    return $titleAndRating;

  }
}
