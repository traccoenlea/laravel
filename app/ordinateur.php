<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordinateur extends Model
{
    public $table = 'ordinateur';

    public function vendeurs() {
        return $this->belongsToMany('App\Vendeurs', 'achats', 'id_ordinateur', 'id_vendeur') ->withPivot('prix', 'url');
<<<<<<< HEAD

=======
>>>>>>> a74920258784637efe87ab311eef7d638cdbf400
    }
}