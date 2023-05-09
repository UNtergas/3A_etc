C=gcc
CFLAGS=-W -Wall -std=c99
LDFLAGS=
EXEC=ex8
SRC= ex8.c 
OBJ= $(SRC:.c=.o)
NOM= "default"

all: $(EXEC)

app: $(OBJ)
	$(CC) -o $@ $^ $(LDFLAGS)

%.o: %.c
	$(CC) -o $@ -c $< $(CFLAGS) -I../generator

.PHONY: clean mrproper cleanexe build yeetc

clean:
	rm -rf *.o 

yeetc:
	rm -rf *.c
delc:
	rm  -rf $(filter-out $@,$(MAKECMDGOALS)).c
delexe:
	rm  -rf $(filter-out $@,$(MAKECMDGOALS))

mrproper: clean
	rm -rf $(EXEC)

cleanexe:
	ls | grep -v "\." | grep -v Makefile | xargs rm 

# build:
# 	gcc -Wall -c $(NOM).c -o $(NOM)

build:
	gcc -Wall $(filter-out $@,$(MAKECMDGOALS)).c -o $(filter-out $@,$(MAKECMDGOALS))

buildobj:
	gcc -Wall -c  $(filter-out $@,$(MAKECMDGOALS)).c 