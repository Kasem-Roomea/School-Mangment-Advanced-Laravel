<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Section extends Model
{
    use HasTranslations;
    public $translatable = ['Name'];
    protected $fillable=['Name','Grades_id','classrooms_id' , 'Status'];

    protected $table = 'sections';
    public $timestamps = true;


    // علاقة بين الاقسام والصفوف لجلب اسم الصف في جدول الاقسام

    public function My_classs()
    {
        return $this->belongsTo('App\Models\Classroom', 'classrooms_id');
    }

    //العلاقة بين الصفوف والمعلمين
    public function Teachers()
    {
        return $this->belongsToMany('App\Models\teacher', 'section_has_teachers' );
    }

}
