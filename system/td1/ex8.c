#include<sys/syscall.h>
#include<unistd.h>
#include<stdio.h>


int main(){
	// (void)syscall(SYS_write,STOUT_FILENO,"hello\n",6);

	int rct= syscall(SYS_write,STDOUT_FILENO,"hello\n",20);
	printf("%i\n",rct);
	perror("ERREURS:");
}