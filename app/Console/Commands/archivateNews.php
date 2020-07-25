<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Model\NewsModel as News;
use App\Model\NewsArchiveModel as Arhive;
use DateTime;
use DateInterval;

class archivateNews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'news:archiving {date?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'News older than 30 days are archived unless another date is specified in format dd.mm.yyyy';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $date = strtotime($this->argument('date'));
        if (empty($date)) {
            $dateTime = new DateTime(now());
            $dateTime->sub(new DateInterval('P30D'));
            $date = $dateTime->getTimestamp();
        }

        $news = new News();
        $result = $news->getDataMoreThenDate(date("Y-m-d H:i:s", $date));
        foreach ($result as $row) {
            $data = [
                'title' => $row->title,
                'text' => $row->text,
                'news_date' => $row->created_at,

            ];
            $archive = new Arhive();
            $resultArhive = $archive->setData($data);
            if ($resultArhive) {
                $news->delete($row->id);
            }
        }
    }
}
