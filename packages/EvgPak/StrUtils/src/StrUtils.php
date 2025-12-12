<?php

namespace EvgPak\StrUtils;

class StrUtils
{
    /**
     * Получить инициалы из строки
     */
    public function initials(string $name): string
    {
        $words = explode(' ', $name);
        $initials = '';

        foreach ($words as $word) {
            $initials .= mb_strtoupper(mb_substr($word, 0, 1), 'UTF-8');
        }

        return mb_substr($initials, 0, 2);
    }

    /**
     * Вычислить время чтения в минутах
     */
    public function readTime(string $text): string
    {
        $averageWordsPerMinute = 200;
        $wordCount = $this->countWords(strip_tags($text));
        $minutes = ceil($wordCount / $averageWordsPerMinute);

        return $minutes;
    }

    /**
     * Подсчитывает количество слов внутри строки
     */
    public function countWords($str)
    {
        preg_match_all('/\p{L}+/u', $str, $matches);

        return count($matches[0]);
    }
}
