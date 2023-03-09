SRC = ./docker-compose.yml
NAME = BIVOUAC 
ENV = .env
VENDOR = vendor

all : ${NAME}

${NAME}: ENV VENDOR
	./vendor/bin/sail up

VENDOR:
	./vendor.sh

ENV: .env.example
	cp .env.example .env

re : fclean all

clean :
	docker-compose -f ${SRC} down

fclean :
	docker-compose -f ${SRC} down --rmi all