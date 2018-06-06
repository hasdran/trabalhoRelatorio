<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        $faker = Faker::create();

        //nivel_models
        DB::insert('INSERT INTO nivel_models(nome, abreviatura) VALUES (?,?)', array('Ensino médio integrado','EMI'));
        DB::insert('INSERT INTO nivel_models(nome, abreviatura) VALUES (?,?)', array('Nível Superior','GRADUAÇÃO'));
        DB::insert('INSERT INTO nivel_models(nome, abreviatura) VALUES (?,?)', array('Pós Graduação','PÓS'));

        //curso_models
        /*
        DB::insert('INSERT INTO curso_models(nome, abreviatura, id_nivel,tempo, ativo) VALUES (?,?,?,?,?)', array('ANÁLISE E DESENVOLVIMENTO DE SISTEMAS','TADS','1','3','1'));
        DB::insert('INSERT INTO curso_models(nome, abreviatura, id_nivel,tempo, ativo) VALUES (?,?,?,?,?)', array('INFORMATICA','EMI-INFO','1','4','1'));
        DB::insert('INSERT INTO curso_models(nome, abreviatura, id_nivel,tempo, ativo) VALUES (?,?,?,?,?)', array('CIÊNCIA TECNOLOGIA E SOCIEDADE','PPCTS','1','3','1'));
        */

        foreach (range(1,5) as $index) {
            DB::table('curso_models')->insert([
                'nome' => $faker->name,
                'abreviatura' => $faker->word,
                'id_nivel' => $faker->numberBetween($min = 1, $max = 3),
                'tempo' => $faker->randomDigit,
                'ativo' => '1',
            ]);
        }

        //turma_models

        /*
        DB::insert('INSERT INTO turma_models(nome, ano, id_curso, ativo) VALUES (?,?,?,?)', array('INFO15','2015','1','1') );	
        DB::insert('INSERT INTO turma_models(nome, ano, id_curso, ativo) VALUES (?,?,?,?)', array('TADS16','2016','2','1') );
        DB::insert('INSERT INTO turma_models(nome, ano, id_curso, ativo) VALUES (?,?,?,?)', array('PPCTS18','2018','3','1') );
        */

        foreach (range(1,40) as $index) {
            DB::table('turma_models')->insert([
                'nome' => $faker->name,
                'ano' => $faker->year($max = 'now'),
                'id_curso' => $faker->numberBetween($min = 1, $max = 5),
                'ativo' => '1',
            ]);
        }

        //disciplina_models

        foreach (range(1,40) as $index) {
            DB::table('disciplina_models')->insert([
                'nome' => $faker->name,
                'abreviatura' => $faker->word,
                'carga_horaria' => $faker->randomDigit,
                'id_curso' => $faker->numberBetween($min = 1, $max = 5),
                'periodo' => $faker->randomElement($array = array ('BIMESTRAL','TRIMESTRAL','SEMESTRAL','ANUAL')),
                'ativo' => '1',
            ]);
        }

        //conteudo_models

        foreach (range(1,100) as $index) {
            DB::table('conteudo_models')->insert([
                'nome' => $faker->name,
                'data' => $faker->dateTime($max = 'now', $timezone = null),
                'id_disciplina' => strval($faker->numberBetween($min = 1, $max = 40)),
                'bimestre' => $faker->randomElement($array = array ('1','2','3','4')),
                'ativo' => '1',
            ]);
        }

        //atividade_models

        foreach (range(1,100) as $index) {
            DB::table('atividade_models')->insert([
                'nome' => $faker->name,
                'tipo' => $faker->randomElement($array = array ('TRABALHO','AVALIACAO')),
                'prazo' => $faker->dateTime($max = 'now', $timezone = null),
                'id_disciplina' => $faker->numberBetween($min = 1, $max = 40),
                'bimestre' => $faker->randomElement($array = array ('1','2','3','4')),
                'ativo' => '1',
            ]);
        }

        
    }
}
