class Solution {
    public int[] sortArrayByParity(int[] A) {
        Integer[] result = new Integer[A.length];
        for (int i = 0; i < A.length; ++i)
            result[i] = A[i];

        Arrays.sort(result, (a, b) -> Integer.compare(a%2, b%2));

        for (int i = 0; i < A.length; ++i)
            A[i] = result[i];
        
        return A;
    }
}