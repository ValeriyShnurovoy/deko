<?php

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{

    private $news = [
        ['title' => 'Title1', 'text' => 'Text news 1'],
        ['title' => 'Title2', 'text' => 'Text news 2'],
        ['title' => 'Title3', 'text' => 'Text news 3'],
        ['title' => 'Title4', 'text' => 'Text news 4'],
        ['title' => 'Title5', 'text' => 'Text news 5'],
        ['title' => 'Title6', 'text' => 'Text news 6'],
        ['title' => 'Title7', 'text' => 'Text news 7'],
        ['title' => 'Title8', 'text' => 'Text news 8'],
        ['title' => 'Title9', 'text' => 'Text news 9'],
        ['title' => 'Title10', 'text' => 'Text news 10'],
        ['title' => 'Title11', 'text' => 'Text news 11'],
        ['title' => 'Title12', 'text' => 'Text news 12'],
        ['title' => 'Title13', 'text' => 'Text news 13'],
        ['title' => 'Title14', 'text' => 'Text news 14'],
        ['title' => 'Title15', 'text' => 'Text news 15'],
        ['title' => 'Title16', 'text' => 'Text news 16'],
        ['title' => 'Title17', 'text' => 'Text news 17'],
        ['title' => 'Title18', 'text' => 'Text news 18'],
        ['title' => 'Title19', 'text' => 'Text news 19'],
        ['title' => 'Title20', 'text' => 'Text news 20'],
        ['title' => 'Title21', 'text' => 'Text news 21'],
        ['title' => 'Title22', 'text' => 'Text news 22'],
        ['title' => 'Title23', 'text' => 'Text news 23'],
        ['title' => 'Title24', 'text' => 'Text news 24'],
        ['title' => 'Title25', 'text' => 'Text news 25'],
        ['title' => 'Title26', 'text' => 'Text news 26'],
        ['title' => 'Title27', 'text' => 'Text news 27'],
        ['title' => 'Title28', 'text' => 'Text news 28'],
        ['title' => 'Title29', 'text' => 'Text news 29'],
        ['title' => 'Title30', 'text' => 'Text news 30'],
        ['title' => 'Title31', 'text' => 'Text news 31'],
        ['title' => 'Title32', 'text' => 'Text news 32'],
        ['title' => 'Title33', 'text' => 'Text news 33'],
        ['title' => 'Title34', 'text' => 'Text news 34'],
        ['title' => 'Title35', 'text' => 'Text news 35'],
        ['title' => 'Title36', 'text' => 'Text news 36'],
        ['title' => 'Title37', 'text' => 'Text news 37'],
        ['title' => 'Title38', 'text' => 'Text news 38'],
        ['title' => 'Title39', 'text' => 'Text news 39'],
        ['title' => 'Title40', 'text' => 'Text news 40'],
        ['title' => 'Title41', 'text' => 'Text news 41'],
        ['title' => 'Title42', 'text' => 'Text news 42'],
        ['title' => 'Title43', 'text' => 'Text news 43'],
        ['title' => 'Title44', 'text' => 'Text news 44'],
        ['title' => 'Title45', 'text' => 'Text news 45'],
        ['title' => 'Title46', 'text' => 'Text news 46'],
        ['title' => 'Title47', 'text' => 'Text news 47'],
        ['title' => 'Title48', 'text' => 'Text news 48'],
        ['title' => 'Title49', 'text' => 'Text news 49'],
        ['title' => 'Title50', 'text' => 'Text news 50'],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->truncate();

        foreach ($this->news as $new) {
            DB::table('news')->insert([
                'title' => $new['title'],
                'text' => $new['text'],
            ]);
        }
    }
}
