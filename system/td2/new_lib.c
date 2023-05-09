#include<stdlib.h>
#include<unistd.h>
#include<errno.h>
#include<stdio.h>
#include<string.h>

#include "new_lib.h"

static char buffer;
static int ind = -1;

void *new_malloc(int size){
	void* alloc=sbrk(size);
	if (alloc ==  (void*)-1){
		printf("%s",strerror(errno));
		return NULL;
	}
	return alloc;
}

// void new_printf(char* msg){
// 	if(ind==-1\){
// 		// buffer=new_malloc(BUF_SIZE);
// 		char* buffer=malloc(BUF_SIZE);
// 		if(buffer==NULL){
// 			printf("errno");
// 			exit(EXIT_FAILURE);
// 		}
// 		ind=0;
// 	}
// 	for(int i=0;msg[i]!='\0';i++){
// 		if(msg[i]=='\n'){
// 			if(write(STDOUT_FILENO,buffer,ind)==-1){
// 				perror("write");
// 			}
// 			ind=0;
// 		}
// 		if(msg[i]!='\n'){
// 			buffer[ind]=msg[i];
// 			ind++;
// 		}
// 	}
	
// }

void my_printf(char *msg){
	write(STDOUT_FILENO,msg,strlen(msg));
	printf("\n");
}

int main(int argc,char** argv){
	my_printf(argv[1]);
}
