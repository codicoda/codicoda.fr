PROJECT_NAME := codicodafr

up:
	docker-compose -p $(PROJECT_NAME) up -d --build

down:
	docker-compose -p $(PROJECT_NAME) down --volumes --remove-orphans
	docker network prune -f
