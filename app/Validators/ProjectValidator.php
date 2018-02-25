<?php
/**
 * Created by PhpStorm.
 * User: João
 * Date: 18/02/2018
 * Time: 15:11
 */

namespace CodeProject\Validators;

use Prettus\Validator\LaravelValidator;
class ProjectValidator extends LaravelValidator
{
    protected  $rules = [

        'owner_id' => 'required|integer',
        'client_id' =>  'required|integer',
        'name' => 'required',
        'progress' => 'required',
        'status' => 'required',
        'due_date' => 'required'
    ];

}