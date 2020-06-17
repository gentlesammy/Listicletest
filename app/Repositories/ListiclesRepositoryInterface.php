<?php
namespace App\Repositories;
interface ListiclesRepositoryInterface
{
    public function userListicle();
    public function findById($listicleId);
    public function update($listicleId);
    public function softDelete($listicleId);

}
