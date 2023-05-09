#include <stdio.h>
#include <stdlib.h>

#include "list.h"

/*****************************************************************************
*                                                                            *
*  ------------------------------ print_list ------------------------------  *
*                                                                            *
*****************************************************************************/


void list_init(List *list, void (*destroy)(void *data))
{
    List* nlist=(List*)malloc(sizeof(struct List));

    nlist->destroy()=destroy();

}


void list_destroy(List *list)
{
    list->destroy();
}


int list_ins_next(List *list, ListElmt *element, const void *data)
{   
    ListElmt* newelement=(ListElmt *)malloc(sizeof(ListElmt));
    newelement->data = (void *)data; 
    if(newelement==NULL){
        return -1;
    }
    if(element == NULL)
    {
        newelement->next=list->head;
        list->head=newelement;
        list->size++;
    }else{
        if(element->next == NULL){
            element->next=newelement;
            newelement->next=NULL;
            list->size++;
        }else{
            newelement->next=element->next;
            element->next=newelement;
            list->size++;
        }
    }
    return 0;
}




static void print_list(const List *list)
{

    ListElmt *element;

    int *data,
        i;

    /*****************************************************************************
*                                                                            *
*  Display the linked list.                                                  *
*                                                                            *
*****************************************************************************/

    fprintf(stdout, "List size is %d\n", list_size(list));

    i = 0;
    element = list_head(list);

    while (1)
    {

        data = list_data(element);
        fprintf(stdout, "list[%03d]=%03d\n", i, *data);

        i++;

        if (list_is_tail(element))
            break;
        else
            element = list_next(element);
    }

    return;
}

/*****************************************************************************
*                                                                            *
*  --------------------------------- main ---------------------------------  *
*                                                                            *
*****************************************************************************/

int main(int argc, char **argv)
{

    List list;
    ListElmt *element;

    int *data,
        i;

    /*****************************************************************************
*                                                                            *
*  Initialize the linked list.                                               *
*                                                                            *
*****************************************************************************/

    list_init(&list, free);

    /*****************************************************************************
*                                                                            *
*  Perform some linked list operations.                                      *
*                                                                            *
*****************************************************************************/

    element = list_head(&list);

    for (i = 10; i > 0; i--)
    {

        if ((data = (int *)malloc(sizeof(int))) == NULL)
            return 1;

        *data = i;

        if (list_ins_next(&list, NULL, data) != 0)
            return 1;
    }

    print_list(&list);

   //suite


  return 0;

}