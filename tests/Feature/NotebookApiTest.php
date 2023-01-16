<?php

namespace Tests\Feature;

use App\Http\Controllers\Api\NotebookController;
use App\Models\Notebook;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class NotebookApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_create_notebook()
    {

        $note = [
            'name' => 'Murat update',
            'surname' => 'Maslow update',
            'fname' => 'Alekseyewich',
            'company' => 'TurkmenPortal',
            'phone' => 62014085,
            'email' => 'ereshjumayew@gmail.com',
            'born_date' => '1995.02.19',
            'image' => 'photo'
        ];

        $note = $this->postJson('api/v1/notebook', $note);
            $note->assertStatus(200);

    }
    public function test_can_show_notebook()
    {
        $note = $this->getJson('api/v1/notebook/15');
        $note->assertStatus(200);
    }

    public function test_can_show_notebooks()
    {
        $notes = $this->getJson('api/v1/notebook');
        $notes->assertStatus(200);
    }
    public function test_can_edit_notebooks()
    {
        $note = [
            'name' => 'updated name',
            'surname' => 'updated surname',
            'fname' => 'updated fname',
            'company' => 'updated company',
            'phone' => 62014085,
            'email' => 'ereshjumayew@gmail.com',
            'born_date' => '1995.02.19',
            'image' => 'photo'
        ];

        $note = $this->putJson('api/v1/notebook/23', $note);
        $note->assertStatus(200);
    }

    public function test_can_delete_notebooks()
    {
        $note = $this->delete('api/v1/notebook/6');
        $note->assertStatus(200);
    }

}
