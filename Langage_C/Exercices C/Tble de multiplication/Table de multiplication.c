#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main()
{
    int N, M, i;
    printf("Entrer le nombre N: ");
    scanf("%d", &N);
    for(i=1;i<=10;i++){
    M= N*i;
    printf("%d*%d=%d\n",N , i, M);
}

    return 0;
}
