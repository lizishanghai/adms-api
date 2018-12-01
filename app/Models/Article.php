<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Article extends Model
{
    use SoftDeletes;
    /**
     * 不允许赋值的字段
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * 允许赋值的字段
     *
     * @var array
     */
    protected $fillable = ['category_id', 'title', 'content'];
}
