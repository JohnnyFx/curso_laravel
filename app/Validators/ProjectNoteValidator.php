<?php
/**
 * Created by PhpStorm.
 * User: João
 * Date: 18/02/2018
 * Time: 15:11
 */

namespace CodeProject\Validators;

use Prettus\Validator\LaravelValidator;
class ProjectNoteValidator extends LaravelValidator
{
    protected  $rules = [

        'project_id' => 'required|integer',
        'title' =>  'required|integer',
        'note' => 'required'
    ];

}