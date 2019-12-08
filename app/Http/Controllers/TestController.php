<?php
declare(strict_types=1);

namespace App\Http\Controllers;

// use App\Model\Eloquent;

final class TestController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        $this->fifa();
//         $this->iso3166_1();

        return view('test', [
            'rows' => collect($this->result),
        ]);
    }

    private function fifa()
    {
        $client = new \Goutte\Client;

        /**
         * @var \Symfony\Component\DomCrawler\Crawler $crawler
         */
        $crawler = $client->request('GET', 'https://www.fifa.com/fifa-world-ranking/ranking-table/men/');

        $title = $crawler->filter('head > title')->text();
//         dump($title);

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

    private function iso3166_1()
    {
        $client = new \Goutte\Client;

        /**
         * @var \Symfony\Component\DomCrawler\Crawler $crawler
         */
        $crawler = $client->request('GET', 'https://ja.wikipedia.org/wiki/ISO_3166-1');

        $title = $crawler->filter('head > title')->text();
        dump($title);

        $this->keys = [
            'name',
            'alpha_1',
            'numeric',
            'alpha_3',
            'alpha_2',
            'area',
            'section',
        ];

        $crawler->filter('table.wikitable')->each(function ($table) {
//             $table->filter('thead')->each(function ($thead) {
//                 $thead->filter('tr')->each(function ($tr) {
//                     $tr->filter('th')->each(function ($th, $i) {
//                         dump($th->text());
// //                         $this->keys[$i] = $th->text();
//                     });
//                 });
//             });
            $table->filter('tbody')->each(function ($tbody) {
                $tbody->filter('tr')->each(function ($tr, $k) {
                    $tr->filter('td')->each(function ($td, $i) use ($k) {
                        if ($td->attr('colspan') == 7) return;

//                         dump($td->text());
                        $this->result[$k][$this->keys[$i]] = $td->text();
                    });
                });
            });
        });

        $items = array_values($this->result);

//         \Storage::put('countries.json', json_encode(array_values($this->result), JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_NUMERIC_CHECK/*|JSON_HEX_TAG |JSON_HEX_APOS|JSON_HEX_QUOT|JSON_HEX_AMP*/));

        foreach ($items as $item) {
//             $area = Eloquent\Area::firstOrCreate(['name' => $item['area']]);
//             Eloquent\Country::create([
//                 'name' => $item['name'],
//                 'code' => $item['numeric'],
//                 'alpha_1' => $item['alpha_1'],
//                 'alpha_2' => $item['alpha_2'],
//                 'alpha_3' => $item['alpha_3'],
//                 'name' => $item['name'],
//                 'area_id' => $area->getKey(),
//             ]);
        }

        dd('end.');
    }
}
