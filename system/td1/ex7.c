#include<stdlib.h>
#include<stdio.h>


int main(int argc, char ** argv){
	printf("%s est %s\n",argv[1],getenv(argv[1]));
}