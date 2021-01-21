#include <stdio.h>
#include <stdlib.h>

int main()
{
    float T;
    printf("La teprerature de l'eau: ");
    scanf("%f", &T);
    if (T>0)
        if (T<100)
        printf("LIQUIDE");
        else
            printf("VAPEUR");
    else
        printf("GLACE");


    return 0;
}
