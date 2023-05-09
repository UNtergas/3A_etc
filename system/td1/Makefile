C=gcc
CFLAGS=-W -Wall -std=c99
LDFLAGS=
EXEC=ex8
SRC= ex8.c 
OBJ= $(SRC:.c=.o)

all: $(EXEC)

app: $(OBJ)
	$(CC) -o $@ $^ $(LDFLAGS)

%.o: %.c
	$(CC) -o $@ -c $< $(CFLAGS) -I../generator

.PHONY: clean mrporoper cleanexe build

clean:
	rm -rf *.o 

mrproper: clean
	rm -rf $(EXEC)

cleanexe:
	ls | grep -v "\." | grep -v Makefile | xargs rm 

build:
	gcc -std=C99 -Wall -c $(1).c -o $(1)
