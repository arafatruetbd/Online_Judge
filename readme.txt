Simple Project:
1. Submit a Program in C or C++
2. Execute by Teachers or Judges 
3. Give a result 
4. Show sumbmissions
5. Show standings(Only based on the number of problem solved by a contestant or team)

Database Name: OnlineProject
Table: user
Field: ID, userName, Password, teacher(For admin value is 2)
Table: submitteddata
Field: ID, submitTime, userName, Problem, Lang, Verdict
Table: judgetable
Field: ID, judgeNo, Lang, FileName


Default User : admin Password: admin

1. login: if Login succeded then go to user or admin or Judges folder.
2. In user folder: User can submit a code, find all of his submissions and current standing of the contest. 
3. In judges folder(currently we set only 2 judge for the contest): Judge can execute a submitted code of his problems, can find current standing of the contest. We consider that each judge will set 3 problems of the contest in following order.
4. In admin folder: Admin can find the current condition of his contest environment.

in user code:
#include<bits/stdc++.h>
using namespace std;

int main(){
     freopen("'Problem name without quote'out.txt","w",stdout);
     freopen("'Problem name without quote'in.txt","r",stdin);
     ".....Users code will start from here....."
     return 0;
}

must be wrritten this portion.
That's it. Thank you. Enjoy our project.