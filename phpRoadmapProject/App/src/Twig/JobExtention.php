<?php


namespace App\Twig;


use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use function Twig\Extra\Markdown\twig_html_to_markdown;

class JobExtention extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('to_table', [$this, 'formatJob']),
        ];
    }

    public function formatJob($items)
    {
        if (empty($items)){
           return "";
        }
        $headers = array_keys($items[0]);
        $table = "";
        foreach ($headers as $header){
            $table.= str_pad($header, $this->getColumnLength($items, $header)+6, " ",STR_PAD_BOTH)."|";
        }
        $table = "|{$table}\n";
        foreach ($headers as $header){
            $table.= "|".str_pad("-", $this->getColumnLength($items, $header)+6, "-", STR_PAD_BOTH);
        }
        $table = "{$table}|\n";

        foreach ($items as $item){
            $array = array_values($item);
            foreach ($headers as $key => $header){
                $table.= "|".str_pad($array[$key], $this->getColumnLength($items, $header)+6, " ", STR_PAD_BOTH);
            }
            $table = "{$table}|\n";
        }
        return $table;
    }

    /**
     * @param $items
     * @param string $column
     * @return int
     */
    public function getColumnLength($items, string $column): int
    {
        return max(array_map("strlen", array_column($items, $column)));
    }
}