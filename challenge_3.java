class Solution {
    public List<Integer> partitionLabels(String S) {
       
        int[] last = new int[26];
        for (int i = 0; i < S.length(); ++i){
            last[S.charAt(i) - 'a'] = i;
        }
        
        int boundary = 0, cnt = 0;
        List<Integer> result = new ArrayList();
        for (int i = 0; i < S.length(); ++i) {
            char curChar = S.charAt(i);
            boundary = Math.max(boundary, last[curChar - 'a']);
            cnt++;
           
            if (i == boundary) {
                result.add(cnt);
                cnt = 0;
            }
        }
        
        return result;
    }
}