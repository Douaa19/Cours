#include <stdio.h>
#include <stdlib.h>

int main()
{
    int N;
    printf("Entrer le nombre du jour: ");
    scanf("%d", &N);
    switch(N){
        case 1:
            printf("Lundi");
            break;
        case 2:
            printf("Mardi");
            break;
        case 3:
            printf("Mercredi");
            break;
        case 4:
            printf("Joudi");
            break;
        case 5:
            printf("Vendredi");
            break;
        case 6:
            printf("Samedi");
            break;
        case 7:
            printf("Dimanche");
            break;
        default:
            printf("Le nombre est incorrecte");
        break;
    }
    return 0;
}
