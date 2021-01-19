<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;
use App\Order;
class Pay extends Model
{
    public function delete() {
       parent::delete();

    }

    public function order()
    {
       return $this->hasMany(Order::class);
    }




}
