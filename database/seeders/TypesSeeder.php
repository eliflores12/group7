<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            "Comida japonesa",
            "Comida francesa",
            "Parrilla/Asador",
            "Comida vegetariana/vegana",
            "Marisquería",
            "Comida tailandesa",
            "Cafetería/Brunch",
            "Restaurante de tapas",
            "Comida hindú",
            "Restaurante de sushi",
            "Pizzería",
            "Steakhouse",
            "Comida mediterránea",
            "Comida brasileña",
            "Comida española",
            "Comida griega",
            "Comida coreana",
            "Comida vietnamita",
            "Comida peruana",
            "Comida árabe/Medio Oriente",
            "Comida rusa",
            "Comida alemana",
            "Comida africana",
            "Comida caribeña",
            "Comida argentina",
            "Comida colombiana",
            "Comida venezolana",
            "Comida polaca"
        ];

        Type::factory(count($types))->sequence(fn ($sqn) => [
            'name' => $types[$sqn->index]
        ])->create();
    }
}
