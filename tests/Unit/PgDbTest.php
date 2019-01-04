<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\DB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PgDbTest extends TestCase
{
    use RefreshDatabase;


    public function testBasic()
    {
        DB::table('someTable')
            ->insert(
            [
                'someBool' => true
            ]
        );

        $this->assertTrue(true);
    }

    public function testWithEmulatePrepares()
    {
        DB::connection()->getPdo()->setAttribute(\PDO::ATTR_EMULATE_PREPARES, true);
        DB::table('someTable')
            ->insert(
                [
                    'someBool' => true
                ]
            );
        $this->assertTrue(true);
    }

}
