<?php

Class Bob
{
    function respondTo(string $str)
    {
        $str = trim($str);

        if ($this->yellQuestion($str)) {
            return "Calm down, I know what I'm doing!";
        }

        if ($this->yelling($str)) {
            return "Whoa, chill out!";
        }

        if ($this->question($str)) {
            return "Sure.";
        }

        if ($this->silence($str)) {
            return "Fine. Be that way!";
        }

        return "Whatever.";
    }

    /**
     * IS yelling
     *
     * @param string $str
     * @return bool
     */
    private function yelling(string $str): bool
    {
        return preg_match('/\p{L}/', $str) && strtoupper($str) == $str;
    }

    /**
     * Is yelling and question
     *
     * @param string $str
     * @return bool
     */
    private function yellQuestion(string $str): bool
    {
        return ($this->question($str) && $this->yelling($str)) ? true : false;
    }

    /**
     * Is question
     *
     * @param string $str
     * @return bool
     */
    private function question(string $str): bool
    {
        return preg_match('/\?$/', $str);
    }

    /**
     * Is empty string
     *
     * @param string $str
     * @return bool
     */
    private function silence(string $str): bool
    {
        return empty($str);
    }
}