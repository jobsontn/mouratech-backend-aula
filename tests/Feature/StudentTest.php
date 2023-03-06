<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use App\Models\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StudentTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_list_all_students(){
        // Arrange
        Student::factory($total = $this->faker->numberBetween(100, 200))->create();
        // Act
        $response = $this->json('GET', route('students.index'));
        // Assert
        $response
            ->assertOk()
            ->assertJsonPath('meta.total',$total);
    }

    public function test_create_one_student(){
        // Arrange
        $studentNew = Student::factory()->make();
        // Act
        $response = $this->json('POST', route('students.store'), $studentNew->toArray());
        // Assert
        $response->assertCreated();
        $this->assertDatabaseHas('students', $studentNew->getAttributes());
    }

    public function test_read_one_student(){
        // Arrange
        $student = Student::factory()->create();
        // Act
        $response = $this->json('GET', route('students.show', $student));
        // dd($student->toArray(), $response->json());
        // Assert
        $response
            ->assertOk()
            ->assertJsonPath('data.enrollment',$student->enrollment)
            ->assertJsonPath('data.CPF',$student->CPF)
            ->assertJsonPath('data.name',$student->name);
            //->assertJson($student->toArray());
    }

    public function test_update_one_student(){
        // Arrange
        $student = Student::factory()->create();
        $studentNew = Student::factory()->make();
        // Act
        $response = $this->json('PUT', route('students.update', $student), $studentNew->toArray());
        // Assert
        $response->assertOk();
        $this->assertDatabaseHas('students', $studentNew->getAttributes());
    }

    public function test_delete_one_student(){
        // Arrange
        $student = Student::factory()->create();
        // Act
        $response = $this->json('DELETE', route('students.destroy', $student));
        // Assert
        $response->assertNoContent();
        $this->assertDatabaseMissing('students', $student->getAttributes());
    }

}
