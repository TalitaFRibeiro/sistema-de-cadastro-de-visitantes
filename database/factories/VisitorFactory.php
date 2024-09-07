<?php

namespace Database\Factories;


use App\Models\Visitor;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Visitor>
 */

require_once 'vendor/fakerphp/faker/src/autoload.php';
//require_once 'vendor/autoload.php';

class VisitorFactory extends Factory
{
    /*private \Faker\Generator $faker;*/

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    //private $faker;

    public function definition(): array
    {

        $faker = Faker\Factory::create('pt-BR');

        return [
            'name' => $faker->unique()->name(),
            'cpf' => $faker->unique()->cpf()
            ];
    }
}
