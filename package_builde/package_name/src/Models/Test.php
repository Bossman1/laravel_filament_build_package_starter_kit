<?php
namespace PackageBuilde\PackageName\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Test extends Model
{

    use HasFactory;
    protected $guarded = [];
    protected $table = "tests";
    protected $fillable = ['name'];


}
