<?php

use App\Models\User;
use function Pest\Laravel\{actingAs, get};
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;

uses(RefreshDatabase::class);

/* beforeEach(fn () => User::factory()->create()); */

it('Creación de rol', function () {
    /* $rol = */
    $id = DB::table('roles')->insertGetId([
        'rol' => 'residente',
        'desc_rol' => 'Residente de la propiedad horizontal',
    ]);

    $isTrue = $id > 0;

    $this->assertTrue($isTrue);
});

/* it('Creación de usuario', function ($id) {

    $user = DB::table('users')->insert([
        'name' => 'Jorge Osorio',
        'email' => 'jorgearmanbolivar' . '@hotmail.com',
        'rol_id' => $id,
        'password' => ''
    ]);

    $this->assertTrue($user);
});
 */
it('Página principal carga', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
