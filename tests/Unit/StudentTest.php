<?php

namespace Tests\Unit;

use Tests\TestCase;

class StudentTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_student_index(): void
    {

        $respone = $this->call('GET','/api/students',[]);
        $respone->assertStatus($respone->status(),200);
    }
}
