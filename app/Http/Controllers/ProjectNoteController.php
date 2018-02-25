<?php

namespace CodeProject\Http\Controllers;


use Illuminate\Http\Request;
use CodeProject\Repositories\ProjectNoteRepository;
use CodeProject\Services\ProjectService;


/**
 * Class ProjectsController.
 *
 * @package namespace CodeProject\Http\Controllers;
 */
class ProjectNoteController extends Controller
{
    /**
     * @var ProjectRepository
     */
    protected $repository;

    /**
     * @var ProjectValidator
     */
    protected $validator;

    /**
     * ProjectsController constructor.
     *
     * @param ProjectRepository $repository
     * @param ProjectValidator $validator
     */
    public function __construct(ProjectNoteRepository $repository, ProjectService $service)
    {
        $this->repository = $repository;
        $this->service  = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        return $this->repository->findWhere(['project_id'=>$id]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProjectCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(Request $request)
    {
        return  $this->service->create($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->repository->find($id);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = $this->repository->find($id);

        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProjectUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(Request $request, $id)
    {
        $this->service->update($request->all(),$id);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repository->find($id)->delete();

    }
}

