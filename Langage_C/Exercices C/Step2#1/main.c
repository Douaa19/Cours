#include <stdio.h>
#include <stdlib.h>
#include <stdbool.h>
#define MAX(a,b) a>b ? 1 : 0
int main()
{
    int a, b;
    printf("Etrer le nombre de a: ");
    scanf("%d", &a);
    printf("Etrer le nombre de b: ");
    scanf("%d", &b);
    bool MA = MAX(a,b);

    printf("%s", MA ? "True" : "False");



    return 0;
}
