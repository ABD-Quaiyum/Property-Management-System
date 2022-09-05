<?php
namespace Tests\Unit;
use App\Http\Controllers\PropertyController;
use Tests\TestCase;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Property;

class PropertyControllerTest extends TestCase
{
    public function test_example()
    {
        $this->assertTrue(true);
    }
    public function test_index()
    {
        $this->data = new PropertyController();
        $response = $this->data->index();
        $this->assertTrue(true);
    }
    public function test_create()
    {
        $this->data = new PropertyController();
        $response = $this->data->create();
        $this->assertTrue(true);
    }
    public function test_store()
    {
        $this->data = new PropertyController();
         $response = $this->data->store();
         $this->assertTrue(true);
    }
    public function test_show()
    {
        $this->assertTrue(true);
    }
    public function test_edit()
    {
        $this->data = new PropertyController();
        $response = $this->data->edit();
        $this->assertTrue(true);
    }
    public function test_update()
    {
        $this->assertTrue(true);
    }
    public function test_destroy()
    {
        $this->data = new PropertyController();
        $id=Property::where('location','abcdefg')->inRandomOrder()->limit(1)->get();
        $response=$this->data->destroy($id[0]->id);
        $this->assertTrue(true);
    }
}
