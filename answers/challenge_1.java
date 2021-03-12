package com.bbo.examtime;

public class challenge_1 {
    public int[] sortArrayByParity(int[] A) {
        int ecount = 0, ecounter = 0, ocounter = 0;
        int[] E, O;

        for(int a = 0; a < A.length; a++) {
            if(A[a] % 2 == 0) {
                ecount++;
            }
        }

        E = new int[ecount];
        O = new int[A.length - ecount];

        for(int a = 0; a < A.length; a++) {
            if(A[a] % 2 == 0) {
                E[ecounter++] = A[a];
            } else {
                O[ocounter++] = A[a];
            }
        }

        // Insert
        for(int a = 0; a < A.length; a++) {
            if(a < ecount) {
                A[a] = E[a];
            } else {
                A[a] = O[a - ecount];
            }
        }

        return A;
    }
}
