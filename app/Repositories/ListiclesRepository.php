<?php
namespace App\Repositories;
use App\Listicle;
class ListiclesRepository
{
    //return all listicle for authenticated user
    public function userListicle()
    {
        return auth()->user()->listicles;
    }


    //locate listicle by id
    public function findById($listicleId)
    {
        $listicle = Listicle::where('id', $listicleId)->firstOrFail();
        //this will be handled by policy
        if($listicle->user_id != auth()->user()->id)
        {
            return null;
        }
        else
        {
            return  $listicle;
        }
    }


    //update Listicle
    public function update($listicleId)
    {
        $listicle= Listicle::where('id', $listicleId)->firstOrFail();
        //validation using reqquest()->all()
        //update
        $listicle->update(request()->only('title'));
    }



    //soft delete
    public function softDelete($listicleId)
    {
        $listicle= Listicle::where('id', $listicleId)->delete();
    }


}//class

//implements ListiclesRepositoryInterface
