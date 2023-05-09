#include<sys/types.h>
#include<sys/stat.h>
#include<pwd.h>
#include<grp.h>
#include<stdio.h>
#include<stdlib.h>
#include<unistd.h>

#define LTIME 32

void print_stat(const char *ref,struct stat *statut){
    struct  passwd *  pw;
    struct group * grp;
    printf("% %s %s")
}