public static List<Integer> partition(String S) {
       List<Integer> result = new ArrayList();
        
        int lastPartition = 0, targetIndex = 0;
        
        for (int i = 0; i < S.length(); ++i) {
            targetIndex = Math.max(targetIndex, S.lastIndexOf(S.charAt(i)));
            if (targetIndex == i) {
                    result.add(i - lastPartition + 1);
                    lastPartition = i + 1;
                }
        }
        
        return result;
    }