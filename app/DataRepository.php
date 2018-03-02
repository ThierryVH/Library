<?php

namespace App;

use App\Models\Book;
use App\Models\User;

class DataRepository {

    public function getData()
    {
        $data = array();

        $data['books'] = Book::all();

        $data['users'] = User::all();

        return $data;
    }

}
