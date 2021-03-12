class Solution {
	public static int addDigits(int num) {
        if (num < 10) return num;
       
        return addDigits(Math.abs(num / 10) + Math.abs(num % 10));
    }
}