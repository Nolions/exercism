# Exercism  practice for PHP

## core exercises

1. Hello Word

    Hello Word 是每種程式語言第一個練習題目。
    
    對於會上來用Exercism的人來說，應該多數都可以脫離Hello Word這個練習了，個人認為這個題目主要應該是讓大家練習Exercism CLI，熟係怎麼下載題目跟上傳的解答，所以答案提交後就會通過該練習，並沒有導師Code Review這個階段。

2. Hamming

    字串處理相關練習。
    
    把字串拆成陣列，並個別去比較拆分後個每個字元是否相同。
    
    很基本的字串處理的練習，一開始我是各種語言都說都可用解法：先比較字串長度是否一樣，然後將字串拆分成陣列，再將兩個陣列用`for`或`foreach`將每個元素逐一拿出來比較。
    
    提交後導師給的建議是在PHP可用`str_split`、`array_diff_assoc`去改寫，這樣將有助讓程式更簡短，且有更好的效能。

3. Gigasecond

    計算10^9秒後的時間
    
    根據完成後導師的回覆，在PHP中主要是要去認識並使用 `DateTimeImmutable`類別，並去比較`DateTimeImmutable` 與一般常用`Datetime`類別差異。

4. Blob

    根據Test case去分析，主要知道有以下數種情境：
    
    1. 問句 => Sure
    
    2. 大聲喊叫 => Whoa, chill out!
    
    3. 大聲詢問問題 => Calm down, I know what I'm doing!
    
    4. 叫他，但不說任何話 => Fine. Be that way!
    
    5. 其他對話 => Whatever

    > ***問句*** => 對於問句判斷，就只是判斷句末是不是以`?`最結尾的，如果是就一率回傳Sure>。
    
    > ***大聲*** => 而`大聲`的判一度讓我很困惑，究竟要怎麼去判斷是不是大聲，要是從語句的字面意思嗎？，後來還是仔細去看Text Case大聲相關情境的輸入值才發現，題目所謂的`大聲`只是看語句的每個英文字母是否都是大寫的英文字母；話說這個怎麼情境好像不是用中文語系的吧XD...


## Side Exercises

### EASY

1. Raindrops

2. Sieve
