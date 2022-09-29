<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;

class EventoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('eventos')->insert([
            [
                "nome" => "Coletivo Tempo de Teatro",
                "responsavel" => "rodriguslima420",
                "local" => "Live",
                "banner" => "/imgTeste/teste3.jpeg",
                "descricao" => "Hoje encerra o nosso último dia de festival, vocês estão prontos pra uma programação cheia de diversidade? Então confere nossa programação de quarta-feira 09/12",
                "data" => date("Y-m-d H:i:s", strtotime("2020-12-09 17:00:00")),
            ],
            [
                "nome" => "Banda MOA - Live: Música Ocidental da Amazônia",
                "responsavel" => "boqueminimacre",
                "local" => "MOA: Cumbias e Baques",
                "banner" => "/imgTeste/teste3.jpeg",
                "descricao" => "Hoje encerra o nosso último dia de festival, vocês estão prontos pra uma programação cheia de diversidade? Então confere nossa programação de quarta-feira 09/12",
                "data" => date("Y-m-d H:i:s", strtotime("2020-12-09 17:00:00")),
            ],
            [
                "nome" => "Geovanne Sax",
                "responsavel" => "Geovanne Sax",
                "local" => "Live",
                "banner" => "/imgTeste/teste3.jpeg",
                "descricao" => "Hoje encerra o nosso último dia de festival, vocês estão prontos pra uma programação cheia de diversidade? Então confere nossa programação de quarta-feira 09/12",
                "data" => date("Y-m-d H:i:s", strtotime("2020-12-09 19:00:00")),
            ],
            [
                "nome" => "Grupo do Palhaço Tenorino GPT",
                "responsavel" => "GPT",
                "local" => "Live",
                "banner" => "/imgTeste/teste4.jpeg",
                "descricao" => "Hoje encerra o nosso último dia de festival, vocês estão prontos pra uma programação cheia de diversidade? Então confere nossa programação de quarta-feira 09/12",
                "data" => date("Y-m-d H:i:s", strtotime("2020-12-09 20:00:00")),
            ],
            [
                "nome" => "Duda Modesto",
                "responsavel" => "Duda Modesto",
                "local" => "Live",
                "banner" => "/imgTeste/teste8.jpeg",
                "descricao" => "Hoje encerra o nosso último dia de festival, vocês estão prontos pra uma programação cheia de diversidade? Então confere nossa programação de quarta-feira 09/12",
                "data" => date("Y-m-d H:i:s", strtotime("2020-12-09 20:00:00")),
            ],
            [
                "nome" => "Mestre Aryson Fernandes",
                "responsavel" => "Mestre Aryson Fernandes",
                "local" => "Live",
                "banner" => "/imgTeste/teste6.jpeg",
                "descricao" => "Hoje encerra o nosso último dia de festival, vocês estão prontos pra uma programação cheia de diversidade? Então confere nossa programação de quarta-feira 09/12",
                "data" => date("Y-m-d H:i:s", strtotime("2020-12-09 20:00:00")),
            ],
            [
                "nome" => "Henrique do Vale",
                "responsavel" => "Henrique do Vale",
                "local" => "Live",
                "banner" => "/imgTeste/teste2.jpeg",
                "descricao" => "Hoje encerra o nosso último dia de festival, vocês estão prontos pra uma programação cheia de diversidade? Então confere nossa programação de quarta-feira 09/12",
                "data" => date("Y-m-d H:i:s", strtotime("2020-12-09 20:00:00")),
            ],
            [
                "nome" => "Clara Maciel",
                "responsavel" => "Clara Maciel",
                "local" => "Live",
                "banner" => "/imgTeste/teste5.jpeg",
                "descricao" => "Hoje encerra o nosso último dia de festival, vocês estão prontos pra uma programação cheia de diversidade? Então confere nossa programação de quarta-feira 09/12",
                "data" => date("Y-m-d H:i:s", strtotime("2020-12-09 20:00:00")),
            ],
            [
                "nome" => "Coletivo Piracema",
                "responsavel" => "Coletivo Piracema",
                "local" => "Live",
                "banner" => "/imgTeste/teste7.jpeg",
                "descricao" => "Hoje encerra o nosso último dia de festival, vocês estão prontos pra uma programação cheia de diversidade? Então confere nossa programação de quarta-feira 09/12",
                "data" => date("Y-m-d H:i:s", strtotime("2020-12-09 21:00:00")),
            ]
        ]);
    }
}
