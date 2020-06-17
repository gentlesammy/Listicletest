<?php

namespace App\Http\Controllers;
use App\Repositories\ListiclesRepository;
use Illuminate\Http\Request;
use App\Listicle;

class ListiclesController extends Controller
{

    private $listicles;
    public function __construct(ListiclesRepository $listicles){
        $this->listicles = $listicles;
        $this->middleware('auth');
    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listicles = $this->listicles->userListicle();
        return $listicles;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return create listicle form
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($listicleId)
    {
        $listicle = $this->listicles->findById($listicleId);
        $this->authorize('view', $listicle);
        return $listicle;
        //return view along with  $listicle
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('update', $listicle);
        //return form view for editing
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $listicleId)
    {
        //
        $this->listicles->update($listicleId);
        return redirect('/listicles/'.$listicleId.'/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($listicleId)
    {
        $this->listicles->softdelete($listicleId);
        return redirect('/listicles');
    }
}
