<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Carbon\Carbon;

final class ScrapingController extends Controller
{
    /**
     * @var array
     */
    private $result = [];

    /**
     * @var array
     */
    private $keys = [];

    /**
     * @var Carbon
     */
    private $date;

    /**
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $this->fifa();

        return view('test', [
            'rows' => collect($this->result),
            'date' => $this->date,
        ]);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function download()
    {
        $this->fifa();

//         $this->result
    }

    private function fifa()
    {
        $client = new \Goutte\Client;

        /**
         * @var \Symfony\Component\DomCrawler\Crawler $crawler
         */
        $crawler = $client->request('GET', 'https://www.fifa.com/fifa-world-ranking/ranking-table/men/');

//         $title = $crawler->filter('head > title')->text();
        $this->date = Carbon::parse($crawler->filter('div.fi-selected-item')->eq(0)->text());

        $this->keys = [
            'Rnk',
            'Team',
            'Total Points',
            'Previous Points',
            '+/-',
            'Positions',
            'Confederations',
        ];

        $crawler->filter('table#rank-table')->each(function ($table) {
//             $table->filter('thead')->each(function ($thead) {
//                 $thead->filter('tr')->each(function ($tr) {
//                     $tr->filter('th')->each(function ($th, $i) {
//                         $this->keys[$i] = $th->text();
//                     });
//                 });
//             });
            $table->filter('tbody')->each(function ($tbody) {
                $tbody->filter('tr')->each(function ($tr) {
                    $tr->filter('td')->each(function ($td, $i) use ($tr) {
                        $this->result[$tr->attr('data-team-id')][$this->keys[$i]] = preg_replace("/\s(?=\s)/", "", trim(str_replace(["\r\n", "\r", "\n"], "", $td->text()), " "));
                    });
                });
            });
        });

//         dd($this->result[43935]);
    }
}
