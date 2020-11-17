<?php

    namespace App\Services;
    use App\Traits\ConsumesExternalService;
    use App\Services\User2Service;

    class User2Service{
        
    use ConsumesExternalService;
    /**
     * The base uri to consume the User2 Service
     * @var string
     */
    public $baseUri;
    
    //GET localhost:8001/users in site2
    public function __construct(){
        $this->baseUri =config('services.users2.base_uri');
    }
    public function obtainUsers2()
    {
        return $this->performRequest('GET','/users');
    }
    public function addUsers2($data)
    {
        return $this->performRequest('POST', '/users', $data);
    }
    public function showUsers2($id){
        return $this->performRequest('GET', "/users/{$id}");
    }
    public function updateUsers2($data,$id)
    {
        return $this->performRequest('PUT', "/users/{$id}", $data);
    }
    public function deleteUsers2($id)
    {
        return $this->performRequest('DELETE', "/users/{$id}");
    }
}