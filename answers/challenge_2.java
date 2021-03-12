package com.bbo.examtime;

public class challenge_2 {
    public int addDigits(int num) {
        while(num / 10 > 0) {
            int a = 0;
            while(num > 0) {
                a += num % 10;
                num /= 10;
            }
            num = a;
        }
        return num;
    }
}
