#include <stdio.h>
#include <stdlib.h>

int main()
{
    int N, i = 0;
    float Som;
    Som=0;
    while (N != -1){
    printf("Entrer un nombre: ");
    scanf("%d", &N);
       if (N!=-1) {
       Som+=N;
       i++;
       }
    }
    printf("La moyenne = %f", Som / i);
    return 0;
}
