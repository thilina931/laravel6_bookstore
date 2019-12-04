<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProjectsTest extends TestCase
{
    use WithFaker, RefreshDatabase;


        public function test_a_admin_can_add_a_book()
       {
           $this->withoutExceptionHandling();

           $attributes =[
               'category' => $this->faker->sentence,
               'name' => $this->faker->sentence,
               'discription' => $this->faker->paragraph
           ];
           $this->post('/books',$attributes);

           $this->assertDatabaseHas('books');

       }

}
