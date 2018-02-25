<?php
/**
 * Created by PhpStorm.
 * User: João
 * Date: 18/02/2018
 * Time: 15:11
 */

namespace CodeProject\Validators;

use Prettus\Validator\LaravelValidator;
class ClientValidator extends LaravelValidator
{
    protected  $rules = [

        'name' => 'required|max:255',
        'responsible' =>  'required|max:255',
        'email' => 'required|email',
        'phone' => 'required',
        'address' => 'required'
    ];

}