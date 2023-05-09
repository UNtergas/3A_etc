#include<stdio.h>
#include<pwd.h>
#include<stdlib.h>
#include<sys/types.h>	

int main(int argc, char ** argv)
{
	struct passwd *ptr;
	ptr=getpwnam(argv[1]);
	if(ptr!=NULL)
	{
		printf("%s\n",ptr->pw_name);
		printf("%s\n",ptr->pw_passwd);
		printf("%d\n",ptr->pw_gid);
		printf("%d\n",ptr->pw_uid);

	}


}