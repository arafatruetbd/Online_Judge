#include<cstdio>
#include<cmath>
using namespace std;

int main()
{
   freopen("Problem Cin.txt","r",stdin);
   freopen("Problem Cout.txt","w",stdout);  
    int n;
    double r;

    scanf("%d",&n);

    for(int i=0;i<n;i++)
    {
        scanf("%lf",&r);
        printf("Case %d: %.2lf\n",i+1,(pow(r*2,2)-(2*acos(0.0)*pow(r,2))+pow(10,-9)));
    }


    return 0;
}