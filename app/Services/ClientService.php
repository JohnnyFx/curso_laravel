<?php
/**
 * Created by PhpStorm.
 * User: João
 * Date: 18/02/2018
 * Time: 15:06
 */

namespace CodeProject\Services;


use CodeProject\Repositories\ClientRepository;
use CodeProject\Validators\ClientValidator;
use Prettus\Validator\Exceptions\ValidatorException;

class ClientService
{
    protected $repository;
    protected $validator;
    /**
     * ClientService constructor.
     * @param $repository
     */
    public function __construct(ClientRepository $repository,ClientValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;

    }

    public function create(array $data){
        try{
            $this->validator->with($data)->passesOrFail();
            $this->repository->create($data);
        }catch (ValidatorException $e) {
            return [
                'error' => true,
                'message' =>$e->getMessageBag()
            ];
        }
    }

    public function update(array $data,$id){
        $this->repository->update($data,$id);

    }


}