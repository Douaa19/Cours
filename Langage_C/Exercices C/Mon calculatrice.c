#include <stdio.h>
#include <stdlib.h>
#include <math.h>

int main()
{
    int a, b, sum, sus, mul, div, rest;
    printf("Entrer la valeur de a= \n");
    scanf("%d", &a);
    printf("a=%d\n", a);
    printf("Entrer la valeur de b= \n");
    scanf("%d", &b);
    printf("b=%d\n", b);
    sum=a+b;
    printf("sum=%d\n", sum);
    sus=a-b;
    printf("sus=%d\n", sus);
    mul=a*b;
    printf("mul=%d\n", mul);
    div=a/b;
    printf("div=%d\n", div);
    rest=a%b;
    printf("rest=%d\n", rest);




    return 0;
}
